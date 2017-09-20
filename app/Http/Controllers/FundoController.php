<?php

namespace Productivity\Http\Controllers;


use Illuminate\Http\Request;

//se hace uso de la entidad o modelo Fundo
use Productivity\Fundo;


class FundoController extends Controller
{
    public function listarFundos()
    {
        $fundos = Fundo::when(request()->has('fun_nombre'), function($query)
        {
            return $query->where('fun_nombre', 'like', '%'.request('fun_nombre').'%') ;
        })->orderBy('fun_id','DESC')->paginate();

        return view('fundos.index', compact('fundos'));
    }

    public function verFundo($fun_id)
    {
        $fundo = Fundo::find($fun_id);

        return view('fundos.verFundo', compact('fundo'));
    }

    public function agregarFundo()
    {
        return view('fundos.agregarFundo');
    }

    public function guardarFundo(Request $request)
    {
        $rules = [
            'fun_id' => 'required|unique:oee_fundo,fun_id',
            'fun_nombre' => 'required', 
            'fun_region' => 'required',
            'fun_comuna' => 'required',
            'fun_sector' => 'required',
            'fun_activo' => 'required',
        ];
 
        $this->validate($request, $rules);

        $fundo = new Fundo;
        
            $fundo->fun_id  = $request->fun_id;
            $fundo->fun_nombre  = $request->fun_nombre;
            $fundo->fun_region  = $request->fun_region;
            $fundo->fun_comuna  = $request->fun_comuna;
            $fundo->fun_sector  = $request->fun_sector;
            $fundo->fun_activo  = $request->fun_activo;

        $fundo->save();

        return redirect()->route('fundos.listarFundo')
                         ->with('info', 'El Fundo fue guardado exitosamente.');
    }

    public function editarFundo($fun_id)
    {
        $fundo = Fundo::find($fun_id);

        return view('fundos.editarFundo', compact('fundo'));
    }

    public function actualizarFundo(Request $request, $fun_id)
    {
        $rules = [
            'fun_id' => 'required|unique:oee_fundo,fun_id',
            'fun_nombre' => 'required', 
            'fun_region' => 'required',
            'fun_comuna' => 'required',
            'fun_sector' => 'required',
            'fun_activo' => 'required',
        ];
 
        $this->validate($request, $rules);

        $fundo = Fundo::find($fun_id);

            $fundo->fun_id  = $request->fun_id;
            $fundo->fun_nombre  = $request->fun_nombre;
            $fundo->fun_region  = $request->fun_region;
            $fundo->fun_comuna  = $request->fun_comuna;
            $fundo->fun_sector  = $request->fun_sector;
            $fundo->fun_activo  = $request->fun_activo;

        $fundo->save();

        return redirect()->route('fundos.listarFundo')
                         ->with('info', 'El Fundo fue actualizado exitosamente.');
    }

    public function eliminarFundo($fun_id)
    {
        $fundo = Fundo::find($fun_id);
        $fundo->delete();

        return back()->with('info', 'El Fundo fue eliminado exitosamente.');
    }

}
