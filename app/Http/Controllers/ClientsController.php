<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    //para cada controller funcionar, precisa criar uma ação

    public function create(){
        return view('client');
    }
    
    public function store(Request $request){
        return $request->get('value');
    }
}
