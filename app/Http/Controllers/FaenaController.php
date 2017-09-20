<?php

namespace Productivity\Http\Controllers;


use Illuminate\Http\Request;

//se hace uso de la entidad o modelo Faena
use Productivity\Faena;


class FaenaController extends Controller
{
    public function listarFaenas()
    {
        $faenas = Faena::orderBy('fae_id','DESC')->paginate();

        return view('faenas.index', compact('faenas'));
    }

    public function verFaena($fae_id)
    {
        $faena = Faena::find($fae_id);

        return view('faenas.verFaena', compact('faena'));
    }

    public function agregarFaena()
    {
        return view('faenas.agregarFaena');
    }

    public function guardarFaena(Request $request)
    {
        $rules = [
            'fae_id' => 'required|unique:oee_faena,fae_id',
            'fae_nombre' => 'required',
            'fae_activo' => 'required|numeric',
        ];
 
        $this->validate($request, $rules);

        $faena = new Faena;

            $faena->fae_id  = $request->fae_id;
            $faena->fae_nombre  = $request->fae_nombre;
            $faena->fae_activo  = $request->fae_activo;
        
        $faena->save();

        return redirect()->route('faenas.listarFaenas')
                         ->with('info', 'El Faena fue guardado exitosamente.');
    }

    public function editarFaena($fae_id)
    {
        $faena = Faena::find($fae_id);

        return view('faenas.editarFaena', compact('faena'));
    }

    public function actualizarFaena(Request $request, $fae_id)
    {
        $rules = [
            'fae_id' => 'required|unique:oee_faena,fae_id',
            'fae_nombre' => 'required',
            'fae_activo' => 'required|numeric',
        ];
 
        $this->validate($request, $rules);

        $faena = Faena::find($fae_id);
        
            $faena->fae_id  = $request->fae_id;
            $faena->fae_nombre  = $request->fae_nombre;
            $faena->fae_activo  = $request->fae_activo;

        $faena->save();

        return redirect()->route('faenas.listarFaenas')
                         ->with('info', 'La Faena fue actualizada exitosamente.');
    }

    public function eliminarFaena($fae_id)
    {
        $faena = Faena::find($fae_id);
        $faena->delete();

        return back()->with('info', 'El Faena fue eliminado exitosamente.');
    }

}
