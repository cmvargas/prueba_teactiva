<?php

namespace App\Http\Controllers;

use App\Models\Peticion;
use Illuminate\Http\Request;

class PeticionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['peticiones']= Peticion::all();
        return view('peticiones.home',  $datos);
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
    public function store(Request $request)
    {
        return redirect('admin/peticiones');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Peticion  $peticion
     * @return \Illuminate\Http\Response
     */
    public function show(Peticion $peticion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peticion  $peticion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peticion = Peticion::where('id_registro', $id)->get();
        return view('peticiones.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Peticion  $peticion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peticion $peticion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peticion  $peticion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = Peticion::where('id_registro', $id)->delete();
        return redirect('admin/peticiones');
    }
}
