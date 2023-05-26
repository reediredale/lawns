<?php

use App\Route;  
use Illuminate\Http\Request;
use App\Jobs\GeneratePreview;

public function create(Request $request)
{
    $route = Route::create([
        
    ]);

    dispatch(new GeneratePreview($route));
}