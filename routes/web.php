<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/empresa', function () {
    return view('site/empresa');
});

Route::get('/produto/{id}/{nome}', function($id, $nome){
    return "O id do produto é: " . $id . "<br>O nome é: " . $nome;
});

Route::get('/SKIBALABADADADADADA', function(){
    return view('SKIBALABADADADADADA');
})->name('ski');

Route::get('/s', function(){
    return redirect()->route('ski');
});