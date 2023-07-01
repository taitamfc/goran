<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Savemycodes</title>
        <link rel="icon" type="image/png" href="/image/siteicon.png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
            .my-login-form{
                display: flex;
                padding: 2em;
                flex-direction: column;
                border: 1px solid #ccc;
                border-radius: 1%;
                background-color: #eee;
                height: 50vh;
                width: 33vw;
                justify-content: center;
                align-items: center;
            }
            .my-login-form h3{
                text-align: center;
            }
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
                background-position: center;
            }

            .dashNav {
                color: black;
                padding: 10px;
                text-align: center;
                font-size: 20px;
                font-weight: bold;
                border-radius: 5px;
                margin-bottom: 10px;
            }

            .body-text {
                color: black;
                font-size: 15px;
                font-weight: bold;
                text-align: center;
            }
        </style>
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-Q7TQPJV417"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'G-Q7TQPJV417');
</script>
    </head>
    <body class="antialiased">
       
            <!-- <div class="body-text">
                <h1>Design Software to make world creative & advanced</h1>
                <p>save my code is the most advanced and creative plateform</p>
                <p>Where the developer and companies design their software</p>
            </div> -->
            <x-guest-layout class="">
            <!-- <div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">
           
        </div> -->
    <x-auth-card>
        <style>
            .flex.items-center.mt-4 {
                display: flex;
                justify-content: space-between;
            }
            .min-h-screen.flex.flex-col.sm\:justify-center.items-center.pt-6.sm\:pt-0.bg-gray-100 {
                display: flex;
                flex-direction: row;
                justify-content: space-around;
            }

            .body-text h1{
                font-size:20px;
                font-weight: 700;
            }

            @media screen and (max-width: 768px) {
                .body-text {
                    font-size: 8pt!important;
                }
                .body-text h1{
                    font-size: 12pt!important;
                }
            }

        </style>
         @if (Route::has('login'))
                <div class="fixed top-0 left-0  w-100 px-6 py-4 sm:block" style="min-width:100%">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="dashNav text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <!-- <a href="{{ route('login') }}" class="dashNav text-sm text-gray-700 dark:text-gray-500 underline">Log in</a> -->

                        @if (Route::has('register'))
                        <nav class="navbar navbar-default">
  <div class="" style="display:flex;justify-content: space-between;align-items: center;">
    <div class="navbar-header">
      <img src="{{ asset('image/logo.png') }}" width="50%" alt="">
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     
      <a href="{{ route('register') }}" class="dashNav ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
     
    </div>
  </div>
</nav>
                            <!-- <a href="{{ route('register') }}" class="dashNav ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a> -->
                        @endif
                    @endauth
                </div>
            @endif
        
        <x-slot name="logo">
            <div class="body-text">
                <!-- <h1>Design Software to make world creative & advanced</h1> -->
                <h1>The best place to save all your code.</h1>
                <p>Signup for free.</p>
                <div style="float:left;"><img src="{{ asset('image/Screenshot') }}" width="100%" style="border:1px solid;"alt=""></div>
            </div>
                <!-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> -->
        </x-slot>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center mt-4">
                <a href="/register" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ml-3">
                    Register
                </a>

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
            <div class="flex items-center justify-center">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

        </div>
    </body>
</html>
