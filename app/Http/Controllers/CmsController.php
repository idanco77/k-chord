<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Order;

class CmsController extends MainController {

    public function dashboard() {
        self::$data['title'] .= 'Admin Panel';
        return view('cms.dashboard', self::$data);
    }

    public function orders() {
        self::$data['title'] .= 'Orders';
        self::$data['orders'] = Order::getAll();

        return view('cms.orders', self::$data);
    }

}
