<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/build/assets/app-972d3a07.css">
        
        <title>

            @if (Request::is('locale/*'))
            {{ $local->town }} - Epic Lawns
            @elseif (Request::is('post/*'))
            {{ $post->title }} - Epic Lawns
            @else
            Epic Lawns
            @endif
            
        </title>

    </head>
    <body class="antialiased">

<div class="max-w-6xl mx-auto p-6 lg:p-8">
    <div class="flex justify-between">
        <div class="logo text-lg ">
            <a class="text-lg" href="/">Epic Lawns</a>
        </div>   
        <div>
            <!-- <a href="/posts">Posts</a> -->
            <a href="/locale">Regions</a>
            <a class="" href="/p/contact">0421 441 520</a>

        </div>

        <div class="hidden">
            @if (Route::has('login'))
                <div class="sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
 </div>
