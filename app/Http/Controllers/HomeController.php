<?php

namespace App\Http\Controllers;

use App\Post;
use App\Product;
use App\Restaurant;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $restaurants =  Restaurant::active()->get();
        $restaurants =  Restaurant::featured()->paginate(6);
   
        $products =  Product::featured()->paginate(6);
   
        return view('theme::home' , ['restaurants' => $restaurants, 'products' => $products]);


    }


    public function contact()
    {
        return view('theme::contact');
    }

    public function checkout()
    {
        return view('theme::checkout');
    }
  
    public function cart()
    {
        return view('theme::cart.cart');
    }

    public function features()
    {
        return view('theme::features');
    }

    public function pricing()
    {
        return view('theme::pricing');
    }

}
