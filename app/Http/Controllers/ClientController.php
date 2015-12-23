<?php

namespace DasProject\Http\Controllers;

use DasProject\Models\Client;
use DasProject\Repositories\ClientRepository;
use Illuminate\Http\Request;

use DasProject\Http\Requests;
use DasProject\Http\Controllers\Controller;

class ClientController extends Controller
{
    /**.
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(ClientRepository $repositorie)
    {
        //return Client::all();
        return $repositorie->all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        return Client::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return Client::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $client = Client::find($id);
        $client->fill($request->all())
               ->save();
        return $client;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Client::find($id)->delete();
    }
}
