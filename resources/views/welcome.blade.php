<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @extends("layouts.layout")

@section("title","Number System Convertion")

@section("content")

    </head>
    <body class="antialiased bg-slate-400">
        <div class="relative min-h-screen bg-gray-100 bg-center sm:flex sm:justify-center sm:items-center bg-dots-darker dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="z-10 p-3 p-6 justify-content-end d-flex align-text-end sm:fixed sm:top-0 sm:right-0 fixed-top bg-dark">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-white hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" style="text-decoration:none;">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-white ms-3 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" style="text-decoration:none;">Register</a>
                       
                           @endif
                    @endauth
                </div>
            @endif
            <div class="text-center container-fluid bg-secondary d-flex justify-content-center align-items-center" style="height:700px;">
<h1 class="text-info num">WELCOME TO NUMBER SYSTEM CONVERTION</h1>
</div>
    </body>
</html>
@endsection