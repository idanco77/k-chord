<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class ProductsRequest extends FormRequest {

    public function authorize() {
        return true;
    }

    public function rules(Request $request) {
        $item_id = !empty($request['item_id']) ? ',' . $request['item_id'] : '';
        
        return [
            'categorie_id' => 'required',
            'title' => 'required',
            'article' => 'required',
            'url' => 'required|regex:/^[a-z\d-]+$/|unique:categories,url' . $item_id,
            'price' => 'required|numeric',
            'orgnl_price' => 'required|numeric',
            'stock' => 'required|numeric',
            'image' => 'image|max:5120',
            'image2' => 'image|max:5120',
            'image3' => 'image|max:5120',
            'image4' => 'image|max:5120',
        ];
    }

    public function messages() {
        return [
            'url.regex' => 'url format must contain only lower case, digits and hyphens.',
            'orgnl_price.required' => 'The original price field is required.',
            'orgnl_price.numeric' => 'The original price must be a number.',
        ];
    }

}
