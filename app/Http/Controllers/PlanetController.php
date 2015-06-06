<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Planet;

class PlanetController extends Controller {

	// List all planets.
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

	// Show a specific planet or planet property.
	public function show($id = null, $property = null)
	{
        $statusCode = 200;

        // Find a single planet.
        if($property == null){

            try{
                $planet = Planet::find($id);
                $response = ['statusCode' => $statusCode, 'planet' => $planet];
            }catch (Exception $e){
                $statusCode = 404;
                $error = ["error" => "Could not find a planet."];
                $response = ['statusCode' => $statusCode, 'error' => $error];
            }
            return $response;

        }
        // Or find a specific property of a planet.
        else {
            try{
                $val = Planet::find($id)->pluck($property);
                $response = ['statusCode' => $statusCode, $property => $val];

                return $response;

            }catch (Exception $e){
                $statusCode = 404;
                $error = ["error" => "Could not property of planet."];
                $response = ['statusCode' => $statusCode, 'error' => $error];

                return $response;
            }

        }
	}
}
