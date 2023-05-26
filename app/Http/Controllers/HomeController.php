<?php

namespace App\Http\Controllers;

use App\Models\Lawn;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $lawns = Lawn::all(); // Retrieve data from your model

        return view('home', ['lawns' => $lawns]);
    }
}
