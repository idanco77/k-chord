<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;
use Image;

class Categorie extends Model {

    static public function save_new($request) {
        $image_name = 'categories_default_image.jpg';
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');
            $image_name = date('Y.m.d.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('image')->move(public_path() . '/images', $image_name);

            $img = Image::make(public_path() . '/images/' . $image_name);
            $img->resize(350, 200);
            $img->save();
        }

        $category = new self();
        $category->title = $request['title'];
        $category->article = $request['article'];
        $category->image = $image_name;
        $category->url = $request['url'];
        $category->save();
        Session::flash('sm', 'Category saved');
    }

    static public function update_item($request, $id) {
        $image_name = '';
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');
            $image_name = date('Y.m.d.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('image')->move(public_path() . '/images', $image_name);

            $img = Image::make(public_path() . '/images/' . $image_name);
            $img->resize(350, 200);
            $img->save();
        }

        $category = self::find($id);
        $category->title = $request['title'];
        $category->article = $request['article'];

        if ($image_name) {
            $category->image = $image_name;
        }
        
        $category->url = $request['url'];
        $category->save();
        Session::flash('sm', 'Category updated');
    }

}
