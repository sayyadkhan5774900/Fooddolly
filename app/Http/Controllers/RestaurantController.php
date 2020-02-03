<?php

namespace App\Http\Controllers;

use App\ProductCategory;
use App\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{

    public function index()
    {
        // $restaurants =  Restaurant::published()->paginate(6);
       
        $restaurants =  Restaurant::paginate(6);

        // $restaurant =  Restaurant::find(1);
        // dd($restaurant->categories()->find(5)->categories());
        
        return view('theme::restaurant.index',['restaurants' => $restaurants]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant)
    {

        
      //  $restaurant = Restaurant::findBySlug($slug);
        
        return view('theme::restaurant.show',['restaurant' => $restaurant]);
    }
}
