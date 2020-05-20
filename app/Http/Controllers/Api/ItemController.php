<?php

namespace App\Http\Controllers\Api;

use App\Item;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();

        return response ()->json($items);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new Item;
        $item -> fk_prod = $request -> fk_prod;
        $item -> valor = $request -> valor;
        $item -> qtd = $request -> qtd;
        $item -> cod_venda = $request -> cod_venda;
        //dd($item);
        $item-> save();
        return redirect()-> route('item.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        return response ()->json($item);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Item $item)
    {
        if(!empty($request->fk_prod)){
            $item -> fk_prod = $request -> fk_prod;
        }
        if(!empty($request->valor)){
            $item -> valor = $request -> valor;
        }
        if(!empty($request->qtd)){
            $item -> qtd = $request -> qtd;
        }
        if(!empty($request->cod_venda)){
            $item -> cod_venda = $request -> cod_venda;
        }
        //dd($request);
        $item->save();

        return redirect()-> route('item.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()-> route('item.index');
    }
}
