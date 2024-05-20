<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('login');
});

Route::get('/aluno', function () {
    return view('aluno');
});

Route::get('/aluno/{id?}', function ($id) {
    return view('alun', ['id' => $id]);
});


Route::get('/homeadm', function () {
    if(true){
        return view('administrador.administrador');
    }
});

Route::get('/homeadm/cadastrarusuario', function(){
    return view('administrador.cadastrarUsuario');
});

Route::get('/perfil', function(){
    return view('telaperfil');
});
