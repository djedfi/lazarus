<?php

namespace Lazarus\Http\Controllers;

use Illuminate\Http\Request;

use Lazarus\Http\Requests;
use Lazarus\Obispo;
use Illuminate\Support\Facades\Redirect;
use Lazarus\Http\Requests\ObispoFormRequest;
use DB;

class ObispoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('obispo.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('obispo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ObispoFormRequest $request)
    {

      $obispo = new Obispo;
      $obispo->nombre_completo=$request->get('txtNombre');
      $obispo->fecha_inicio=$request->get('txtDesde');
      $obispo->fecha_fin=$request->get('txtHasta');
      $obispo->mostrar_acta=$request->get('txtMostrar');
      $obispo->save();
      return 'Obispo Registrado 2';

    /*  \Lazarus\Obispo::create([
        'nombre_completo'=>$request['txtNombre'],
        'fecha_inicio'=>$request['txtDesde'],
        'fecha_fin'=>$request['txtHasta'],
        'mostrar_acta'=>$request['txtMostrar'],
      ]);
      Return "Obispo Registrado";*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
