<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use Illuminate\Http\Request;

class BankController extends Controller
{
   public function create(){

return view('practica.Bank');

   }
public function withdraw (Request $request){

    $practica = new Bank();

    $practica->account=$request->account;
    $practica->account_number=$request->account_number;
    $practica->withdraw=$request->withdraw;
    $practica->amount=$request->amount;
    $practica->description=$request->description;
    $practica->date_exp=$request->date_exp;

    $practica->save();
    return $practica;
}


}
