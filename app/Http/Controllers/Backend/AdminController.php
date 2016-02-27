<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contacto;
use App\Productos;
use App\Service;
use Illuminate\Pagination\Paginator;

class AdminController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		#$res = Contacto::count();
		$res 	= Productos::count();
		$res2 = Service::count();
		$res3 = Contacto::count();
		return view('Backend.home',['productos' 	=> $res
																,'servicios' 	=> $res2
																,'mensajes' 	=> $res3]);
	}
	/**
	 * Show the form for see a the messages.
	 *
	 * @return Response
	 */
	public function message()
	{
		$mensajes = Contacto::paginate(3);
		return view('Backend.messages.index',['mensajes' => $mensajes]);
	}
	/**
	 * Show the form for answer a message.
	 *
	 * @return Response
	 */
	public function messageAnswer($id)
	{
		//
		$mensajes = Contacto::find($id);
		return view('Backend.message.messageAnswer',['mensaje' => $mensajes]);

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Responses
	 */
	 public function readMore($id)
 	{
 		$mensaje = Contacto::find($id);
 		return view('Backend.messages.readMore',['mensaje' => $mensaje]);
 	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
