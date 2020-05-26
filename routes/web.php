<?php

use Illuminate\Support\Facades\Route;

// Obs: O middleware 'intercepta a requisição' antes de prosseguir

// Executa o middleware chamado direto na rota
Route::get('/usuarios1', 'UsuariosControlador@index')->middleware('primeiroMiddleware');  

// Executa o middleware registrado no controlador, no método 'construtor'
Route::get('/usuarios2', 'UsuariosControlador@index');

// Executa o middleware registrado em 'middlewareGroups' no arquivo 'app\Http\Kernel.php'
Route::get('/usuarios3', 'UsuariosControlador@index');


// Usando 2 ou + middlewares 

// Executa os middlewares chamados direto na rota
Route::get('/usuarios4', 'UsuariosControlador@index')
        ->middleware('primeiroMiddleware','segundoMiddleware');