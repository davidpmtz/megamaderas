<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Productos;
use App\Tipos;
use Laracasts\Flash\Flash;
use Response;

class ProductosController extends Controller {

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
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	 public function index()
	 {
		 return view('products.index');
	 }

	public function productos(Request $request)	{
		$tipos = Tipos::query()
		->select('tipo','id')
		->get();
		if ($request->has('busqueda')) {
			$busqueda = $request->input('busqueda');
			$productos = Productos::query()
									->select('productos.*','T.tipo')
									->join('tipos AS T','productos.tipo_id','=','T.id')
									->where(\DB::raw("CONCAT(productos.nombre,' ',productos.descripcion,' ',productos.precio,' ',T.tipo)"),"LIKE","%$busqueda%")
									->paginate(4);
			return view('Frontend.products.products',['productos' => $productos],['tipos' => $tipos]);
		} else {
			$productos = Productos::query()
			->select('productos.*','T.tipo')
			->join('tipos AS T','productos.tipo_id','=','T.id')
			->paginate(9);
			return view('Frontend.products.products',['productos' => $productos],['tipos' => $tipos]);
		}
	}

	public function productosPorTipo(Request $request, $tipo)	{
		$productos = Productos::query()
								->select('productos.*','T.tipo')
								->join('tipos AS T','productos.tipo_id','=','T.id')
								->where('productos.tipo_id',$tipo)
								->paginate(9);
		$tipos = Tipos::query()
								->select('tipo','id')
								#->where('id',$tipo)
								->get();
		#dd($productos);
		return view('Frontend.products.products',['productos' => $productos],['tipos' => $tipos]);
		#dd($productos);
	}

	public function showProduct(Request $request)	{
		$busqueda = $request->input('busqueda');
		$productos = Productos::query()
								->select('productos.*','T.tipo')
								->join('tipos AS T','productos.tipo_id','=','T.id')
								->where(\DB::raw("CONCAT(productos.nombre,' ',productos.descripcion,' ',productos.precio,' ',T.tipo)"),"LIKE","%$busqueda%")
								->paginate();
		$tipos = Tipos::query()
		->select('tipo','id')
		->get();
		return view('Frontend.products.product',['productos' => $productos],['tipos' => $tipos]);
		//return Response::json(['productos' => $productos,'busqueda' => $request->input('busqueda')]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
