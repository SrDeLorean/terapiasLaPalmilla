<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Categoria::all();
        return response($results);
    }

    public function show($id){
        $data = Categoria::where('id', $id)->get();

        if(count($data) > 0){
            return response ($data);
        }else{
            return response('No se encontro la categoria');
        }
    }

    public function store(Request $request){
        $data = new Categoria;

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
        
        $data->save();

        return response('Se agrego la categoria correctamente');
    }

    public function update(Request $request, $id){
        $data = Categoria::where('id',$id)->first();

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

        $data->save();
    
        return response('Se modifico la categoria correctamente');
    }

    public function destroy($id){
        $data = Categoria::where('id',$id)->first();
        $data->delete();

        return response('Se borro la categoria correctamente');
    }

}