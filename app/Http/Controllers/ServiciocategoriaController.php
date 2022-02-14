<?php

namespace App\Http\Controllers;

use App\Models\Serviciocategoria;
use Illuminate\Http\Request;

class ServiciocategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Serviciocategoria::all();
        return response($results);
    }

    public function show($id){
        $data = Serviciocategoria::where('id', $id)->get();

        if(count($data) > 0){
            return response ($data);
        }else{
            return response('No se encontro el Serviciocategoria');
        }
    }

    public function store(Request $request){
        $data = new Serviciocategoria;

        if($request->input('idServicio')){
            $data->idServicio = $request->input('idServicio');
        }else{
            return response('La idServicio esta en blanco');
        }

        if($request->input('idCategoria')){
            $data->idCategoria = $request->input('idCategoria');
        }else{
            return response('La idCategoria esta en blanco');
        }
        
        $data->save();

        return response('Se agrego el Serviciocategoria correctamente');
    }

    public function update(Request $request, $id){
        $data = Serviciocategoria::where('id',$id)->first();

        if($request->input('idServicio')){
            $data->idServicio = $request->input('idServicio');
        }else{
            return response('La idServicio esta en blanco');
        }

        if($request->input('idCategoria')){
            $data->idCategoria = $request->input('idCategoria');
        }else{
            return response('La idCategoria esta en blanco');
        }

        $data->save();
    
        return response('Se modifico el Serviciocategoria correctamente');
    }

    public function destroy($id){
        $data = Serviciocategoria::where('id',$id)->first();
        $data->delete();

        return response('Se borro el Serviciocategoria correctamente');
    }

}