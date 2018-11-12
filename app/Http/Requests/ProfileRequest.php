<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class ProfileRequest extends FormRequest {

    public function authorize() {
        return true;
    }

    public function rules(Request $request) {
        $profile_id = !empty($request['profile_id']) ? ',' . $request['profile_id'] : '';
        return [
            'name' => 'required|min:2|max:70',
            'email' => 'required|email|unique:users,email' . $profile_id,
            'address' => 'required|min:2|max:70',
            'password' => 'required|min:2|max:70|confirmed',
            'profile_image' => 'image|max:5120',
        ];
    }

    public function messages() {
        return [
            'url.regex' => 'url format must contain only lower case, digits and hyphens',
        ];
    }

}
