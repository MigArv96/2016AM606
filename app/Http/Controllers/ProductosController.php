<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;


class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataproduct=Productos::all();
        return view('productos.index', compact('dataproduct'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataproduct = $request->except('_token','saveitem');
        Productos::insert($dataproduct);
        //return response()->json($dataProducts);
        return redirect('productos/');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(Productos $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $dataproduct = Productos::findOrFail($id);
        return view('productos.edit', compact('dataproduct'));
     }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){

        $dataproducts = Productos::findOrFail($id);
        $dataproducts->update($request->all());
        return redirect('productos');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $dataproduct = Productos::findOrFail($id);
        $dataproduct->delete();
        return redirect('productos');
    }



}
