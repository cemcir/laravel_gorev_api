<?php

namespace App\Http\Controllers;
use App\Core\Utilities\Security\Hashing\HashingHelper;
use App\Core\Utilities\Security\JWT\JwtHelper;
use App\DataAccess\UserModel;
use App\Http\Requests\User\LoginRequest;
use App\Http\Requests\User\UserAddRequest;
use Illuminate\Support\Facades\Session;


class UserController extends Controller
{
    private UserModel $userModel;

    public function __construct(UserModel $userModel)
    {
        $this->userModel = $userModel;
    }

    public function Login(LoginRequest $request):object
    {
        $user = $this->userModel->Get([['username','=',$request->username]]);
        if($user) {
            $user = $user->toArray();
            if(HashingHelper::PasswordVerify($request->password,$user['password'])) {
                $token = JwtHelper::CreateToken($user);
                return response()->json(['status'=>200,'data'=>$token],200,[],JSON_UNESCAPED_UNICODE);
            }
        }
        return response()->json(['status'=>401,'msg'=>'Kullanıcı Adı veya Şifre Yanlış'],401,[],JSON_UNESCAPED_UNICODE);
    }

    public function Add(UserAddRequest $request):object
    {
        $user=$request->all();
        $user['password'] = HashingHelper::PasswordHash($user['password']);
        if($this->userModel->Add($user)) {
            return response()->json(['status'=>200,'msg'=>'Kullanıcı Kaydı Başarılı'],200,[],JSON_UNESCAPED_UNICODE);
        }

        return response()->json(['status'=>400,'msg'=>'Kullanıcı Kaydı Esnasında Hata Oluştu'],400,[],JSON_UNESCAPED_UNICODE);
    }

}
