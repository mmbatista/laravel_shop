<?php

namespace App\Http\Controllers;

use App\Product;
use App\Brand;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        $brands =  Brand::get();
            foreach ($brands as $brand) {
            $brand->description = $brand->name;
        }


        return view('products.index', compact('products', 'brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands =  Brand::get();
            foreach ($brands as $brand) {
            $brand->description = $brand->name;
        }

        return view('products.create', compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [

            'name' => 'required|string|max:30',
            'segment' => 'required|string|max:30',
            'price' => 'required|numeric',

            'brand_id' => 'required|integer|exists:brands,id'
            // 'brand_id' => 'required'

        ]);

        $fields = [
            
            'name' => request('name'),
            'segment' => request('segment'),
            'price' => request('price'),
            'brand_id' => request('brand_id')
        ];

        Product::create($fields);

        return redirect('/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //$product = Product::find($id);
        
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.update', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $this->validate(request(), [

            'name' => 'required|string|max:30',
            'segment' => 'required|string|max:30',
            'price' => 'required|numeric',          

        ]);

        $fields = [

            'name' => request('name'),
            'segment' => request('segment'),
            'price' => request('price'),
        ];

        $product->update($fields);

        return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect('/products');
    }
}
