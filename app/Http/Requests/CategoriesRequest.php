<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class CategoriesRequest extends FormRequest {

    public function authorize() {
        return true;
    }

    public function rules(Request $request) {
        $item_id = !empty($request['item_id']) ? ',' . $request['item_id'] : '';
        return [
            'title' => 'required',
            'article' => 'required',
            'url' => 'required|regex:/^[a-z\d-]+$/|unique:categories,url' . $item_id,
            'image' => 'image|max:5120',
        ];
    }

    public function messages() {
        return [
            'url.regex' => 'url format must contain only lower case, digits and hyphens',
        ];
    }

}
