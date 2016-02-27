<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tipos;
use Laracasts\Flash\Flash;

class TypeController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$tipos = Tipos::where('tipo','!=','[ Seleccionar ]')->get();
		return view ('Backend.Types.index',['tipos' => $tipos]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('Backend.Types.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		$newType = new Tipos($request->all());
		$newType->save();
		Flash::success("El tipo de producto " .$newType->tipo. " ha sido creado correctamente");
		return redirect()->route('admin.types.index');
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
		$tipos = Tipos::find($id);
		return view('Backend.Types.update',['tipos' => $tipos]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		//

		Tipos::where('tipo', '=', $request->tipo)->update(['tipo' => $request->tipo,'lastModify_by' => $request->lastModify_by]);
		Flash::success("El tipo " .$request->tipo. " ha sido modificado correctamente");
		return redirect()->route('admin.types.index');
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
			$typeToDelete = Tipos::find($id);
			$fecha = date('Y-m-d h:m:s');
			$typeToDelete = Tipos::where('id', '=', $id)->update(['deleted_at' => $fecha]);

			Flash::info("El producto " .$typeToDelete->nombre. " ha sido eliminado de manera correcta.!");
			return redirect()->route('admin.types.index');
	}

}
