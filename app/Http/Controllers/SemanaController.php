<?php

namespace App\Http\Controllers;
use App\Models\Semana;
use Illuminate\Http\Request;

class SemanaController extends Controller
{
    public function week(){
     return view('semana');

    }

public function semana1(Request $request){

        $semana1 = new Semana();
        $semana1->quotes=$request->quotes;
        $semana1->days=$request->days;
        $semana1->hour=$request->hour;
        $semana1->save();
        return $semana1;



}


}
