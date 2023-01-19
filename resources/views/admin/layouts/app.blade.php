<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">

        <div class="flex" id="wrapper" x-data="{isOpen:false}">

            <div id="sidebar" class="w-72 h-screen overflow-y-auto bg-green-800 transition-all duration-400 "
                    :class="isOpen?'w-48':'w-0'">
                    <div class="w-full h-auto p-4 flex justify-center bg-green-400">
                        <div class="shrink-0 flex items-center">
                            <a class="text-white" href="{{ route('dashboard') }}">
                                <x-application-logo class="block h-9 w-auto fill-current text-gray-500" />
                            </a>
                            
                            
                        </div>
                        
                        
                    </div>

                        <div class="shrink-0 justify-center">
                            <h1 class= "text-white font-bold items-center"> Madyaw Kadyaw Souvenier Shoppe</h1>
                           
                        </div>

                    @include('layouts.sidebar')
                    
            </div>
            <div id="body" class="w-full h-screen overflow-y-auto bg-gray-400 transition-all duration-200">
                    <div class="w-full h-auto p-4 flex justify-between bg-green-800">
                        <button @click.prevent="isOpen = !isOpen">
                            
                            <svg class="fill-current h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12"></path>
                              </svg>
                        </button>

                    </div>
                    <div class="p-2">
                            <!-- Page Heading -->
                            @if (isset($header))
                                <header class="bg-white shadow">
                                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                                        {{ $header }}
                                    </div>
                                </header>
                            @endif

                            <!-- Page Content -->
                            <main>
                                {{ $slot }}
                            </main>
                    </div>
            </div>
        </div>
    </body>
</html>
