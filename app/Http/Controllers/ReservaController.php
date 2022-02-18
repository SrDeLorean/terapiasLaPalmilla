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

        if($request->input('fecha')){
            $data->fecha = $request->input('fecha');
        }else{
            return response('La fecha esta en blanco');
        }
        if($request->input('idCategoria')){
            $data->idCategoria = $request->input('idCategoria');
        }else{
            return response('El idCategoria esta en blanco');
        }
        if($request->input('idServicio')){
            $data->idServicio = $request->input('idServicio');
        }else{
            return response('El fecha esta en blanco');
        }
        if($request->input('idHorario')){
            $data->idHorario = $request->input('idHorario');
        }else{
            return response('El idHorario esta en blanco');
        }
        if($request->input('nombre')){
            $data->nombre = $request->input('nombre');
        }else{
            return response('El nombre esta en blanco');
        }
        if($request->input('correo')){
            $data->correo = $request->input('correo');
        }else{
            return response('El correo esta en blanco');
        }
        if($request->input('telefono')){
            $data->telefono = $request->input('telefono');
        }else{
            return response('El telefono esta en blanco');
        }
        if($request->input('precio')){
            $data->precio = $request->input('precio');
        }else{
            return response('El precio esta en blanco');
        }
        
        $data->save();

        return response('Se agrego la reserva correctamente');
    }

    public function update(Request $request, $id){
        $data = Reserva::where('id',$id)->first();

        if($request->input('inicio')){
            $data->inicio = $request->input('inicio');
        }else{
            return response('La inicio esta en blanco');
        }
        if($request->input('termino')){
            $data->termino = $request->input('termino');
        }else{
            return response('El termino esta en blanco');
        }
        if($request->input('nombre')){
            $data->nombre = $request->input('nombre');
        }else{
            return response('El nombre esta en blanco');
        }
        if($request->input('telefono')){
            $data->telefono = $request->input('telefono');
        }else{
            return response('El telefono esta en blanco');
        }
        if($request->input('email')){
            $data->email = $request->input('email');
        }else{
            return response('El email esta en blanco');
        }
        if($request->input('estado')){
            $data->estado = $request->input('estado');
        }else{
            return response('El correo esta en blanco');
        }
        if($request->input('nota')){
            $data->nota = $request->input('nota');
        }else{
            return response('El telefono esta en blanco');
        }
        if($request->input('tiporeserva')){
            $data->tiporeserva = $request->input('tiporeserva');
        }else{
            return response('El tiporeserva esta en blanco');
        }
        if($request->input('estadoreserva')){
            $data->estadoreserva = $request->input('estadoreserva');
        }else{
            return response('El estadoreserva esta en blanco');
        }

        $data->save();
    
        return response('Se modifico la reserva correctamente');
    }

    public function destroy($id){
        $data = Reserva::where('id',$id)->first();
        $data->delete();

        return response('Se borro la reserva correctamente');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function WithSoftDelete()
    {

        $results = Reserva::withTrashed()->get();
        return response($results);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function softDeleted()
    {
        $results = Reserva::onlyTrashed()->get();

        return response($results);
    }

    public function restore($id)
    {

        $data = Reserva::onlyTrashed()->find($id);

        if (!is_null($data)) {

            $data->restore();
            return response('Se restauro la reserva correctamente');
        } else {

            return response('No se encontro la reserva');
        }
        return response('No se encontro la reserva');
    }

    public function permanentDeleteSoftDeleted($id)
    {
        $data = Reserva::onlyTrashed()->find($id);

        if (!is_null($data)) {

            $data->forceDelete();
            return response('Se elimino permanentemente la reserva correctamente');
        } else {

            return response('No se encontro la reserva');
        }
        return response('No se encontro la reserva');
    }

}