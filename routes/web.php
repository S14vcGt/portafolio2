<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\CiudadController;
use App\Http\Controllers\ParroquiaController;
use App\Http\Controllers\CvController;

// rutas principales
Route::view('/','index')->name('inicio');
Route::view('/sobre-mi','about')->name('about');
Route::view('/contacto','contacto')->name('contacto');
Route::get('/cv',[CvController::class, 'downloadFile'])->name('curriculum');

// Rutas del CRUD de la tabla estados
Route:: get('/proyectos/estados',[EstadoController::class,'list'])->name('estado');
Route:: view('/proyectos/crear-estado','formularios.formulario-estado')->name('estado.crear');
Route:: post('/proyectos/guardar-estado',[EstadoController::class,'create'])->name('estado.guardar');
Route::get('/proyectos/modificar-estado/{cod}',[EstadoController::class,'modify'])->name('estado.modify');
Route::put('/proyectos/actualizar-estado/{cod}',[EstadoController::class,'update'])->name('estado.up');
Route::delete('/proyectos/eliminar-estado/{cod}',[EstadoController::class,'delete'])->name('estado.delete');
Route::get('/proyectos/ver-municipios/{cod}',[MunicipioController::class,'filter'])->name('estado.show');

//Rutas del CRUD de la tabla municipios
Route::get('/proyectos/municipios',[MunicipioController::class,'filter'])->name('municipios');
Route:: view('/proyectos/crear-municipio','formularios.formulario-municipio')->name('municipio.crear');
Route:: post('/proyectos/guardar-municipio',[MunicipioController::class,'create'])->name('municipio.guardar');
Route::get('/proyectos/modificar-municipio/{cod}',[MunicipioController::class,'modify'])->name('municipio.modify');
Route::put('/proyectos/actualizar-municipio/{cod}',[MunicipioController::class,'update'])->name('municipio.up');
Route::delete('/proyectos/eliminar-municipio/{cod}',[MunicipioController::class,'delete'])->name('municipio.delete');
Route::get('/proyectos/ver-parroquias/{cod}',[ParroquiaController::class,'filter'])->name('municipio.show');

//Rutas del CRUD de la tabla parroquias
Route::get('/proyectos/parroquias',[ParroquiaController::class,'filter'])->name('parroquias');
Route:: view('/proyectos/crear-parroquia','formularios.parroquia')->name('parroquia.crear');
Route:: post('/proyectos/guardar-parroquia',[ParroquiaController::class,'create'])->name('parroquia.guardar');
Route::get('/proyectos/modificar-parroquia/{cod}',[ParroquiaController::class,'modify'])->name('parroquia.modify');
Route::put('/proyectos/actualizar-parroquia/{cod}',[ParroquiaController::class,'update'])->name('parroquia.up');
Route::delete('/proyectos/eliminar-parroquia/{cod}',[ParroquiaController::class,'delete'])->name('parroquia.delete');
Route::get('/proyectos/ver-ciudades/{cod}',[CiudadController::class,'filter'])->name('parroquia.show');

//Rutas del CRUD de la tabla ciudads(ciudades)
Route:: view('/proyectos/crear-ciudad','formularios.ciudad')->name('ciudad.crear');
Route:: post('/proyectos/guardar-ciudad',[CiudadController::class,'create'])->name('ciudad.guardar');
Route::get('/proyectos/modificar-ciudad/{cod}',[CiudadController::class,'modify'])->name('ciudad.modify');
Route::put('/proyectos/actualizar-ciudad/{cod}',[CiudadController::class,'update'])->name('ciudad.up');
Route::delete('/proyectos/eliminar-ciudad/{cod}',[CiudadController::class,'delete'])->name('ciudad.delete');
Route::get('/proyectos/{codex?}',[CiudadController::class,'filter'])->name('proyectos');
