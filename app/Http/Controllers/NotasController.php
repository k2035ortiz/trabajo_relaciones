<?php

namespace App\Http\Controllers;
use App\Models\Notas;
use Illuminate\Http\Request;

use function Laravel\Prompts\note;

class NotasController extends Controller
{
  public function index(){

    $practica = Notas::orderBy('id','desc')->get();
    return view('practica.lista', compact('practica'));
  }

    public function create(){
   return view('practica.note');

    }


    public function store1 (Request $request){

      $practica = new notas ();
      $practica->teacher=$request->teacher;
      $practica->name=$request->name;
      $practica->note=$request->note;
      $practica->descripcion=$request->descripcion;
      $practica->save();
      return $practica;



    }
}
