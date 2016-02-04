<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Service;
use Laracasts\Flash\Flash;

class ServiceController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$servicios = Service::all();
		return view ('Backend.Services.index',['servicios' => $servicios]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view ('Backend.Services.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		$newService = new Service($request->all());
		$newService->save();
		Flash::success("El servicio " .$newService->nombre. " ha sido creado correctamente");
		return redirect()->route('admin.services.index');

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
		$service = Service::find($id);
		return view('Backend.services.update',['service' => $service]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		//
		$serviceUpdate = Service::find($id);
		$serviceUpdate->nombre = $request->nombre;
		$serviceUpdate->descripcion = $request->descripcion;
		$serviceUpdate->precio = $request->precio;
		$serviceUpdate->lastModify_by = $request->lastModify_by;
		$serviceUpdate->view = $request->view;


		$serviceUpdate->save();

		Flash::success("El serviceo " .$serviceUpdate->nombre. " ha sido modificado correctamente");
		return redirect()->route('admin.services.index');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{

		$fecha = date('Y-m-d h:m:s');
		$serviceToDelete = Service::where('id', '=', $id)->update(['deleted_at' => $fecha]);
		$serviceToDelete = Service::find($id);

		Flash::info("El servicio " .$serviceToDelete->nombre. " ha sido eliminado de manera correcta.!");
		return redirect()->route('admin.services.index');
	}

}
