<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;
use Image;

class Ad extends Model {

    static public function save_new($request) {
        $image_name = '';
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');
            $image_name = date('Y.m.d.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('image')->move(public_path() . '/images', $image_name);

            $img = Image::make(public_path() . '/images/' . $image_name);
            $img->resize(960, 48);
            $img->save();
        }

        $ad = new self();
        $ad->title = $request['title'];
        $ad->url = $request['url'];
        $ad->image = $image_name;
        $ad->save();
        Session::flash('sm', 'Ad saved');
    }

    static public function update_item($request, $id) {
        $image_name = '';
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');
            $image_name = date('Y.m.d.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('image')->move(public_path() . '/images', $image_name);

            $img = Image::make(public_path() . '/images/' . $image_name);
            $img->resize(960, 48);
            $img->save();
        }

        $ad = self::find($id);
        $ad->title = $request['title'];
        $ad->url = $request['url'];
        $ad->image = $image_name;
        $ad->save();
        Session::flash('sm', 'Ad updated');
    }

}
