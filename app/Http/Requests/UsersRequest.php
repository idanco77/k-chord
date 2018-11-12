<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class UsersRequest extends FormRequest {

    public function authorize() {
        return true;
    }

    public function rules(Request $request) {
        
        $user_id = !empty($request['user_id']) ? ',' . $request['user_id'] : '';
        return [
            'name' => 'required|min:2|max:70',
            'email' => 'required|email|unique:users,email' . $user_id,
            'password' => 'required|min:2|max:70|confirmed',
            'address' => 'required|min:2|max:70',
            'role' => 'required',
            'image' => 'image|max:5120',
        ];
        
    }

}
