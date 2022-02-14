<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use Illuminate\Http\Request;

class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Horario::all();
        return response($results);
    }

    public function show($id){
        $data = Horario::where('id', $id)->get();

        if(count($data) > 0){
            return response ($data);
        }else{
            return response('No se encontro el horario');
        }
    }

    public function store(Request $request){
        $data = new Horario;

        if($request->input('inicio')){
            $data->inicio = $request->input('inicio');
        }else{
            return response('La inicio esta en blanco');
        }

        if($request->input('termino')){
            $data->termino = $request->input('termino');
        }else{
            return response('La termino esta en blanco');
        }
        
        $data->save();

        return response('Se agrego el horario correctamente');
    }

    public function update(Request $request, $id){
        $data = Horario::where('id',$id)->first();

        if($request->input('inicio')){
            $data->inicio = $request->input('inicio');
        }else{
            return response('La inicio esta en blanco');
        }

        if($request->input('termino')){
            $data->termino = $request->input('termino');
        }else{
            return response('La termino esta en blanco');
        }

        $data->save();
    
        return response('Se modifico el horario correctamente');
    }

    public function destroy($id){
        $data = Horario::where('id',$id)->first();
        $data->delete();

        return response('Se borro el horario correctamente');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function WithSoftDelete()
    {

        $results = Horario::withTrashed()->get();
        return response($results);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function softDeleted()
    {
        $results = Horario::onlyTrashed()->get();

        return response($results);
    }

    public function restore($id)
    {

        $data = Horario::onlyTrashed()->find($id);

        if (!is_null($data)) {

            $data->restore();
            return response('Se restauro la horario correctamente');
        } else {

            return response('No se encontro la horario');
        }
        return response('No se encontro la horario');
    }

    public function permanentDeleteSoftDeleted($id)
    {
        $data = Horario::onlyTrashed()->find($id);

        if (!is_null($data)) {

            $data->forceDelete();
            return response('Se elimino permanentemente la horario correctamente');
        } else {

            return response('No se encontro la horario');
        }
        return response('No se encontro la horario');
    }
}