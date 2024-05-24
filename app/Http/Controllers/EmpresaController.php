<?php

namespace App\Http\Controllers;
use App\Models\empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function company(){
    return view('empresa');

    }


    public function empresa1(Request $request){

        $empresa1 = new empresa();
        $empresa1->user =$request->user;
        $empresa1->post =$request->post;
        $empresa1->equipment =$request->equipment;
        $empresa1->save();
        return $empresa1;


    }
}
