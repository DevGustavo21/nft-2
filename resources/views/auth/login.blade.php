@extends('layouts.structure')

@section('banner')
<section class="w-full h-[400px] bg-[#14141FB2] flex flex-col items-center justify-center text-white font-bold">
    <h1 class="text-5xl">Login</h1>

    <span class="mt-3 text-lg font-normal text-[#8A8AA0]">Home / Pages /<span class="text-white"> Login</span></span>

</section>
@endsection

@section('form')
    <form method="POST" action="{{ route('login') }}" class="bg-[#14141F] pt-20 pb-48 flex items-center justify-center text-center">

        <div class="w-[690px]">

            <h2 class="text-4xl font-bold text-white">Login To NFTs</h2>

            <x-divider text="Email"></x-divider>
        @csrf
        <!-- Email Address -->
        <div>
            <x-text-input id="email" class="block mt-1 w-full" type="email" placeholder="Your Email Address" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-text-input id="password" class="block mt-1 w-full"
                          type="password"
                          name="password"
                          placeholder="Your Password"
                          required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="mt-4 flex justify-between">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
            <a href="#" class="text-[15px] font-bold text-white">Forgot Password?</a>
        </div>

        <div class="flex items-center mt-4">

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
        </div>
    </form>
@endsection

@include('layouts.footer')
