<?php

namespace App\Http\Controllers;

use App\Product;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // return \Cart::getContent();

        return view('theme::cart.cart');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Product $product)
    {

        if ($product->restaurant->slug !== session()->get('cartIntance')) {

            session()->put('cartIntance',  $product->restaurant->slug);
            
           \ Cart::clear();
        }
        
         \Cart::add($product->id, $product->name, $product->price, 1, array())->associate('App\Product');
          
        return back()->with(['success' => 'Item added Successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($rowId)
    {
        \Cart::remove($rowId);
        return back()->withSuccess('Item Deleted Successfully');
    }
}
