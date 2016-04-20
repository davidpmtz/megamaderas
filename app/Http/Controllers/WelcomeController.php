<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Middleware;
use Illuminate\Contracts\Auth\Guard;

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
public function index()
{
return view('Frontend.welcome');
}

public function store() {
return view('app');
}

public function contact() {
return view('contact.index');
}

}
