<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\DB;

use App\Sale;
use App\Item;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = Sale::all();

        return response ()->json($sales);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sale = new sale;
        $sale -> fk_clie = $request -> fk_clie;
        $sale -> valor = $request -> valor;
        //dd($sale);
        $sale-> save();
        return redirect()-> route('sale.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Sale $sale)
    {
        //GET|HEAD  | api/sale/{sale}
        $items =  DB::table('items')->where('cod_venda', $sale->id)->get(); //buscando itens da venda

        $client =  DB::table('clients')->find($sale->fk_clie); //buscando cliente da venda
        $data[] = ['Client' => $client->nome];

        //pra cada item da venda, imprimir informações
        foreach($items as $item){   
            $produto =  DB::table('products')->find($item->fk_prod); //buscando informações do produto dos itens
            $data[] = [
                'Desc:'=> $produto->desc,
                'Valor Uni:' => $produto->valor,
                'Quantidade:'=> $item->qtd,
                'valor:' => $item->valor];
            //echo "</br>código do produto: $item->fk_prod";
            //echo "</br>id: $item->id";
        }
        $data[] = ['Valor total:' => $sale->valor];
            
        return response ()->json($data, 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Sale $sale)
    {
        if(!empty($request->fk_clie)){
            $sale -> fk_clie = $request -> fk_clie;
        }
        if(!empty($request->valor)){
            $sale -> valor = $request -> valor;
        }
        //dd($request);
        $sale->save();

        return redirect()-> route('sale.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sale $sale)
    {
        $sale->delete();
        return redirect()-> route('sale.index');
    }
}
