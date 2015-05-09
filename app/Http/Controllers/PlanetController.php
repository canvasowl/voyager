<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Planet;

class PlanetController extends Controller {

	// List all planets
	public function index()
	{
        try{
            $statusCode = 200;
            $planets = Planet::all();
            $response = ['statusCode' => $statusCode, 'planets' => $planets];
        }catch (Exception $e){
            $statusCode = 404;
            $error = ["error" => "Could not find planets."];
            $response = ['statusCode' => $statusCode, 'error' => $error];
        }
        return $response;
	}

	// Show a specific planet
	public function show($id = null)
	{
        try{
            $statusCode = 200;
            $planet = Planet::find($id);
            $response = ['statusCode' => $statusCode, 'planet' => $planet];
        }catch (Exception $e){
            $statusCode = 404;
            $error = ["error" => "Could not a planet."];
            $response = ['statusCode' => $statusCode, 'error' => $error];
        }
        return $response;
	}
}
