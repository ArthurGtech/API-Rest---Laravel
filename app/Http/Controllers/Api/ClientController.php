<?php

namespace App\Http\Controllers\Api;

use App\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = Client::all();

        return response ()->json($client);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new Client;
        $client -> nome = $request -> nome;
        $client -> cpf = $request -> cpf;
        //dd($client);
        $client -> save();
        //return redirect()-> route('client.index');
        return redirect()-> route('web.clients');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return response ()->json($client);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Client $client)
    {
        if(!empty($request->nome)){
            $client -> nome = $request -> nome;
        }
        if(!empty($request->cpf)){
            $client -> cpf = $request -> cpf;
        }
        //dd($request);
        $client->save();

        //return redirect()-> route('client.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()-> route('client.index');
    }
}
