<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Middleware;
use Illuminate\Contracts\Auth\Guard;
use App\Productos;
use App\Tipos;

class WelcomeController extends Controller
{
  /**
* Create a new controller instance.
*
* @return void
*/
public function __construct()
{
$this->middleware('guest');
}

/**
* Show the application welcome screen to the user.
*
* @return Response
*/
public function index() {
    $productos = Productos::query()
    ->select('productos.*','T.tipo')
    ->join('tipos AS T','productos.tipo_id','=','T.id')
    ->orderBy('id','DESC')
    ->paginate(3);

    return view('Frontend.welcome',['productos'=>$productos]);
}

public function store() {
return view('app');
}

public function contact() {
return view('contact.index');
}

}
