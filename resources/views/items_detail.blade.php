@extends('layouts.structure')

@section('banner')
    <section class="w-full h-[400px] bg-[#14141FB2] flex flex-col items-center justify-center text-white font-bold">
        <h1 class="text-5xl">Item Details</h1>

        <span class="mt-3 text-lg font-normal text-[#8A8AA0]">Home / Pages /<span class="text-white"> Item # {{$item -> id}}</span></span>

    </section>
@endsection

@section('live_auctions')
    <div class="bg-[#14141F] w-screen py-20 px-10 text-white flex flex-wrap justify-center gap-5">

        <div class="img lg:w-[40%] md:w-[40%] sm:w-[100%] lg:h-[690px] md:h-[450px] sm:h-[400px]">
            <img src="{{ asset('uploads/' . $item->img_item) }}" alt="img" class="w-full h-full object-cover">
        </div>

        <div class="info px-10 w-fit">
            <h2 class="font-bold text-4xl lg:w-fit md:w-full sm:w-full">"{{ $item->title }}"</h2>

            <div class="flex justify-between w-fit lg:gap-x-64 md:gap-x-52 sm:gap-x-24 items-center mt-4">
                <div class="flex items-center gap-x-3">
                    <div class="flex items-center gap-x-[6px] px-4 py-2 bg-[#343444] rounded-3xl">
                        <img src="{{asset('img/eye.png')}}" alt="">
                        <span class="font-bold text-[14px]">225</span>
                    </div>

                    <div class="flex items-center gap-x-[6px] px-4 py-2 bg-[#343444] rounded-3xl">
                        <img src="{{asset('img/heart.svg')}}" alt="">
                        <span class="font-bold text-[14px]">100</span>
                    </div>
                </div>

                <div class="flex items-center gap-x-3">
                    <div class="flex items-center gap-x-[6px] w-9 h-9 p-2.5 bg-[#343444] rounded-full">
                        <img src="{{asset('img/send2.svg')}}" alt="">
                    </div>

                    <div class="flex items-center gap-x-[6px] w-9 h-9 p-2.5 bg-[#343444] rounded-full">
                        <img src="{{asset('img/dots.svg')}}" alt="">
                    </div>
                </div>
            </div>

            <div class="w-[295px] h-[68px] bg-[#343444] p-3 flex items-center mt-6 rounded-2xl gap-x-3">
                <img src="{{ asset('profiles/' . $item->author->user_img) }}" alt="user_img" class="w-11 h-11 bg-[#7A798A] rounded-2xl">

                <div>
                    <span class="font-normal text-[#8A8AA0] text-[13px]">Created by</span>
                    <h6 class="text-[15px] font-bold text-[#EBEBEB] -mt-1">{{$item->author->name}}</h6>
                </div>
            </div>

            <p class="text-[14px] font-normal leading-[22px] mt-4">{{ $item->description }}</p>

            <div class="w-[295px] h-[68px] bg-[#343444] py-3 px-6 flex items-center justify-between mt-6 rounded-2xl gap-x-3">
              <h5>Price</h5>

                <div class="flex items-center justify-center gap-x-1">
                    <h6 class="text-lg font-bold text-[#EBEBEB]">{{$item->price}}</h6>
                    <span class="font-normal text-[#8A8AA0] text-[13px]">= $12.64</span>
                </div>
            </div>
        </div>
    </div>
@endsection
