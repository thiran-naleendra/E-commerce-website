<?php

namespace App\Http\Controllers;

use  App\Models\Menu;
use App\Models\area;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {

        $menu = Menu::get();
        return view('order', compact('menu'));
    }

    public function foodOrder()
    {
        return view('food_order');
    }

    public function checkOut()
    {   
        $area =area::get();
        return view('food_order_checkout', compact('area'));
    }

    public function addToCart($id)
    {   
        $food = Menu::find($id);
        $menu = session()->get('menu');

        $menu[$id] = [
            "name" => $food->name,
            "price" => $food->price,
            "quantity" => 1,
        ];
        session()->put('menu', $menu);
        return redirect()->back()->with('success', 'food added to cart successfully');
    }

    public function area()
    {
        

    }
}
