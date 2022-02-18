<?php

namespace App\Http\Controllers;

use App\Models\Estadoreserva;
use Illuminate\Http\Request;

class EstadoreservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Estadoreserva::all();
        return response($results);
    }

    public function show($id){
        $data = Estadoreserva::where('id', $id)->get();

        if(count($data) > 0){
            return response ($data);
        }else{
            return response('No se encontro el estado reserva');
        }
    }

    public function store(Request $request){
        $data = new Estadoreserva;

        if($request->input('estado')){
            $data->estado = $request->input('estado');
        }else{
            return response('El estado esta en blanco');
        }
        
        $data->save();

        return response('Se agrego el estado reserva correctamente');
    }

    public function update(Request $request, $id){
        $data = Estadoreserva::where('id',$id)->first();

        if($request->input('estado')){
            $data->estado = $request->input('estado');
        }else{
            return response('El estado esta en blanco');
        }

        $data->save();
    
        return response('Se modifico el estado reserva correctamente');
    }

    public function destroy($id){
        $data = Estadoreserva::where('id',$id)->first();
        $data->delete();

        return response('Se borro el estado reserva correctamente');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function WithSoftDelete()
    {

        $results = Estadoreserva::withTrashed()->get();
        return response($results);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function softDeleted()
    {
        $results = Estadoreserva::onlyTrashed()->get();

        return response($results);
    }

    public function restore($id)
    {

        $data = Estadoreserva::onlyTrashed()->find($id);

        if (!is_null($data)) {

            $data->restore();
            return response('Se restauro la estado reserva correctamente');
        } else {

            return response('No se encontro la estado reserva');
        }
        return response('No se encontro la estado reserva');
    }

    public function permanentDeleteSoftDeleted($id)
    {
        $data = Estadoreserva::onlyTrashed()->find($id);

        if (!is_null($data)) {

            $data->forceDelete();
            return response('Se elimino permanentemente la estado reserva correctamente');
        } else {

            return response('No se encontro la estado reserva');
        }
        return response('No se encontro la estado reserva');
    }
}