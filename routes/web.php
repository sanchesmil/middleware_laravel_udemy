<?php

use Illuminate\Support\Facades\Route;

// Obs 1: O middleware 'intercepta a requisição' antes de prosseguir
// Obs 2: Após serem criados, os middlewares foram registrados no arquivo 'Kernel.php' do diretório 'app/Http/Middleware' 

// Executa o middleware chamado direto na rota
Route::get('/usuarios1', 'UsuariosControlador@index')->middleware('primeiroMiddleware');  

// Executa o middleware declarado no método 'construtor' de 'UsuariosControlador'
Route::get('/usuarios2', 'UsuariosControlador@index');

// Executa o middleware registrado em 'middlewareGroups' no arquivo 'app\Http\Kernel.php'
Route::get('/usuarios3', 'UsuariosControlador@index');


// Usando 2 ou + middlewares 

// Executa os middlewares chamados direto na rota
Route::get('/usuarios4', 'UsuariosControlador@index')
        ->middleware('primeiroMiddleware','segundoMiddleware');

// Executa o terceiro middleware passando parametros
Route::get('/terceiro', function(){
        return "Executou o terceiro middleware passando o parâmetro 'nome' e 'idade'";
})->middleware('terceiroMiddleware:pedro,20'); // nome do middleware + parâmetros