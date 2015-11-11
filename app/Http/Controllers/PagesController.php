<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	//
	public function contact(){
		$people = [
			"Marcial Soto", "Milagros Aquino", "Luanita Soto"
		];

		return view('paginas.contacto', compact('people'));
	}
}
