<?php

namespace DasProject\Http\Controllers;

use DasProject\Repositories\ClientRepository;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    private $repository;

    public function __construct(ClientRepository $repository)
    {
        $this->repository = $repository;
    }

    /**.
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //return Client::all();
        return $this->repository->all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        return $this->repository->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return $this->repository->find($id);
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
        $client = $this->repository->find($id);
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
        $this->repository->delete($id);
    }
}
