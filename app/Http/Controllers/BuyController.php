<?php

namespace App\Http\Controllers;

use App\Buy;
use App\Product;
use App\Client;
use Illuminate\Http\Request;

class BuyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = Product::get();

        $buys = Buy::all();

        foreach ($buys as $buy) {
            //$productName = Product::find($buy->product_id)->name;
            $productName = $buy->product()->first()->name;
            $buy->prodName = $productName;
        }

        return view('buys.index', compact('buys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $products =  Product::get();
        foreach ($products as $product) {
            $product->description = $product->name ." /  Segment: ". $product->segment .' /  Price: '. $product->price;
        }

        $clients =  Client::get();
        foreach ($clients as $client) {
            $client->description = $client->id ." /  Postcode: ". $client->postcode . " /  Age: " . $client->age;
        }
    
        return view('buys.create', compact('products', 'clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $this->validate(request(), [
            'product_id' => 'required|integer',
            'quantity' => 'required|integer',
            'client_id' => 'required|integer'
        ]);

        $fields = [

            'quantity' => request('quantity'),
            'client_id' => request('client_id'),
            'product_id' => request('product_id')
        ];

        Buy::create($fields);

        return redirect('/buys');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\buy  $buy
     * @return \Illuminate\Http\Response
     */
    public function show(Buy $buy)
    {
              
        return view('buys.show', compact('buy'));
    }

     public function showDelete(Buy $buy)
    {
              
        return view('buys.delete', compact('buy'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\buy  $buy
     * @return \Illuminate\Http\Response
     */
    public function edit(Buy $buy)
    {
        return view('buys.update', compact('buy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\buy  $buy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buy $buy)
    {
        $this->validate(request(), [

            'quantity' => 'required|integer',
            'client_id' => 'required|integer',
            'product_id' => 'required|integer'
        ]);

        $fields = [

            'quantity' => request('quantity'),
            'client_id' => request('client_id'),
            'product_id' => request('product_id')
        ];

        $buy->update($fields);

        return redirect('/buys');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\buy  $buy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buy $buy)
    {

        $buy->delete();

        return redirect('/buys');
    }
}
