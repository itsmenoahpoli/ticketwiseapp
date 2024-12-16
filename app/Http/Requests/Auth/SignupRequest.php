<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
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
			'name'			=> 'required|string',
            'email' 		=> 'required|email|unique:users',
			'password' 		=> 'required|string|min:8|max:64',
			'contact_no' 	=> 'required|string|unique:users',
			'gender' 		=> 'required|in:male,female',
			'birth_date' 	=> 'required|date',
        ];
    }
}
