<?php

namespace App\Http\Controllers;

use App\Models\resenas;
use Illuminate\Http\Request;

class ResenasController extends Controller
{
    public function create()
    {
        return view('resena.create');
    }

    public function store(Request $request)
    {
        $resena = new resenas();
        $resena->qualification = $request->input('qualification');
        $resena->comment = $request->input('comment');
       
        $resena->save();
        return $resena;
    }

    public function index()
    {
        $resena = resenas::orderBy('id', 'desc')->get();
        return view('resena.listar', compact('resena'));
    }
    public function show(resenas $resena) {
        return view('resena.show', compact('resena'));
    }

    public function destroy(resenas $resena) {
        $resena->delete();
        return redirect()->route('resena.index');
    }

    public function edit (resenas $resena){
    
        return view ('resena.edit',compact('resena'));

    }

    public function update(Request $request,resenas $resena ){

       
        $resena->qualification = $request->input('qualification');
        $resena->comment = $request->input('comment');
       
        $resena->save();
        return redirect()->route('resena.index');

    }
    
}
