<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;

class HospitalController extends Controller
{

    public function index(){

        $practica = hospital::orderBy('id','desc')->get();
        return view('practica.record_hospital', compact('practica'));
      }
    
    public function create (){
     return view('practica.record');


    }

    public function data(Request $request){
    
        $practica = new Hospital();
        $practica->service=$request->service;
        $practica->reason=$request->reason;
        $practica->name=$request->name;
        $practica->id_number=$request->id_number;
        $practica->descripcion=$request->descripcion;
        $practica->date_exp=$request->date_exp;
        echo $practica;
        $practica->save();
        return $practica;


    }
}
