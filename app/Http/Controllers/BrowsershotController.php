<?php

namespace App\Http\Controllers;

use App\Models\Lawn;
use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class BrowsershotController extends Controller
{
    function screenshotGoogle() {

        // $path = Storage::disk('public')->path("aberdeen.jpg");
        $path = public_path("/") . "screenshot.png";

        Browsershot::html(url('https://google.com'))
            ->waitUntilNetworkIdle()
            ->windowSize(1200, 630)
            ->setScreenshotType('jpeg', 100)
            ->setNodeBinary('/usr/local/bin/node')
            ->setNpmBinary('/usr/local/bin/npm')
            ->setChromePath('/snap/bin/chromium')
            ->noSandbox()
            ->save($path);

    }
}
