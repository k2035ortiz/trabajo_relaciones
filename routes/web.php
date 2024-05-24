<?php
use App\Http\Controllers\FriendsController;
use App\Http\Controllers\CousinsController;
use App\Http\Controllers\InvertedPhraseController;
use App\Http\Controllers\CuadraticaController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\SemanaController;
use App\Http\Controllers\TallerController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\NotasController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\PublicarEmprendimientoController;
use App\Http\Controllers\ResenasController;







/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/Primos', function () {
    return view('welcome');
}); 

//Route::get('/frmproducto',[ProductsController::class,'formularioProducto']);
//Route::post('/productostore',[ProductsController::class,'productoStore'])->name('product.store');



Route::get('curso/listar',[CursoController::class,'index'])->name('curso.index');
Route::get('curso/create',[CursoController::class,'create']);
Route::post('curso/store', [CursoController::class,'store'])->name('cursos.store');
Route::get('curso/{curso}',[CursoController::class,'show'])->name('curso.show');
Route::put('curso/{curso}',[CursoController::class,'update'])->name('curso.update');//nuevo
Route::delete('curso/{curso}',[CursoController::class,'destroy'])->name('curso.destroy');
Route::get('curso/{curso}/editar',[CursoController::class,'edit'])->name('curso.edit');

//crud del proyecto 
Route::get('trabajo/tabla',[PublicarEmprendimientoController::class,'create']);
Route::post('Publicar_Emprendimiento/store', [PublicarEmprendimientoController::class,'store'])->name('Publicar_Emprendimiento.store');
Route::get('trabajo/listar',[PublicarEmprendimientoController::class,'index'])->name('trabajo.index');
Route::get('trabajo/{trabajo}',[PublicarEmprendimientoController::class,'show'])->name('trabajo.show');
Route::put('trabajo/{trabajo}',[PublicarEmprendimientoController::class,'update'])->name('trabajo.update');//nuevo
Route::delete('trabajo/{trabajo}',[PublicarEmprendimientoController::class,'destroy'])->name('trabajo.destroy');
Route::get('trabajo/{trabajo}/editar',[PublicarEmprendimientoController::class,'edit'])->name('trabajo.edit');

// reseñas
Route::get('resena/create',[ResenasController::class,'create']);
Route::post('resenas/store', [ResenasController::class,'store'])->name('resenas.store');
Route::get('resena/listar',[ResenasController::class,'index'])->name('resena.index');
Route::get('resena/{resena}',[ResenasController::class,'show'])->name('resena.show');
Route::put('resena/{resena}',[ResenasController::class,'update'])->name('resena.update');//nuevo
Route::delete('resena/{resena}',[ResenasController::class,'destroy'])->name('resena.destroy');
Route::get('resena/{resena}/editar',[ResenasController::class,'edit'])->name('resena.edit');



//Route::get('producto/listar',[ProductsController::class,'index'])->name('product.index');
Route::get('producto/product',[ProductsController::class,'create']);
//Route::post('producto/store', [ProductsController::class,'store'])->name('product.store');

Route::get('practica/bank',[BankController::class,'create']);
Route::post('bank/withdraw', [BankController::class,'withdraw'])->name('bank.withdraw');

//////////



Route::get('practica/exam',[ExamController::class,'create']);
Route::post('exam/examen', [ExamController::class,'examen'])->name('exam.examen');




//Route::get('practica/record_hospital',[HospitalController::class,'index'])->name('practica.index');
Route::get('practica/record',[HospitalController::class,'create']);
Route::post('hospital/data', [HospitalController::class,'data'])->name('hospital.data');


//Route::get('practica/lista',[NotasController::class,'index'])->name('practica.index');
Route::get('practica/note',[NotasController::class,'create']);
Route::post('practica/store1', [NotasController::class,'store1'])->name('practica.store1');

//Route::get('/frmercado',[MarketController::class,'mercardo']);
//Route::post('/Mercado',[MarketController::class,'mercado2'])->name('product2.store');

Route::get('/frlibreria',[LibraryController::class,'library']);
Route::post('/libreria',[LibraryController::class,'library2'])->name('product3.store');

Route::get('/semana',[SemanaController::class,'week']);
Route::post('/semana1',[SemanaController::class,'semana1'])->name('semana1');


Route::get('/empresa', [EmpresaController::class,'company']);
Route::post('/empresa1',[EmpresaController::class,'empresa1'])->name('empresa1');



Route::get('/frcuadratica',[CuadraticaController::class,'cuadratica']);
Route::post('/cuadratica',[CuadraticaController::class,'cuadratica2'])->name('product4.store');


Route::get('/frcousins',[CousinsController::class,'Cousins']);
Route::post('/cousins',[CousinsController::class,'Cousins2'])->name('product5.store');


Route::get('/frinverted',[InvertedPhraseController::class,'inverted']);
Route::post('/inverted',[InvertedPhraseController::class,'inverted2'])->name('frinverted.os');

Route::get('/framigos',[FriendsController::class,'amigos']);
Route::post('/verificarAmigos',[FriendsController::class,'verificarAmigos'])->name('amigos.co');


Route::controller(ProductsController::class)->group(function(){

    Route::get('/cosas','cosas');
    Route::get('/cosas2','cosas');
    Route::get('/Primos/{dato1}','Primos');
   
    Route::get('/Amigos/{numero1}/{numero2}', 'Amigos');
    
    });





