<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Cart;
use Session;
use Image;

class Product extends Model {

    static public function getProducts($request, $category, &$data) {
        if (!empty($request['orderBy'])) {
            $products = DB::table('products as p')
                    ->join('categories as c', 'c.id', '=', 'p.categorie_id')
                    ->select('p.*', 'c.title as ctitle', 'c.url as curl', 'c.article as carticle')
                    ->where('c.url', '=', $category)
                    ->orderByRaw('price ' . $request['orderBy'])
                    ->paginate(6);
        } else {
            $products = DB::table('products as p')
                    ->join('categories as c', 'c.id', '=', 'p.categorie_id')
                    ->select('p.*', 'c.title as ctitle', 'c.url as curl', 'c.article as carticle')
                    ->where('c.url', '=', $category)
                    ->paginate(6);
        }
        if ($products->count() > 0) {
            $data['products'] = $products;
            
            $data['title'] .= $data['products'][0]->ctitle . ' products';
        } else {
            abort(404);
        }
    }

    static public function get_item($category, $product, &$data) {
        $sql = "SELECT p.*, c.title as ctitle, c.url as curl FROM products p "
                . "JOIN categories c ON c.id = p.categorie_id "
                . "WHERE c.url = ? AND p.url = ?";

        $data['product'] = DB::select($sql, [$category, $product]);
        if (!$data['product']) {
            abort(404);
        }

        $data['product'] = $data['product'][0];
    }

    static public function addToCart($pid) {
        if ($product = self::find($pid)) {
            $product = self::find($pid)->toArray();

            if (!Cart::get($pid)) {

                Cart::add($pid, $product['title'], $product['price'], 1, [
                    'img' => $product['image'],
                ]);
                Session::flash('sm', "{$product['title']} added to the cart!");
            }
        }
    }

    static public function updateCart($request) {
        if (!empty($request['op']) && !empty($request['pid'])) {
            if (is_numeric($request['pid'])) {
                if ($product = Cart::get($request['pid'])) {
                    $product->toArray();
                    if ($request['op'] == 'plus') {
                        Cart::update($request['pid'], ['quantity' => 1]);
                    } elseif ($request['op'] == 'minus') {
                        if ($product['quantity'] - 1 != 0) {
                            Cart::update($request['pid'], ['quantity' => -1]);
                        }
                    }
                }
            }
        }
    }

    static public function save_new($request) {
        $image_name = 'products_default_image.jpg';
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');
            $image_name = date('Y.m.d.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('image')->move(public_path() . '/images', $image_name);

            $img = Image::make(public_path() . '/images/' . $image_name);
            $img->resize(270, 300);
            $img->save();
        }

        $image_name2 = 'products_default_image.jpg';
        if ($request->hasFile('image2') && $request->file('image2')->isValid()) {
            $file = $request->file('image2');
            $image_name2 = date('Y.m.d.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('image2')->move(public_path() . '/images', $image_name2);

            $img = Image::make(public_path() . '/images/' . $image_name2);
            $img->resize(270, 300);
            $img->save();
        }

        $image_name3 = 'products_default_image.jpg';
        if ($request->hasFile('image3') && $request->file('image3')->isValid()) {
            $file = $request->file('image3');
            $image_name3 = date('Y.m.d.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('image3')->move(public_path() . '/images', $image_name3);

            $img = Image::make(public_path() . '/images/' . $image_name3);
            $img->resize(270, 300);
            $img->save();
        }

        $image_name4 = 'products_default_image.jpg';
        if ($request->hasFile('image4') && $request->file('image4')->isValid()) {
            $file = $request->file('image4');
            $image_name4 = date('Y.m.d.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('image4')->move(public_path() . '/images', $image_name4);

            $img = Image::make(public_path() . '/images/' . $image_name4);
            $img->resize(270, 300);
            $img->save();
        }

        $product = new self();
        $product->categorie_id = $request['categorie_id'];
        $product->title = $request['title'];
        $product->article = $request['article'];
        $product->image = $image_name;
        $product->image2 = $image_name2;
        $product->image3 = $image_name3;
        $product->image4 = $image_name4;
        $product->url = $request['url'];
        $product->price = $request['price'];
        $product->orgnl_price = $request['orgnl_price'];
        $product->stock = $request['stock'];
        $product->save();
        Session::flash('sm', 'Product saved');
    }

    static public function update_item($request, $id) {
        $image_name = '';
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');
            $image_name = date('Y.m.d.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('image')->move(public_path() . '/images', $image_name);

            $img = Image::make(public_path() . '/images/' . $image_name);
            $img->resize(270, 300);
            $img->save();
        }

        $image_name2 = '';
        if ($request->hasFile('image2') && $request->file('image2')->isValid()) {
            $file = $request->file('image2');
            $image_name2 = date('Y.m.d.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('image2')->move(public_path() . '/images', $image_name2);

            $img = Image::make(public_path() . '/images/' . $image_name2);
            $img->resize(270, 300);
            $img->save();
        }

        $image_name3 = '';
        if ($request->hasFile('image3') && $request->file('image3')->isValid()) {
            $file = $request->file('image3');
            $image_name3 = date('Y.m.d.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('image3')->move(public_path() . '/images', $image_name3);

            $img = Image::make(public_path() . '/images/' . $image_name3);
            $img->resize(270, 300);
            $img->save();
        }

        $image_name4 = '';
        if ($request->hasFile('image4') && $request->file('image4')->isValid()) {
            $file = $request->file('image4');
            $image_name4 = date('Y.m.d.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('image4')->move(public_path() . '/images', $image_name4);

            $img = Image::make(public_path() . '/images/' . $image_name4);
            $img->resize(270, 300);
            $img->save();
        }

        $product = self::find($id);
        $product->categorie_id = $request['categorie_id'];
        $product->title = $request['title'];
        $product->article = $request['article'];
        if ($image_name) {
            $product->image = $image_name;
        }
        if ($image_name2) {
            $product->image2 = $image_name2;
        }
        if ($image_name3) {
            $product->image3 = $image_name3;
        }
        if ($image_name4) {
            $product->image4 = $image_name4;
        }
        $product->url = $request['url'];
        $product->price = $request['price'];
        $product->orgnl_price = $request['orgnl_price'];
        $product->stock = $request['stock'];
        $product->save();
        Session::flash('sm', 'Product saved');
    }

    static public function show_products(&$data) {
        $data['products'] = DB::table('products as p')
                ->join('categories as c', 'c.id', '=', 'p.categorie_id')
                ->select('p.*', 'c.title as ctitle', 'c.url as curl', 'c.article as carticle')
                ->get()
                ->toArray();
    }

    static public function search_product($request) {
        if (!empty($request['search'])) {
            $search = $request['search'];

            $sql = "SELECT p.*, c.url as curl FROM products p"
                    . " JOIN categories c ON p.categorie_id = c.id"
                    . " WHERE p.title LIKE ? OR p.article LIKE ?";
            $products = DB::select($sql, ["%$search%", "%$search%"]);

            if ($products) {
                echo json_encode($products);
            }
        }
    }

}
