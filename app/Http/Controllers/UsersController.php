<?php namespace Protitulo\Http\Controllers;

class UsersController extends Controller {

 	public function getIndex()
 	{
 		$result = \DB::table('recorrido')
 			->select(['numero_rec'])
 			->get();

 		dd($result);

 		return $result;
 	}
 }

 