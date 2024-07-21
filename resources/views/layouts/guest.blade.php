<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        @vite([
            'resources/css/app.css',
            'resources/js/app.js'
        ])
    </head>

    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center bg-gray-100">
            <div class="w-full bg-white shadow-md overflow-hidden">
                <div class="h-screen flex">
                    <div class="hidden lg:flex flex-1 bg-cover bg-[url(https://images.unsplash.com/photo-1478147427282-58a87a120781)] bg-bottom bg-cover">
                        <div class="w-full mx-auto px-20 flex flex-col justify-center space-y-6">
                            <h1 class="text-white font-bold text-4xl font-sans">RMW Music - Dashboard</h1>
                            <p class="text-white mt-1 text-xl">The best(?) music blog, you'll ever meet</p>
                        </div>
                    </div>

                    <div class="flex-1 flex flex-col justify-center items-center gap-5">
                        <div>
                            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                        </div>

                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
