<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ambientesController extends Controller
{
	public function index(){
		return "ambientesController";
	}
	public function show(Request $request){
		//%_POST['nombre'] ya no se utiliza obsoleto
		//return $request->all(); muestra todo formato json
		return $request->email;
	}
}
