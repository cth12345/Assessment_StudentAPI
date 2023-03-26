<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStudentRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        $method=$this->method();
        if($method=='PUT'){
            return [
                'name'=>['required'],
                'email'=>['required','email'],
                'address'=>['required'],
                'course'=>['required'],
            ];
        }
        else if($method=='PATCH'){
            return [
                'name'=>['sometimes','required'],
                'email'=>['sometimes','required','email'],
                'address'=>['sometimes','required'],
                'course'=>['sometimes','required'],
            ];
        }
    }
}
