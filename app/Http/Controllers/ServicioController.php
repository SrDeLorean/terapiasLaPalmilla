<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Servicio::all();
        return response($results);
    }

    public function show($id){
        $data = Servicio::where('id', $id)->get();

        if(count($data) > 0){
            return response ($data);
        }else{
            return response('No se encontro el servicio');
        }
    }

    public function store(Request $request){
        $data = new Servicio;

        if($request->input('titulo')){
            $data->titulo = $request->input('titulo');
        }else{
            return response('La titulo esta en blanco');
        }

        if($request->input('descripcion')){
            $data->descripcion = $request->input('descripcion');
        }else{
            return response('La descripcion esta en blanco');
        }

        if($request->input('precio')){
            $data->precio = $request->input('precio');
        }else{
            return response('La precio esta en blanco');
        }

        if($request->input('idCategoria')){
            $data->idCategoria = $request->input('idCategoria');
        }else{
            return response('La idCategoria esta en blanco');
        }
        
        $data->save();

        return response('Se agrego el servicio correctamente');
    }

    public function update(Request $request, $id){
        $data = Servicio::where('id',$id)->first();

        if($request->input('titulo')){
            $data->titulo = $request->input('titulo');
        }else{
            return response('La titulo esta en blanco');
        }

        if($request->input('descripcion')){
            $data->descripcion = $request->input('descripcion');
        }else{
            return response('La descripcion esta en blanco');
        }

        if($request->input('precio')){
            $data->precio = $request->input('precio');
        }else{
            return response('La precio esta en blanco');
        }

        if($request->input('idCategoria')){
            $data->idCategoria = $request->input('idCategoria');
        }else{
            return response('La idCategoria esta en blanco');
        }

        $data->save();
    
        return response('Se modifico el horario correctamente');
    }

    public function destroy($id){
        $data = Servicio::where('id',$id)->first();
        $data->delete();

        return response('Se borro el servicio correctamente');
    }

}