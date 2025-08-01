<?php

namespace App\Http\Middleware\ValidateRequest;

use App\Business\Validation\ValidationRules;
use App\Core\Validation\ValidationHelper;
use App\Http\Keys;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ValidateCategoryUpdate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $result = ValidationHelper::Run($request,Keys::CategoryUpdate(),ValidationRules::CategoryUpdateValidator());
        if($result!=null) {
            return $result;
        }
        return $next($request);
    }
}
