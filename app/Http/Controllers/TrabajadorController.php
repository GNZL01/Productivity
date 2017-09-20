<?php

namespace Productivity\Http\Controllers;


use Illuminate\Http\Request;

//se hace uso de la entidad o modelo Trabajador
use Productivity\Trabajador;


class TrabajadorController extends Controller
{
    public function listarTrabajadores()
    {
    	$trabajadores = Trabajador::orderBy('tra_id','DESC')->paginate();

        return view('trabajadores.index', compact('trabajadores'));
    }

    public function verTrabajador($tra_id)
    {
        $trabajador = Trabajador::find($tra_id);

        return view('trabajadores.verTrabajador', compact('trabajador'));
    }

    public function agregarTrabajador()
    {
        return view('trabajadores.agregarTrabajador');
    }

    public function guardarTrabajador(Request $request)
    {
        $rules = [
            'emp_rut' => 'required',
            'tra_rut'=> 'required',
            'tra_dv' => 'required',
            'tra_nombres' => 'required',
            'tra_apellidos' => 'required',
            'tra_fecha_nacimiento' => 'required',
            'tra_vencimiento_corma' => 'required',
            'tra_vencimiento_examen' => 'required',
            'tra_licencia_conducir' => 'required',
            'tra_vencimiento_licencia_conducir' => 'required',
            'car_id' => 'required',
            'tra_email' => 'required',
            'tra_activo' => 'required',
        ];
 
        $this->validate($request, $rules);

        $trabajador = new Trabajador;

            $trabajador->emp_rut  = $request->emp_rut;
            $trabajador->tra_rut  = $request->tra_rut;
            $trabajador->tra_dv  = $request->tra_dv;
            $trabajador->tra_nombres  = $request->tra_nombres;
            $trabajador->tra_apellidos  = $request->tra_apellidos;
            $trabajador->tra_fecha_nacimiento  = $request->tra_fecha_nacimiento;
            $trabajador->tra_vencimiento_corma  = $request->tra_vencimiento_corma;
            $trabajador->tra_vencimiento_examen  = $request->tra_vencimiento_examen;
            $trabajador->tra_licencia_conducir  = $request->tra_licencia_conducir;
            $trabajador->tra_vencimiento_licencia_conducir  = $request->tra_vencimiento_licencia_conducir;
            $trabajador->car_id  = $request->car_id;
            $trabajador->tra_email  = $request->tra_email;
            $trabajador->tra_activo  = $request->tra_activo;

        $trabajador->save();

        return redirect()->route('trabajadores.listarTrabajadores')
                         ->with('info', 'El Trabajador fue guardado exitosamente.');
    }

    public function editarTrabajador($tra_id)
    {
        $trabajador = Trabajador::find($tra_id);

        return view('trabajadores.editarTrabajador', compact('trabajador'));
    }

    public function actualizarTrabajador(Request $request, $tra_id)
    {
        $rules = [
            'tra_id' => 'required',
            'tra_tiempo' => 'required',
            'emp_rut' => 'required',
            'tra_rut'=> 'required',
            'tra_dv' => 'required',
            'tra_nombres' => 'required',
            'tra_apellidos' => 'required',
            'tra_fecha_nacimiento' => 'required',
            'tra_vencimiento_corma' => 'required',
            'tra_vencimiento_examen' => 'required',
            'tra_licencia_conducir' => 'required',
            'tra_vencimiento_licencia_conducir' => 'required',
            'car_id' => 'required',
            'tra_email' => 'required',
            'tra_activo' => 'required',        
        ];
 
        $this->validate($request, $rules);

        $trabajador = Trabajador::find($tra_id);
        
            $trabajador->emp_rut  = $request->emp_rut;
            $trabajador->tra_rut  = $request->tra_rut;
            $trabajador->tra_dv  = $request->tra_dv;
            $trabajador->tra_nombres  = $request->tra_nombres;
            $trabajador->tra_apellidos  = $request->tra_apellidos;
            $trabajador->tra_fecha_nacimiento  = $request->tra_fecha_nacimiento;
            $trabajador->tra_vencimiento_corma  = $request->tra_vencimiento_corma;
            $trabajador->tra_vencimiento_examen  = $request->tra_vencimiento_examen;
            $trabajador->tra_licencia_conducir  = $request->tra_licencia_conducir;
            $trabajador->tra_vencimiento_licencia_conducir  = $request->tra_vencimiento_licencia_conducir;
            $trabajador->car_id  = $request->car_id;
            $trabajador->tra_email  = $request->tra_email;
            $trabajador->tra_activo  = $request->tra_activo;

        $trabajador->save();

        return redirect()->route('trabajadores.listarTrabajadores')
                         ->with('info', 'La Trabajador fue actualizada exitosamente.');
    }

    public function eliminarTrabajador($tra_id)
    {
        $trabajador = Trabajador::find($tra_id);
        $trabajador->delete();

        return back()->with('info', 'El Trabajador fue eliminado exitosamente.');
    }

}
