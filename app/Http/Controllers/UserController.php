<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   
   public function index()
   {
    if (request()->has('empty')){
      $users = [];
    }else{
    $users = [
      'Oscar',
      'Jorge',
      'Haydely',
      'Arturo',
      'Dafne',
      'Alondra',
    ];

    



   }
   $colores = ['rojo', 'azul', 'amarillo', 'verde', 'negro', 'blanco'];
  
   


    if (request()->has('empty')){
      $other = [];
    }else{

    $other = ['Piarte', 'Berroa'];
    }
   	return view('users', [
      'title' => 'Listado de Usuarios',
      'other' => $other,
      'nom' => 'Nombres',
      'ape' => 'Apellidos',
      'color' => $colores,
      'users' => $users]);
   }
   

    public function show($id)
    {
    	return "Mostrando destalle del usuario: {$id}";
    }


    public function create()
    {
     return view('creare', ['nuevo' => 'Crear nuevo usuario']);
    }


}
