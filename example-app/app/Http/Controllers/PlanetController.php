<?php
namespace App\Http\Controllers;

use App\Models\Planet;
use Illuminate\Http\Request;

class PlanetController extends Controller
{
    // Toon alle planeten met hun zonnestelsel
    public function index()
    {
        $planets = Planet::with('solarSystem')->get(); // Haalt ook het zonnestelsel op
        return view('planets.index', compact('planets'));
    }

    // Toon een specifieke planeet met het bijbehorende zonnestelsel
    public function show($id)
    {
        $planet = Planet::with('solarSystem')->findOrFail($id);
        return view('planets.show', compact('planet'));
    }
}



?>