<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Productos;
use App\Tipos;
use App\Service;
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

	public function listOptions() {
		$tipos = Tipos::select('tipo','id')->whereNull('deleted_at')->get();
		$servicios = Service::select('nombre','id')->whereNull('deleted_at')->get();
		return Response::json(['status' => 'ok','tipos' => $tipos,'servicios' => $servicios]);
	}

}
