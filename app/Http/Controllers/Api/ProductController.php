<?php

namespace App\Http\Controllers\Api;

use App\Product;

use App\Http\Controllers\Controller;
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

        return response ()->json($products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;
        $product -> desc = $request -> desc;
        $product -> valor = $request -> valor;
        $product -> qtd = $request -> qtd;
        //dd($product);
        $product-> save();
        return redirect()-> route('web.products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return response ()->json($product);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Product $product)
    {
        if(!empty($request->desc)){
            $product -> desc = $request -> desc;
        }
        if(!empty($request->valor)){
            $product -> valor = $request -> valor;
        }
        if(!empty($request->qtd)){
            $product -> qtd = $request -> qtd;
        }
        //dd($request);
        $product->save();

        return redirect()-> route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()-> route('product.index');
    }
}
