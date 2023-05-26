<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Browsershot\Browsershot;
use Illuminate\Support\Facades\Storage;

class Lawn extends Model
{
    use HasFactory;

    // public function saveOpenGraphImage()
    // {
    //     $path = Storage::disk('public')->path("/images/{$lawn->slug}.jpg");
        
    //     Browsershot::url('https://google.com', ['slug' => $lawn->slug])
    //         ->waitUntilNetworkIdle()
    //         ->showBackground()
    //         ->windowSize(1200, 630)
    //         ->setScreenshotType('jpeg', 100)
    //         ->save($path);
    // }

    // public function getOpenGraphImageUrl(): string
    // {
    //     return Storage::disk('public')->url("/images/{$lawn->slug}.jpg");
    // }

}