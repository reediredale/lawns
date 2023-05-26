<?php

namespace App\Http\Controllers;

use App\Models\Lawn;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index()
    {
        $lawn = Lawn::all();

        return response()->view('sitemap.index', [
            'lawns' => $lawn,
        ])->header('Content-Type', 'text/xml');
    }
}
