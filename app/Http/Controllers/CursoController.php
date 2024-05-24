<?php

namespace App\Http\Controllers;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
public function index(){

 $cursos = Curso::orderBy('id','desc')->get();
 return view('curso.listar', compact('cursos'));

//return $cursos;
}



    public function create(){

        return view('curso.create');

    }

    public function store(Request $request){

        $curso = new Curso();
        $curso->name =$request->name;
        $curso->descripcion =$request->descripcion;
        $curso->save();
        return $curso;

    }
    public function show(Curso $curso) {
       
     
        return view('curso.show', compact('curso'));

    }
       
     
        //return view('curso.show', compact('curso'));
       //   $curso=Curso::find($id);
         // return $curso;
    

    public function destroy(Curso $curso) {
        $curso->delete();
        return redirect()->route('curso.index');
    }

    public function edit (Curso $curso){

        return view('curso.edit',compact('curso'));

    }
    public function update(Request $request,Curso $curso ){

        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->save();
        return redirect()->route('curso.index');

    }
}
