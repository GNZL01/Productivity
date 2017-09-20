<?php

namespace Productivity\Http\Controllers;


use Illuminate\Http\Request;

//se hace uso de la entidad o modelo Causa
use Productivity\Causa;


class CausaController extends Controller
{
    public function listarCausas()
    {
        $causas = Causa::when(request()->has('cau_nombre'), function($query)
        {
            return $query->where('cau_nombre', 'like', '%'.request('cau_nombre').'%') ;
        })->orderBy('cau_codigo','DESC')->paginate();

        return view('causas.index', compact('causas'));
    }

    public function verCausa($cau_codigo)
    {
        $causa = Causa::find($cau_codigo);

        return view('causas.verCausa', compact('causa'));
    }

    public function agregarCausa()
    {
        return view('causas.agregarCausa');
    }

    public function guardarCausa(Request $request)
    {
        $rules = [
            'cau_nombre' => 'required|unique:oee_causa,cau_nombre',
            'maq_id'=> 'required|numeric',
            'cau_activo' => 'required|numeric',
        ];
 
        $this->validate($request, $rules);

        $causa = new Causa;

            $causa->cau_nombre  = $request->cau_nombre;
            $causa->maq_id  = $request->maq_id;
            $causa->cau_activo  = $request->cau_activo;

        $causa->save();

        return redirect()->route('causas.listarCausas')
                         ->with('info', 'El Causa fue guardado exitosamente.');
    }

    public function editarCausa($cau_codigo)
    {
        $causa = Causa::find($cau_codigo);

        return view('causas.editarCausa', compact('causa'));
    }

    public function actualizarCausa(Request $request, $cau_codigo)
    {
        $rules = [
            'cau_nombre' => 'required|unique:oee_causa,cau_nombre',
            'maq_id'=> 'required|numeric',
            'cau_activo' => 'required|numeric',
        ];
 
        $this->validate($request, $rules);

        $causa = Causa::find($cau_codigo);

            $causa->cau_nombre  = $request->cau_nombre;
            $causa->maq_id  = $request->maq_id;
            $causa->cau_activo  = $request->cau_activo;        

        $causa->save();

        return redirect()->route('causas.listarCausas')
                         ->with('info', 'La Causa fue actualizada exitosamente.');
    }

    public function eliminarCausa($cau_codigo)
    {
        $causa = Causa::find($cau_codigo);
        $causa->delete();

        return back()->with('info', 'El Causa fue eliminado exitosamente.');
    }
    
}

