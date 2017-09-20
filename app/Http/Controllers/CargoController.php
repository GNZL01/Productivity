<?php

namespace Productivity\Http\Controllers;


use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Validator;

// se hace uso de la entidad o modelo Cargo
use Productivity\Cargo;


class CargoController extends Controller
{

    public function listarCargos()
    {
        //$cargos = Cargo::orderBy('car_id','DESC')->paginate();
        //$cargos = Cargo::sortable(['car_id' => 'desc'])->paginate();  
        $cargos = Cargo::orderBy(request('order', 'car_id'), request('order_type', 'DESC'))->paginate();

        if(request('order_type') == 'ASC' ? 'DESC' : 'ASC'); 


        return view('cargos.index', compact('cargos'));
    }

    public function verCargo($car_id)
    {
        $cargo = Cargo::find($car_id);

        return view('cargos.verCargo', compact('cargo'));
    }

    public function agregarCargo()
    {
        return view('cargos.agregarCargo');
    }

    public function guardarCargo(Request $request)
    {
        $rules =
            'car_descripcion' => 'required|unique:oee_cargo,car_descripcion',
        ];
 
        $this->validate($request, $rules);

        $cargo = new Cargo;

            $cargo->car_descripcion  = $request->car_descripcion;
            
        $cargo->save();

        return redirect()->route('cargos.listarCargos')
                         ->with('info', 'El Cargo fue guardado exitosamente.');
    }

    public function editarCargo($car_id)
    {
        $cargo = Cargo::find($car_id);

        return view('cargos.editarCargo', compact('cargo'));
    }

    public function actualizarCargo(Request $request, $car_id)
    {
        $rules = [
            'car_descripcion' => 'required|unique:oee_cargo,car_descripcion',
        ];
 
        $this->validate($request, $rules);

        $cargo = Cargo::find($car_id);

            $cargo->car_descripcion  = $request->car_descripcion;

        $cargo->save();

        return redirect()->route('cargos.listarCargos')
                         ->with('info', 'El Cargo fue actualizado exitosamente.');
    }

    public function eliminarCargo($car_id)
    {
        $cargo = Cargo::find($car_id);
        $cargo->delete();

        return back()->with('info', 'El Cargo fue eliminado exitosamente.');
    }
    
}