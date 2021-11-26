<?php

namespace App\Http\Controllers;

use App\Models\Credito;

use Illuminate\Http\Request;

class CreditoController extends Controller
{
    //

     public function index() {
         $credito=Credito::all();
         return ['cred' => $credito];
     }


    public function store(Request $request) {
        $credito= new Credito();
        $credito->total=$request->total;
        $credito->cantidad=$request->cantidad;
        $credito->estado=$request->edo;

        $credito->save();



    }
}
