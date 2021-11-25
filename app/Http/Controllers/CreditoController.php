<?php

namespace App\Http\Controllers;

use App\Models\Credito;

use Illuminate\Http\Request;

class CreditoController extends Controller
{
    //

    public function store(request $request) {
        $credito= new Credito();
        $credito->total=$request->total;
        $credito->cantidad=$recuest->cantidad;
        $credito->estado=$recuest->edo;

        $credito->save();


    }
}
