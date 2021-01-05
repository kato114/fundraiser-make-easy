<?php
namespace App\Http\Controllers;

class ShopController extends Controller
{

    /**
     * ShopController constructor.
     */
    public function __construct()
    {
    }

    public function index()
    {
        return view('shop.index');
    }

    public function bedsheet()
    {
        return view('shop.bedsheet');
    }

    public function pillow()
    {
        return view('shop.pillow');
    }

    public function cart()
    {
        return view('shop.cart');
    }

    public function checkout()
    {
        return view('shop.checkout');
    }

}
