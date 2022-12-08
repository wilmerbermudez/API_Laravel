<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\SaveCompradorRequest;
use App\Http\Requests\UpdateCompradorRequest;
use Illuminate\Http\Request;
use App\Models\Comprador;

class CompradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Comprador::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveCompradorRequest $request)
    {
        Comprador::create($request->all());
        return response()->json([
            'res'=> true,
            'msg' => 'Comprador creado'
        ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comprador $comprador)
    {
        return response()->json([
            'res' => true,
            'comprador' => $comprador
        ],200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompradorRequest $request, Comprador $comprador)
    {
        $comprador->update($request->all());
        return response()->json([
            'res' => true,
            'msg' => 'Comprador Actualizado'
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comprador $comprador)
    {
        $comprador->delete();
        return response()->json([
            'res' => true,
            'msg' => 'Comprador Borrado'
        ],200);
    }
}
