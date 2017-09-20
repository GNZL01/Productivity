<?php

namespace Productivity\Http\Controllers;


use Illuminate\Http\Request;

//se hace uso de la entidad o modelo Evento
use Productivity\Evento;


class EventoController extends Controller
{
     public function listarEventos()
    {
    	$eventos = Evento::orderBy('eve_id','DESC')->paginate();

        return view('eventos.index', compact('eventos'));
    }

    public function verEvento($eve_id)
    {
        $evento = Evento::find($eve_id);

        return view('eventos.verEvento', compact('evento'));
    }

    public function agregarEvento()
    {
        return view('eventos.agregarEvento');
    }

    public function guardarEvento(Request $request)
    {
        $rules = [
        	'eve_id' => 'required|unique:oee_evento,eve_id',
    		'eve_android' => 'required', 
    		'eve_id_jornada' => 'required', 	
    		'eve_geo_x' => 'required', 
    		'eve_geo_y' => 'required', 		
    		'eve_causa' => 'required',	
    		'eve_duracion' => 'required', 	
    		'emp_rut' => 'required',	
    		'tra_rut' => 'required', 	
    		'eve_maquina' => 'required', 	
    		'eve_fundo' => 'required', 	
    		'eve_faena'=> 'required',
        ];

        $this->validate($request, $rules);

        $evento = new Evento;

            $evento->eve_id = $request->eve_id;
            $evento->eve_android = $request->eve_android;
            $evento->eve_id_jornada = $request->eve_id_jornada;
            $evento->eve_geo_x = $request->eve_geo_x;
            $evento->eve_geo_y = $request->eve_geo_y;
            $evento->eve_causa = $request->eve_causa;
            $evento->eve_duracion= $request->eve_duracion;
            $evento->emp_rut = $request->emp_rut;
            $evento->tra_rut = $request->tra_rut;
            $evento->eve_maquina = $request->eve_maquina;
            $evento->eve_fundo = $request->eve_fundo;
            $evento->eve_faena = $request->eve_faena;

        $evento->save();

        return redirect()->route('eventos.listarEventos')
                         ->with('info', 'La Evento fue guardada exitosamente.');
    }

    public function editarEvento($eve_id)
    {
        $evento = Evento::find($eve_id);

        return view('eventos.editarEvento', compact('evento'));
    }

    public function actualizarEvento(Request $request, $eve_id)
    {
        $rules = [
            'eve_id' => 'required',
    		'eve_android' => 'required', 
    		'eve_id_jornada' => 'required', 	
    		'eve_geo_x' => 'required', 
    		'eve_geo_y' => 'required', 		
    		'eve_causa' => 'required',	
    		'eve_duracion' => 'required', 	
    		'emp_rut' => 'required',	
    		'tra_rut' => 'required', 	
    		'eve_maquina' => 'required', 	
    		'eve_fundo' => 'required', 	
    		'eve_faena'=> 'required',
        ];

        $this->validate($request, $rules);

        $evento = Evento::find($eve_id);
        
            $evento->eve_id = $request->eve_id;
            $evento->eve_android = $request->eve_android;
            $evento->eve_id_jornada = $request->eve_id_jornada;
            $evento->eve_geo_x = $request->eve_geo_x;
            $evento->eve_geo_y = $request->eve_geo_y;
            $evento->eve_causa = $request->eve_causa;
            $evento->eve_duracion= $request->eve_duracion;
            $evento->emp_rut = $request->emp_rut;
            $evento->tra_rut = $request->tra_rut;
            $evento->eve_maquina = $request->eve_maquina;
            $evento->eve_fundo = $request->eve_fundo;
            $evento->eve_faena = $request->eve_faena;    

        $evento->save();

        return redirect()->route('eventos.listarEventos')
                         ->with('info', 'La Evento fue actualizada exitosamente.');
    }

    public function eliminarEvento($eve_id)
    {
        $evento = Evento::find($eve_id);
        $evento->delete();

        return back()->with('info', 'El Evento fue eliminado exitosamente.');
    }

}
