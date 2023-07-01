<style>
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
<x-guest-layout>
    <x-auth-card>
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
     
      <a href="/" class="dashNav ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Login</a>
     
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
                <h1>Design Software to make world creative & advanced</h1>
                <p>The best place to save all your code.</p>
                <p>Signup for free.</p>
                <div style="display: flex;justify-content: center;"><img src="{{ asset('image/Screenshot.png') }}" width="50%" alt=""></div>
            </div>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
