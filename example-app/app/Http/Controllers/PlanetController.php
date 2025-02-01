<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanetController extends Controller
{
    // Define the planets as a private property for easy access
    public $planets = [
        'mars' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System.',
        'venus' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.',
        'earth' => 'Our home planet is the third planet from the Sun, and the only place we know of that is inhabited by living things.',
        'jupiter' => 'Jupiter is a gas giant and doesn\'t have a solid surface, but it may have a solid inner core about the size of Earth.'
    ];

    // Method to display all planets
    public function index()
    {
        return view('planets.index', ['planets' => $this->planets]);
    }

    // Method to show a specific planet
        public function show($planet)
    {
        $planet = strtolower($planet); // Ensure case-insensitive lookup

        if (array_key_exists($planet, $this->planets)) {
            return view('planets.show', [
                'name' => ucfirst($planet), 
                'description' => $this->planets[$planet]
            ]);
        } else {
            return abort(404, 'Planet not found');
        }
    }

}

?>