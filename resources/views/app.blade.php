<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <!-- SEO -->
        <title>
           @yield('title') - Epic Lawns
        </title>
        <meta name="description" content="">
        <meta property="og:title" content="@yield('title') - Epic Lawns">
        <meta property="og:description" content="@yield('description')">
        <meta property="og:url" content="https://epiclawns.com.au/">
        <meta property="og:image" content="https://epiclawns.com.au/images/@yield('slug')">
        <meta property="og:image:width" content="1024">
        <meta property="og:image:height" content="512">
        <meta property="og:type" content="article">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@reediredale">
        <meta name="twitter:title" content="@yield('description') - Epic Lawns">
        <meta name="twitter:description" content="@yield('description')">
        <meta name="twitter:creator" content="@reediredale">
        <meta name="twitter:image" content="https://epiclawns.com.au/images/@yield('slug')">
        <meta name="description" content="@yield('description')">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
    </head>
    <body class="font-sans antialiased">

        <div class="bg-gray-100">
            <div class="bg-green-600 pt-4 pb-4">
                <div class=" mx-auto container flex justify-between  max-w-2xl">
                <div><a class="flex items-center" href="/">
                    <div class="flex justify-center items-center text-green text-center rounded-full bg-white h-8 w-8">E</div> 
                    Epic Lawns</a></div>
                <ul class="list-none flex">
                    <li><a class="ps-4 pe-4" href="/">Lawn Care</a></li>
                    <!-- <li><a class="ps-4 pe-4" href="/#regions">Regions</a></li> -->
                    <li><a class="ps-4 pe-4" href="/products">Products</a></li>
                    <li><a class="ps-4 pe-4" href="/contact">Contact</a></li>
                </ul>
                </div>
            </div>

            <!-- Page Content -->
            <main>
                @yield ('content')
            </main>

            <footer class="text-center pb-16 pt-16">
                &copy; 2023 Epic Lawns
            </footer>
        </div>

        @stack('modals')

    </body>
</html>
