<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
                <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="flex items-center justify-center min-h-screen ">
        <div class="bg-green-600 flex items-center gap-2.5 justify-center flex-col  w-[1200px] h-[630px]">
            <!-- your content -->
            <h1 class="text-7xl text-white font-bold text-center">{{ $lawn->name }}</h1>
            <h2 class="text-2xl text-white text-center">Australia's No.1 Lawn Care Website. Kind of.</h2>
            <div class="flex items-center gap-2.5	" href="/">
                    <div class="flex font-bold text-green-600 justify-center items-center text-green text-center rounded-full bg-white h-8 w-8">E</div> 
                    <div class="text-white">Epic Lawns</div></div>
        </div>
    </body>
</html>