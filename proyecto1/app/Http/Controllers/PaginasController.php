<?php
namespace App\Http\Controllers;
use App\User;
use App\Http\Controllers\Controller;
class PaginasController extends Controller
{
	public function nosotros (){
//return "Nosotros desde el controlador";
		return view('nosotros');
	}
	public function contacto (){
//return "Nosotros desde el controlador";
		return view('contacto');
	}
}
namespace App\Http\Controllers;
use App\User;
use App\Http\Controllers\Controller;
class PaginasController extends Controller
{
	public function nosotros (){
		$nombre='Julio';
		return view('nosotros')->with('nombreenviado',$nombre);
	}
	public function contacto (){
//return "Nosotros desde el controlador";
		return view('contacto')->with ([
			'nombre'=>'Ana',
			'apellido'=>'Molero'
		]);
	}
}
public function nosotros (){
	$nombre='Julio';
	return view('nosotros', array ('nombreenviado'=>$nombre));
}
public function contacto (){
	return view ('contacto',array('nombre'=>'Ana',
		'apellido'=>'Molero'));
}