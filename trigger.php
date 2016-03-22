<?php namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\About;
use App\User;
use Auth;
use Carbon\Carbon;
use Symfony\Component\HttpFoundation\Response;
class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	/*public function __construct()
	{
		//$this->middleware('auth');
	}*/

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{

		$news = About::where('keyword','like','%Noticia%')->where('view','=','Private')->orderBy('updated_at','DESC')->paginate(10);
	if ($request->ajax()){

		//Obtener Cursos Pendientes


		/* Arrary Structure of CURSOS DE MOODLE
			$datosCurso['cursoNombre'] = course_fullname;
			$datosCurso['diasRestantes'] = last_day;
			$datosCurso['quizNombre'] = quiz_fullname;
		*/

		/* Arrary Structure of BPMs
			$bpmPendientes['CASE_ID'] = id of the bpm;
			$bpmPendientes['CASE_NUMBER'] = number of the current case;
			$bpmPendientes['PRO_TITLE'] = Process Tittle;
			$bpmPendientes['CASE_TITLE'] = Case Tittle;
			$bpmPendientes['DEL_DELEGATE_DATE'] = days passed;
		*/

			$cursosMoodle = User::obtenerCursos(Auth::user()->email);
			$bpmPendientes = User::obtenerBPMs(Auth::user()->email);
		//Obtener BPMs Pendientes

		//Datos de prueba para los sparkline del HOME
		$datosMoodle = $cursosMoodle;
		//$size = count($cursosMoodle[3]);
		//$datosBPM = array(1,2,3,4,5,6,7,8,9,10);
		return Response()->json( array(
			'Bpm' 		=> $bpmPendientes,
			'sms' 		=> " Parametro AJAX y JSON",
			'Moodle' 	=> $datosMoodle
//			'size' 		=> $size
		));
		}
		return view('backend.home',['news' => $news]);
	}

}
