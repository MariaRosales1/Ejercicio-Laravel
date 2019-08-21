<?php

namespace App\Http\Controllers;
use App;

use App\Vehiculo;
use App\Persona;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{

    public function index(){

        $vehiculos=Vehiculo::all();
        return view('vehiculo.index', ['vehiculos' => $vehiculos]);
    }

    public function create(){
        return view('vehiculo.create');
    }
    
    public function store(Request $request){

        Validator::make($request->all(), [
            'marca' => 'required|in:mazda,chevrolet,toyota',
            'nombre' => 'required',
            'cedula' => 'required',
            'placa' => 'required'
        ], [
            'marca.in' => 'la marca solo puede ser una de estas opciones: mazda, chevrolet o toyota',
            'nombre.required' => 'El campo nombre es requerido',
            'cedula.required' => 'El campo cédula es requerido',
            'placa.required' => 'El campo placa es requerido'
        ])->validate();

        // $datos = $request->validated();

        
        $nuevaPersona= Persona::create([
            'cedula' =>$request['cedula'],
            'nombre' =>$request['nombre']]);

     
        Vehiculo::create([
            'placa' =>$request['placa'],
            'marca' =>$request['marca'],
            'persona_id' => $nuevaPersona->id]);
       
        return back()->with('mensaje','El vehiculo fue registrado exitosamente');
    }

    public function estadistica (){
        
        $vehiculoToyota=count(Vehiculo::where('marca', '=', 'toyota')->get());
        $vehiculoMazda=count(Vehiculo::where('marca', '=', 'mazda')->get());
        $vehiculoChevrolet=count(Vehiculo::where('marca', '=', 'chevrolet')->get());
        $total=[$vehiculoToyota,$vehiculoMazda,$vehiculoChevrolet];
        // $vehiculos=DB::table('vehiculos')
        //                 ->select('marca', DB::raw('count(*) as total'))
        //                 ->groupBy('marca')
        //                 ->get();
        $marcas=['Toyota', 'Mazda', 'Chevrolet'];
        return(view('vehiculo.estadistica', compact('total', 'marcas')));
        // return(view('vehiculo.estadistica',[vehiculos =>$vehiculos]));



    }
    
}
