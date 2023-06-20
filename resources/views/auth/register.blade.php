@extends('layouts.structure')

@section('banner')
    <section class="w-full h-[400px] bg-[#14141FB2] flex flex-col items-center justify-center text-white font-bold">
        <h1 class="text-5xl">Register</h1>

        <span class="mt-3 text-lg font-normal text-[#8A8AA0]">Home / Pages /<span class="text-white"> Register</span></span>

    </section>
@endsection


@section('form')
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" class="bg-[#14141F] pt-20 pb-48 flex items-center justify-center text-center">

        <div class="w-[690px]">

            <h2 class="text-4xl font-bold text-white">Register To NFTs</h2>

            <x-divider text="Email"></x-divider>
            @csrf
            <!-- Email Address -->
            <div>
                <x-text-input id="name" class="block mt-1 w-full" type="text" placeholder="Your Full Name" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-text-input id="email" class="block mt-1 w-full" type="email" placeholder="Your Email Address" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-text-input id="description" class="block mt-1 w-full" type="text" placeholder="Set A Description" name="description" :value="old('description')" required autocomplete="description" />
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-text-input id="password" class="block mt-1 w-full"
                              type="password"
                              name="password"
                              placeholder="Set Your Password"
                              required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                              type="password"
                              placeholder="Confirm Your Password"
                              name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-text-input id="user_img" class="block mt-1 w-full"
                              type="file"
                              placeholder="Place a photo"
                              name="user_img" required/>
            </div>

            <div class="flex items-center mt-4">

                <x-primary-button>
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </div>
    </form>
@endsection

@include('layouts.footer')

