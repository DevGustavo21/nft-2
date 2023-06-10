@extends('layouts.structure')

@section('page-title')
    Homepage
@endsection

@section('banner')
    <section class="bg-[#14141F] h-full px-28 pt-56 pb-20">
        <img src="{{asset('img/Graphic.svg')}}" alt="" class="absolute right-0 top-28 w-full">
        <h1 class="text-[56px] font-bold text-white leading-tight">Discover, and collect<br>
            extraordinary <br>
            <span class="text-gradient">Monster</span> NFTs
        </h1>
        <p class="text-[#EBEBEB] font-normal text-xl mt-8">Marketplace for monster character collections non fungible token NFTs</p>

        <div class="flex gap-x-4 mt-11">
            <a href="#" class="px-9 py-4 flex items-center font-bold text-[15px] text-white gap-x-2 border-2 rounded-full cursor-pointer">
                <img src="{{asset('img/rocket.svg')}}" alt="">
                Explore
            </a>

            <a href="#" class="px-9 py-4 flex items-center bg-white font-bold text-[15px] text-[#343444] gap-x-2 border-2 rounded-full cursor-pointer">
                <img src="{{asset('img/book.svg')}}" alt="">
                Explore
            </a>
        </div>

        <div class="flex justify-center gap-2 mt-48 text-white">
            <div class="flex flex-col items-center w-[320px] text-center">
                <div class="icon bg-[#5142FC] w-fit p-4 rounded-xl">
                    <img src="{{asset('img/wallet2.svg')}}" alt="">
                </div>
                <h5 class="text-2xl font-bold mt-6">Set Up Your Wallet</h5>
                <p class="text-[14px] font-normal mt-3">Once you’ve set up your wallet of choice, connect it to OpenSeaby clicking the NFT Marketplacein the top right corner.</p>
            </div>

            <div class="flex flex-col items-center w-[320px] text-center">
                <div class="icon bg-[#47A432] w-fit p-4 rounded-xl">
                    <img src="{{asset('img/Category.svg')}}" alt="">
                </div>
                <h5 class="text-2xl font-bold mt-6">Create Your Collection</h5>
                <p class="text-[14px] font-normal mt-3">Click Create and set up your collection. Add social links, a description, profile & banner images, and set a secondary sales fee.</p>
            </div>

            <div class="flex flex-col items-center w-[320px] text-center">
                <div class="icon bg-[#9835FB] w-fit p-4 rounded-xl">
                    <img src="{{asset('img/gallery.svg')}}" alt="">
                </div>
                <h5 class="text-2xl font-bold mt-6">Add Your NFTs</h5>
                <p class="text-[14px] font-normal mt-3">Upload your work (image, video, audio, or 3D art), add a title and description, and customize your NFTs with properties, stats</p>
            </div>

            <div class="flex flex-col items-center w-[320px] text-center">
                <div class="icon bg-[#DF4949] w-fit p-4 rounded-xl">
                    <img src="{{asset('img/save.svg')}}" alt="">
                </div>
                <h5 class="text-2xl font-bold mt-6">List Them For Sale</h5>
                <p class="text-[14px] font-normal mt-3">Choose between auctions, fixed-price listings, and declining-price listings. You choose how you want to sell your NFTs!</p>
            </div>
        </div>
    </section>
@endsection

@section('live_auctions')
    <section class="bg-[#0D0D11] w-full text-white pt-16 pb-28 overflow-x-hidden">
        <div class="text-wrapper flex justify-between items-center px-36">
            <h2 class="text-4xl font-bold">Live Auctions</h2>
            <a href="#" class="cursor-pointer font-bold text-[14px] tracking-wider uppercase explore relative">Explore More</a>
        </div>

        <div class="cards flex gap-x-8 mt-10 w-fit">
            <x-card-component></x-card-component>
            <x-card-component></x-card-component>
            <x-card-component></x-card-component>
            <x-card-component></x-card-component>
            <x-card-component></x-card-component>
            <x-card-component></x-card-component>
        </div>
    </section>
@endsection

@section('popular')
    <section class="w-full bg-[#14141F] py-20 text-white lg:px-36 md:px-14 sm:px-4">
        <div>
            <div class="flex justify-between">
                <h2 class="text-4xl font-bold">Popular Collection</h2>
                <a href="#" class="cursor-pointer font-bold text-[14px] tracking-wider uppercase explore1 explore relative">Explore More</a>
            </div>

            <div class="flex gap-20 lg:gap-x-6 md:gap-x-4 mt-10">
                <x-collections></x-collections>
                <x-collections></x-collections>
                <x-collections></x-collections>
            </div>
        </div>

        <div class="seller mt-20">
            <h2 class="text-4xl font-bold">Popular Collection</h2>
            <div class="seller-wrapper flex flex-wrap mt-10 gap-x-20 gap-y-8">
                <x-seller></x-seller>
                <x-seller></x-seller>
                <x-seller></x-seller>
                <x-seller></x-seller>
                <x-seller></x-seller>
                <x-seller></x-seller>
                <x-seller></x-seller>
                <x-seller></x-seller>
            </div>
        </div>

        <div class="picks mt-20">
            <h2 class="text-4xl font-bold">Today's Picks</h2>
            <div class="seller-wrapper flex flex-wrap mt-10 gap-3 justify-center">
                <x-card-component></x-card-component>
                <x-card-component></x-card-component>
                <x-card-component></x-card-component>
                <x-card-component></x-card-component>
                <x-card-component></x-card-component>
                <x-card-component></x-card-component>
            </div>
        </div>
    </section>


@endsection

@include('layouts.footer')
