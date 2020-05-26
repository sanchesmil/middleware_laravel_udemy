<?php

namespace App\Http\Controllers;

use App\Http\Middleware\PrimeiroMiddleware;
use Illuminate\Http\Request;

class UsuariosControlador extends Controller
{
   public function __construct()
   {
      // $this->middleware('primeiroMiddleware');  // chama o middleware especificamente para este controlador
   }

   public function index(){
    
    return "<h3> Lista de Usuários </h3>" . 
           "<ul>" .
                "<li> João </li>" .
                "<li> Maria </li>" .
                "<li> Carlos </li>" .
                "<li> Fabrício </li>" .
           "</ul>";
   }

   
}
