<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSprocketsRequest;
use App\Http\Resources\SprocketsResource;
use App\Models\Sprockets;
use Illuminate\Http\Request;

class SprocketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return SprocketsResource::collection(Sprockets::all());
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
    public function store(StoreSprocketsRequest $request)
    {
        $sprockets = new Sprockets();
        $sprockets->item = $request['item'];
        $sprockets->description = $request['description'];
        $sprockets->count = $request['count'];
        $sprockets->cost = $request['cost'];
        $sprockets->save();
        return response(200);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Sprockets $sprockets
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function show($id)
    {
        return Sprockets::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sprockets  $sprockets
     * @return \Illuminate\Http\Response
     */
    public function edit(Sprockets $sprockets)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sprockets  $sprockets
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sprockets $sprockets)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sprockets  $sprockets
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sprockets $sprockets)
    {
        $sprockets->delete();
        return response(null, 204);
    }
}
