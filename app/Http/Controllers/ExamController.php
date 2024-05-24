<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function create(){

        return view('practica.exam');
}

public function examen (Request $request){

    $practica = new Exam();
    $practica->name=$request->name;
    $practica->description=$request->description;
   
    $practica->save();
    return $practica;
}




}
