<?php

namespace Productivity\Http\Controllers;


use Illuminate\Http\Request;

//se hace uso de la entidad o modelo Maquina
use Productivity\Maquina;


class MaquinaController extends Controller
{
    public function listarMaquinas()
    {
    	$maquinas = Maquina::orderBy('maq_id','DESC')->paginate();

        return view('maquinas.index', compact('maquinas'));
    }

    public function verMaquina($maq_id)
    {
        $maquina = Maquina::find($maq_id);

        return view('maquinas.verMaquina', compact('maquina'));
    }

    public function agregarMaquina()
    {
        return view('maquinas.agregarMaquina');
    }

    public function guardarMaquina(Request $request)
    {
        $rules = [
            'maq_tipo' => 'required',
            'emp_rut' => 'required',
            'maq_activo' => 'required'
        ];
 
        $this->validate($request, $rules);

        $maquina = new Maquina;

            $maquina->maq_tipo  = $request->maq_tipo;
            $maquina->emp_rut  = $request->emp_rut;
            $maquina->maq_activo  = $request->maq_activo;

        $maquina->save();

        return redirect()->route('maquinas.listarMaquinas')
                         ->with('info', 'El Maquina fue guardado exitosamente.');
    }

    public function editarMaquina($maq_id)
    {
        $maquina = Maquina::find($maq_id);

        return view('maquinas.editarMaquina', compact('maquina'));
    }

    public function actualizarMaquina(Request $request, $maq_id)
    {
        $rules = [
            'maq_tipo' => 'required',
            'emp_rut' => 'required',
            'maq_activo' => 'required'
        ];
 
        $this->validate($request, $rules);

        $maquina = Maquina::find($maq_id);
        
            $maquina->maq_tipo  = $request->maq_tipo;
            $maquina->emp_rut  = $request->emp_rut;
            $maquina->maq_activo  = $request->maq_activo;

        $maquina->save();

        return redirect()->route('maquinas.listarMaquinas')
                         ->with('info', 'La Maquina fue actualizada exitosamente.');
    }

    public function eliminarMaquina($maq_id)
    {
        $maquina = Maquina::find($maq_id);
        $maquina->delete();

        return back()->with('info', 'El Maquina fue eliminado exitosamente.');
    }

}
