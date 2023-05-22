<?php

namespace App\Http\Controllers;

use App\Models\Local;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $locale = Local::all(); // Retrieve data from your model

        return view('home', ['locale' => $locale]);
    }
}
