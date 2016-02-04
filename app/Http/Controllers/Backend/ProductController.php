<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Productos;
use App\Tipos;
use Laracasts\Flash\Flash;

class ProductController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$productos = Productos::where('deleted_at' ,'=',null)->get();

		return view('Backend.Products.index',['productos' => $productos]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		//
		$tipos = Tipos::orderBy('tipo','ASC')->lists('tipo','id');
		return view('Backend.Products.create',['tipos' => $tipos]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//

			$newProduct = new Productos($request->all());
			$newProduct->save();
			Flash::success("El producto " .$newProduct->nombre. " ha sido creado correctamente");
			return redirect()->route('admin.products.index');
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
		$producto = Productos::find($id);
		$tipos = Tipos::orderBy('tipo','ASC')->lists('tipo','id');
		return view('Backend.Products.update',['producto' => $producto,
																					'tipos' => $tipos
	]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	 public function update(Request $request, $id)
 	{

 		$productUpdate = Productos::find($id);
 		$productUpdate->nombre = $request->nombre;
 		$productUpdate->descripcion = $request->descripcion;
 		$productUpdate->precio = $request->precio;
 		$productUpdate->tipo_id = $request->tipo_id;
		$productUpdate->lastModify_by = $request->lastModify_by;
		$productUpdate->cantidad = $request->cantidad;
		$productUpdate->view = $request->view;


 	  $productUpdate->save();

 		Flash::success("El producto " .$productUpdate->nombre. " ha sido modificado correctamente");
 		return redirect()->route('admin.products.index');

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
		$productToDelete = Productos::find($id);
		$fecha = date('Y-m-d h:m:s');
	$producToDelete = Productos::where('id', '=', $id)->update(['deleted_at' => $fecha]);

	Flash::info("El producto " .$productToDelete->nombre. " ha sido eliminado de manera correcta.!");
	return redirect()->route('admin.products.index');
	}

}
