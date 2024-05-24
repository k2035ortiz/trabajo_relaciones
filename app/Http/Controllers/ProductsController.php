<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;


class ProductsController extends Controller
{
    
  public function index(){

    $producto = products::orderBy('id','desc')->get();
    return view('producto.listar', compact('producto'));
  }   


  public function create(){

        return view('producto.product');

    }

    public function store(Request $request){

        $producto = new Products();
        $producto->name=$request->name;
        $producto->price=$request->price;
        $producto->description=$request->description;
        $producto->cant=$request->cant;
        $producto->date_exp=$request->date_exp;
        $producto->save();
        return $producto;
     }

     

}


