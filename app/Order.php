<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cart,
    Session,
    DB;

class Order extends Model {

    static public function save_new() {
        $cartArray = Cart::getContent()->toArray();

        foreach ($cartArray as $val => $item) {
            $sql = "UPDATE products SET stock = GREATEST(stock - ?, 0) WHERE id = ?";
            DB::update($sql, [$item['quantity'], $val]);
        }


        $order = new self();
        $order->user_id = Session::get('user_id');
        $order->data = serialize($cartArray);
        $order->price_exclude_tax = Cart::getTotal();
        $order->total_price_include_tax = Cart::getTotal() * 1.2;
        $order->save();
        Cart::clear();
        Session::flash('sm', 'Thanks, ' . Session::get('user_name') . '! Your order saved');
    }

    static public function get_orders() {
        $orders = DB::table('orders')
                ->join('users', 'orders.user_id', '=', 'users.id')
                ->select('orders.*', 'users.name')
                ->where('orders.user_id', '=', Session::get('user_id'))
                ->get()
                ->toArray();

        return $orders;
    }

    static public function getAll() {
        return DB::table('orders as o')
                        ->join('users as u', 'o.user_id', '=', 'u.id')
                        ->select('o.*', 'u.name')
                        ->orderBy('o.created_at', 'DESC')
                        ->get()
                        ->toArray();
    }

}
