<?php

namespace App\Http\Controllers;

use App\Models\Tiporeserva;
use Illuminate\Http\Request;

class TiporeservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Tiporeserva::all();
        return response($results);
    }

    public function show($id){
        $data = Tiporeserva::where('id', $id)->get();

        if(count($data) > 0){
            return response ($data);
        }else{
            return response('No se encontro el tipo reserva');
        }
    }

    public function store(Request $request){
        $data = new Tiporeserva;

        if($request->input('tiporeserva')){
            $data->tiporeserva = $request->input('tiporeserva');
        }else{
            return response('La tiporeserva esta en blanco');
        }
        
        $data->save();

        return response('Se agrego el tipo reserva correctamente');
    }

    public function update(Request $request, $id){
        $data = Tiporeserva::where('id',$id)->first();

        if($request->input('tiporeserva')){
            $data->tiporeserva = $request->input('tiporeserva');
        }else{
            return response('La tiporeserva esta en blanco');
        }

        $data->save();
    
        return response('Se modifico el tipo reserva correctamente');
    }

    public function destroy($id){
        $data = Tiporeserva::where('id',$id)->first();
        $data->delete();

        return response('Se borro el tipo reserva correctamente');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function WithSoftDelete()
    {

        $results = Tiporeserva::withTrashed()->get();
        return response($results);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function softDeleted()
    {
        $results = Tiporeserva::onlyTrashed()->get();

        return response($results);
    }

    public function restore($id)
    {

        $data = Tiporeserva::onlyTrashed()->find($id);

        if (!is_null($data)) {

            $data->restore();
            return response('Se restauro la tipo reserva correctamente');
        } else {

            return response('No se encontro la tipo reserva');
        }
        return response('No se encontro la tipo reserva');
    }

    public function permanentDeleteSoftDeleted($id)
    {
        $data = Tiporeserva::onlyTrashed()->find($id);

        if (!is_null($data)) {

            $data->forceDelete();
            return response('Se elimino permanentemente la tipo reserva correctamente');
        } else {

            return response('No se encontro la tipo reserva');
        }
        return response('No se encontro la tipo reserva');
    }
}