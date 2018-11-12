<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'fname' => 'required|min:2|max:70',
            'lname' => 'required|min:2|max:70',
            'address' => 'required|min:2|max:70',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:2|max:70|confirmed',
            'profile_image' => 'image',
        ];
    }
    
    public function messages(){
        return [
            'fname.required' => 'The first name field is required',
            'lname.required' => 'The last name field is required',
            'fname.min' => 'The first name must be at least 2 charecters',            
            'lname.min' => 'The last name must be at least 2 charecters',
            'fname.max' => 'The first name may not be greater than 70 charecters',
            'lname.max' => 'The last name may not be greater than 70 charecters',
            
        ];
    }

}
