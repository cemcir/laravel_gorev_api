<?php

namespace App\Core\Utilities\Security\JWT;

require_once "vendor/autoload.php";

use Firebase\JWT\ExpiredException;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class JwtHelper
{
    private static $secretKey = "phplaravelbackenddeveloperenescemcir";
    public static function CreateToken(array $user): string
    {
        return JWT::encode([
            'userId'=>$user['userId'],
            'role'=>$user['role'],
            'iat'=>time(),
            'exp'=>time()+1500 // 25 dk lık Jwt Oluşturduk
        ],self::$secretKey,'HS256');
    }

    public static function ValidateToken(string $jwt)
    {
        try {
            $decode = JWT::decode($jwt,new Key(self::$secretKey,'HS256'));
            return ['status'=>200,'data'=>$decode,'msg'=>null];
        }
        catch (ExpiredException $e) {
            return ['status'=>401,'data'=>[],'msg'=>'Token Süresi Dolmuş'];
        }
        catch (\Exception $e) {
            return ['status'=>401,'data'=>[],'msg'=>'Geçersiz Kullanıcı'];
        }
    }

}
