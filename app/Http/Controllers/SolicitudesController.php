<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Solicitudes;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Auth;
class SolicitudesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Solicitudes::all();

        return view('solicitudes.index')->with(compact('data'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Solicitudes::all();
        return view('solicitudes.create')->with(compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
        $solicitudes = new Solicitudes;
        $solicitudes->tipo_servicio = $request->tipo_servicio;
        $solicitudes->descripcion = $request->descripcion;
        $solicitudes->tipo_solicitud = $request->tipo_solicitud;
        $solicitudes->fecha = $request->fecha;
        $request->$solicitudes->save();
      //  $solicitudes->hora = $request->hora;
        
        //print_r('Se creo correctamente!');
        return view('solicitudes.index')->with(compact('data'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $solicitudes = Solicitudes::find($id);
        return view('solicitudes.edit')->with(compact('solicitudes'));
      /*  $data = user::find($id);
        return view('solicitudes.edit')->with(compact('data'));*/
    }

    /**
     * Update the specified resource in storage.
     */
    
    public function update(Request $request, string $id)
    {
        $solicitudes = Solicitudes::find($id);
        $solicitudes->tipo_solicitud = $request->tipo_solicitud;
        $solicitudes->descripcion = $request->descripcion;
        $solicitudes->tipo_solicitud = $request->tipo_solicitud;
        $solicitudes->fecha = $request->fecha;
        $solicitudes->hora = $request->hora;
       
        $solicitudes->save();
        return redirect()->route('solicitudes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $solicitudes = Solicitudes::find($id)->delete();
        return redirect()->route('solicitudes.index');
    }
}
