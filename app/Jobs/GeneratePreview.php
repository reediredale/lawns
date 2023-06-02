<?php

namespace App\Jobs;

use App\Models\Lawn;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class GeneratePreview implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(Lawn $lawn)
    {
        $this->lawn = $lawn;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    
    public function handle()
    {
        $client = Client::getInstance();

        // Define the path to the PhantomJS executable
        $client->getEngine()->setPath(base_path('vendor/jakoch/phantomjs/bin/phantomjs'));

        // Tells the client to wait for all resources before rendering
        $client->isLazy();
    
        // set the width, height, x and y axis for your screen capture:
        $width = 1280;
        $height = 640;
        $top = 0;
        $left = 0;

        // Set the url to the page we want to capture
        $lawn = url("lawns/" . $this->lawn->slug . "/preview");

        // Set the path for the image we want to save
        $file = base_path('public/images/lawns/' . $this->lawn->slug . '.jpeg');

        $request = $client->getMessageFactory()->createCaptureRequest($lawn, 'GET');
        $request->setOutputFile($file);
        $request->setViewportSize($width, $height);
        $request->setCaptureDimensions($width, $height, $top, $left);

        // Set the quality of the screenshot to 100%
        $request->setQuality(100);

        // Set the format of the image
        $request->setFormat('jpeg');

        // Set a timeout to exit after 20 seconds in case something wrong happens
        $request->setTimeout(120);
        
        $response = $client->getMessageFactory()->createResponse();

        $client->send($request, $response);
    }
}
