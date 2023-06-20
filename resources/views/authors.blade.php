@extends('layouts.structure')

@section('banner')
    <section class="w-full h-[400px] bg-[#14141FB2] flex flex-col items-center justify-center text-white font-bold">
        <h1 class="text-5xl">Authors</h1>
        <span class="mt-3 text-lg font-normal text-[#8A8AA0]">Home / Pages /<span class="text-white"> Authors</span></span>
    </section>
@endsection

@section('popular')
    <section class="bg-[#14141F] flex flex-wrap lg:justify-stretch md:justify-center sm:justify-center gap-4 py-20 px-8">
    @foreach($authors as $author)

        <a href="{{ route('author.show', $author->name) }}">
        <div class="w-[330px] p-5 bg-[#343444] rounded-3xl">

            <div class="image_bg bg-[#7A798A] w-full h-[290px] rounded-3xl group block relative">

                <img src="{{ asset('profiles/'. $author ->user_img ) }}" alt="" class="w-full h-full rounded-3xl object-cover z-10" id="image-preview">

            </div>


            <h6 class="mt-5 text-xl font-bold text-white">{{$author->name}}</h6>


            <div class="w-full h-[1px] bg-[#14141F] mt-4"></div>

            <div class="wrapper flex justify-between items-center mt-3">
                    <div class="flex gap-x-2">
                        <h6 class="text-[14px] font-normal text-[#EBEBEB] text-justify">{{$author->description}}</h6>
                    </div>
            </div>
        </div>
            </a>
    @endforeach
    </section>
@endsection

@include('layouts.footer')
