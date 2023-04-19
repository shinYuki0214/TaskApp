<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Shop;

class ShopController extends Controller
{
    //
    public function index(){
        // 一対多 親(地域)->子(店)
        $shops = Area::find(1)->shops;
        // 一対多 子(店)->親(地域)
        $area = Shop::find(3)->area;

        // 多対多
        $routes = Shop::find(1)->routes()->get();
        dd($routes);
    }
}
