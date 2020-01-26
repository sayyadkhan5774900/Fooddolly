<?php

namespace App\Http\Controllers;

use App\Post;
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
        // return view('theme::home' , ['restuarants' => $restaurants]);

        return view('theme::home');
    }


    public function contact()
    {
        return view('theme::contact');
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
