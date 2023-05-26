<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LawnController extends Controller
{
    public function index(Request $request)
    {
        
        $region = $request->query('regions');
        $type = $request->query('type');
        // Perform any necessary logic based on the region and type parameters
        // For example, retrieve lawns from a database based on the region and type

        // Return a response or view
        return view('lawns');
    }
}
