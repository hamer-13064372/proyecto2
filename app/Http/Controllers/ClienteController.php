<?php

namespace App\Http\Controllers;

 use App\models\Cliente;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //
  public function index() {
      $cliente= Cliente::all(); 
     return ['cliente'=> $cliente];
     

  }



 public function store (Request $request) {
     $cliente= new Cliente();
     $cliente->tp_doc=$request->tp_doc;
     $cliente->num_doc=$request->num_doc;
     $cliente->nombres=$request->nombres;
     $cliente->telefono=$request->tel;
     $cliente->direccion=$request->dir;
     $cliente->email=$request->email;
     $cliente->estado=$request->edo;

     $cliente->serve();
     
 }
    
    
}
