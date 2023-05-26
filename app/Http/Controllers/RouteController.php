<?php

use App\Lawn;  
use Illuminate\Http\Request;
use App\Jobs\GeneratePreview;

function create(Request $request)
{
    $lawn = Lawn::create([
        
    ]);

    dispatch(new GeneratePreview($lawn));
}