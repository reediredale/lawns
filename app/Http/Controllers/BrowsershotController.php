<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Spatie\Browsershot\Browsershot;
use App\Models\Lawn;

class BrowsershotController extends Controller
{
    function screenshotOpenGraph() {

        $lawn = Lawn::all();

        $path = Storage::disk('public')->path("/images/{$lawn[0]->slug}.jpg");

        Browsershot::url('/lawns/{lawn:slug}/openGraphImage', ['slug' => $lawn[0]->slug])
            ->setOption('landscape', true)
            ->windowSize(1200, 630)
            ->waitUntilNetworkIdle()
            ->showBackground()
            ->setScreenshotType('jpeg', 100)
            ->save($path);
        
           dd("Done");
    }
}
