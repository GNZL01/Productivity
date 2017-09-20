<?php

namespace Productivity\Http\Controllers;


use Illuminate\Http\Request;

//se hace uso de la entidad o modelo Empresa
use Productivity\Empresa;


class EmpresaController extends Controller
{
    public function listarEmpresas()
    {
    	$empresas = Empresa::orderBy('emp_tiempo','DESC')->paginate();

        return view('empresas.index', compact('empresas'));
    }

    public function verEmpresa($emp_rut)
    {
        $empresa = Empresa::find($emp_rut);

        return view('empresas.verEmpresa', compact('empresa'));
    }

    public function agregarEmpresa()
    {
        return view('empresas.agregarEmpresa');
    }

    public function guardarEmpresa(Request $request)
    {
        $rules = [
            'emp_rut' => 'required|unique:oee_empresa,emp_rut',
            'emp_nombre_corto' => 'required',
            'emp_razon_social' => 'required',
            'emp_ciudad' => 'required',
            'emp_telefono' => 'required',
            'emp_email' => 'required',
            'emp_representante' => 'required',
            'emp_representante_telefono' => 'required',
            'emp_representante_email' => 'required',
            'emp_clave' => 'required',
            'emp_logo' => 'required|image',
        ];

        $this->validate($request, $rules);

        $empresa = new Empresa;

            $empresa->emp_rut = $request->emp_rut;
            $empresa->emp_nombre_corto = $request->emp_nombre_corto;
            $empresa->emp_razon_social = $request->emp_razon_social;
            $empresa->emp_ciudad = $request->emp_ciudad;
            $empresa->emp_telefono = $request->emp_telefono;
            $empresa->emp_email = $request->emp_email;
            $empresa->emp_representante = $request->emp_representante;
            $empresa->emp_representante_telefono = $request->emp_representante_telefono;
            $empresa->emp_representante_email= $request->emp_representante_email;
            $empresa->emp_clave = $request->emp_clave;

            $empresa->emp_logo = $request->file('emp_logo')->store('imagenes/logosEmpresas', 'public');

        $empresa->save();

        return redirect()->route('empresas.listarEmpresas')
                         ->with('info', 'La Empresa fue guardada exitosamente.');
    }

    public function editarEmpresa($emp_rut)
    {
        $empresa = Empresa::find($emp_rut);

        return view('empresas.editarEmpresa', compact('empresa'));
    }

    public function actualizarEmpresa(Request $request, $emp_rut)
    {
        $rules = [
            'emp_rut' => 'required',
            'emp_nombre_corto' => 'required',
            'emp_razon_social' => 'required',
            'emp_ciudad' => 'required',
            'emp_telefono' => 'required',
            'emp_email' => 'required',
            'emp_representante' => 'required',
            'emp_representante_telefono' => 'required',
            'emp_representante_email' => 'required',
            'emp_clave' => 'required',
        ];

        $this->validate($request, $rules);

        $empresa = Empresa::find($emp_rut);
        
            $empresa->emp_rut = $request->emp_rut;
            $empresa->emp_nombre_corto = $request->emp_nombre_corto;
            $empresa->emp_razon_social = $request->emp_razon_social;
            $empresa->emp_ciudad = $request->emp_ciudad;
            $empresa->emp_telefono = $request->emp_telefono;
            $empresa->emp_email = $request->emp_email;
            $empresa->emp_representante = $request->emp_representante;
            $empresa->emp_representante_telefono = $request->emp_representante_telefono;
            $empresa->emp_representante_email= $request->emp_representante_email;
            $empresa->emp_clave = $request->emp_clave;

            if($request->hasFile('emp_logo'))
            {
                $empresa->emp_logo = $request->file('emp_logo')->store('imagenes/logosEmpresas', 'public');
            }            

        $empresa->save();

        return redirect()->route('empresas.listarEmpresas')
                         ->with('info', 'La Empresa fue actualizada exitosamente.');
    }

    public function eliminarEmpresa($emp_rut)
    {
        $empresa = Empresa::find($emp_rut);
        $empresa->delete();

        return back()->with('info', 'El Empresa fue eliminado exitosamente.');
    }

}
