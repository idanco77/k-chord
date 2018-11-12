<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use DB;
use App\Product;
use Cart;
use Session;
use App\Order;

class ShopController extends MainController {

    public function categories() {
        self::$data['title'] .= 'Shop';
        self::$data['categories'] = Categorie::all()->toArray();
        return view('content.categories', self::$data);
    }

    public function products(Request $request, $category) {
        Product::getProducts($request, $category, self::$data);
        self::$data['categories'] = Categorie::all()->toArray();
        if(!empty($request['orderBy'])){
            self::$data['orderBy'] = $request['orderBy'];
        }
        
        return view('content.products', self::$data);
    }

    public function product($category, $product) {
        Product::get_item($category, $product, self::$data);
        self::$data['categories'] = Categorie::all()->toArray();
        self::$data['title'] .= self::$data['product']->title;

        return view('content.item', self::$data);
    }

    public function addToCart(Request $request) {
        Product::addToCart($request['pid']);
    }

    public function checkout() {
        $cartCollection = Cart::getContent();
        $cart = $cartCollection->toArray();
        sort($cart);
        self::$data['title'] .= 'checkout';
        self::$data['cart'] = $cart;
        return view('content.checkout', self::$data);
    }

    public function updateCart(Request $request) {
        Product::updateCart($request);
    }

    public function clearCart() {
        Cart::clear();
        return redirect('shop/checkout');
    }

    public function removeItem($id) {
        Cart::remove($id);
        return redirect('shop/checkout');
    }

    public function order() {
        if (Cart::isEmpty()) {
            return redirect('shop/checkout');
        } else {
            if (!Session::has('user_id')) {
                return redirect('user/login?rn=shop/checkout');
            } else {
                Order::save_new();
                return redirect('shop');
            }
        }
    }

    public function search(Request $request) {
        Product::search_product($request);
    }

}
