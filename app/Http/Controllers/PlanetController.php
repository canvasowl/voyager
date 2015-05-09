<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Planet;

class PlanetController extends Controller {

	// List all planets
	public function index()
	{
		return Planet::all();
	}

	// Show a specific planet
	public function show($id)
	{
		return Planet::find($id);
	}
}
