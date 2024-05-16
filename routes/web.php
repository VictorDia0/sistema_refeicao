<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/aluno', function () {
    $busca = request('search');
    $nome = 'Victor';
    return view('aluno', ['busca' => $busca, 'nome' => $nome]);
});

Route::get('/aluno/{id?}', function ($id) {
    return view('alun', ['id' => $id]);
});


Route::get('/homeadm', function () {
    if(true){
        return view('administrador.administrador');
    }
});

Route::get('/perfil', function(){
    return view('telaperfil');
});
