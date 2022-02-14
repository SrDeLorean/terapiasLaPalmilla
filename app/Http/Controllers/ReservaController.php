<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Reserva::all();
        return response($results);
    }

    public function show($id){
        $data = Reserva::where('id', $id)->get();

        if(count($data) > 0){
            return response ($data);
        }else{
            return response('No se encontro la reserva');
        }
    }

    public function store(Request $request){
        $data = new Reserva;

        if($request->input('titulo')){
            $data->titulo = $request->input('titulo');
        }else{
            return response('La titulo esta en blanco');
        }
        
        $data->save();

        return response('Se agrego la reserva correctamente');
    }

    public function update(Request $request, $id){
        $data = Reserva::where('id',$id)->first();

        if($request->input('titulo')){
            $data->titulo = $request->input('titulo');
        }else{
            return response('La titulo esta en blanco');
        }
        $data->save();
    
        return response('Se modifico la reserva correctamente');
    }

    public function destroy($id){
        $data = Reserva::where('id',$id)->first();
        $data->delete();

        return response('Se borro la reserva correctamente');
    }

}