<?php

namespace App\Http\Requests\Task;

use App\Http\Requests\BaseRequest;
use Illuminate\Foundation\Http\FormRequest;

class TaskUpdateRequest extends BaseRequest
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
            'taskId'=>['required','integer'],
            'title'=>['required','string'],
            'description'=>['required','string'],
            'status'=>['required','string'],
            'dueDate'=>['required','date'],
            'assignedUserId'=>['required','integer']
        ];
    }
}
