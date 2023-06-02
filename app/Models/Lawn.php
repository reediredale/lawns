<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Browsershot\Browsershot;
use Illuminate\Support\Facades\Storage;

class Lawn extends Model
{
    use HasFactory;

    public function saveOpenGraphImage()
    {
        // $path = Storage::disk('public')->path("{$lawn->slug}.jpg");

        Browsershot::url('http://epic-lawnz.test/lawns/abbeyard/preview')
            ->waitUntilNetworkIdle()
            ->showBackground()
            ->windowSize(1200, 630)
            ->setScreenshotType('jpeg', 100)
            // ->save($path);
            ->setNodeBinary('/usr/local/bin/node')
            ->setNpmBinary('/usr/local/bin/npm')
            ->setChromePath('/usr/local/bin/chromium-browser')
            ->save("public/" . 'googlescreenshot.jpg');

            dd('Screenshot');
    }

    public function getOpenGraphImageUrl(): string
    {
        return Storage::disk('public')->url("{$this->slug}.jpg");
    }
}