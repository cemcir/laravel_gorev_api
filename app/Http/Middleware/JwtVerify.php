<?php

namespace App\Http\Middleware;

use App\Core\Utilities\Security\JWT\JwtHelper;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class JwtVerify
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        $token=$request->header('Authorization');
        $jwt=explode(' ',$token);

        if(!isset($jwt[0]) || !isset($jwt[1])) {
            return response()->json(['status'=>400,'msg'=>'Geçersiz Kullanıcı']);
        }

        $result=JwtHelper::ValidateToken($jwt[1]);

        if($result['status']!=200) {
            return response()->json($result,401,[],JSON_UNESCAPED_UNICODE);
        }
        $request->attributes->add(['user'=>$result['data']]);

        if(!in_array($result['data']->role,$roles)) {
            return response()->json(['status'=>403,'msg'=>'İşlem İçin Yetkiniz Bulunmamaktadır'],403,[],JSON_UNESCAPED_UNICODE);
        }

        return $next($request);
    }
}
