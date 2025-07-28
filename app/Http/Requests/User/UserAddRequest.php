<?php

namespace App\Http\Requests\User;

use App\Http\Requests\BaseRequest;
use Illuminate\Foundation\Http\FormRequest;

class UserAddRequest extends BaseRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username'=>['required','string','min:3','max:20'],
            'password'=>['required','string'],
            'name'=>['required','string'],
            'surname'=>['required','string'],
            'email'=>['required','email'],
            'phone'=>['required','string'],
            'role'=>['required','string'],
            'image' =>['nullable','image','mimes:jpeg,png,jpg,gif,svg','max:2048']
        ];
    }
}
