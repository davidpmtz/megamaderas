<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Service;
use Laracasts\Flash\Flash;
use Iluminate\Pagination\Paginator;

class ServiceController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$servicios = Service::paginate(10);
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

		$file = $request->file('image');
		$newService->save();
		$idService = Service::select('id')->orderBy('created_at','DESC')->first();
		$idService = $idService->id;
		$name = $idService.'.'.$file->getClientOriginalExtension();
		$path = public_path() ."\images\servicios";
		$file->move($path, $name);
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

		//Sustituimos la imagen en case de haber sido cargada otra.
		if(!is_null($request->file('image'))) {
				$file = $request->file('image');
				$name = $id.'.'.$file->getClientOriginalExtension();
				$path = public_path() ."\images\servicios";
				$file->move($path, $name);
			}

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
