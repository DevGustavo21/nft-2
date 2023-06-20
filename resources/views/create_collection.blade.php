@extends('layouts.structure')

@section('banner')
    <section class="w-full h-[400px] bg-[#14141FB2] flex flex-col items-center justify-center text-white font-bold">
        <h1 class="text-5xl">Create Collection</h1>

        <span class="mt-3 text-lg font-normal text-[#8A8AA0]">Home / Pages /<span class="text-white"> Create Collection</span></span>

    </section>
@endsection

@section('form')
    <section class="bg-[#14141F] flex justify-center py-20">
        <form action="{{route('collection.store')}}" method="POST" enctype="multipart/form-data" class="w-[690px]">
            <h2 class="text-center text-white font-bold text-3xl">Create Collection</h2>
            @csrf

            <div class="flex flex-col gap-y-5 mt-10">
                <x-text-input type="text" name="name" placeholder="Collection Name"></x-text-input>
                @error('title')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
            </div>

            <div class="flex flex-col gap-y-5">
                <x-text-input type="file" name="collection_img"></x-text-input>
                @error('file')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
            </div>

            <button type="submit" class="bg-transparent border-2 border-white w-full text-white text-[15px] font-bold py-3 rounded-3xl px-10 mt-5">Submit</button>

        </form>
    </section>
@endsection

@include('layouts.footer')
