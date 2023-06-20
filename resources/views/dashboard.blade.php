@extends('layouts.structure')

@section('page-title')
    Homepage
@endsection


@section('banner')
    <section class="bg-[#14141F] h-full lg:px-28 md:px-16 sm:px-10 pt-56 pb-20">
        <img src="{{asset('img/Graphic.svg')}}" alt="" class="absolute right-0 top-28 w-full">
        <h1 class="text-[56px] font-bold text-white leading-tight">Discover, and collect<br>
            extraordinary <br>
            <span class="from-[#E250E5] to-[#4B50E6] bg-gradient-to-r bg-clip-text text-transparent">Monster</span> NFTs
        </h1>
        <p class="text-[#EBEBEB] font-normal text-xl mt-8">Marketplace for monster character collections non fungible token NFTs</p>

        <div class="flex gap-x-4 mt-11">
            <a href="{{route('collection')}}" class="z-50 px-9 py-4 flex items-center font-bold text-[15px] text-white gap-x-2 border-2 rounded-full cursor-pointer">
                <img src="{{asset('img/rocket.svg')}}" alt="">
                Create Collection
            </a>

            <a href="{{route('create')}}" class="z-50 px-9 py-4 flex items-center bg-white font-bold text-[15px] text-[#343444] gap-x-2 border-2 rounded-full cursor-pointer">
                <img src="{{asset('img/copy.svg')}}" alt="">
                Create Item
            </a>
        </div>

        <div class="flex flex-wrap justify-center gap-x-1 gap-y-10 mt-48 text-white">
            <div class="flex flex-col items-center w-[300px] text-center">
                <div class="icon bg-[#5142FC] w-fit p-4 rounded-xl">
                    <img src="{{asset('img/wallet2.svg')}}" alt="">
                </div>
                <h5 class="text-2xl font-bold mt-6">Set Up Your Wallet</h5>
                <p class="text-[14px] font-normal mt-3">Once you’ve set up your wallet of choice, connect it to OpenSeaby clicking the NFT Marketplacein the top right corner.</p>
            </div>

            <div class="flex flex-col items-center w-[300px] text-center">
                <div class="icon bg-[#47A432] w-fit p-4 rounded-xl">
                    <img src="{{asset('img/Category.svg')}}" alt="">
                </div>
                <h5 class="text-2xl font-bold mt-6">Create Your Collection</h5>
                <p class="text-[14px] font-normal mt-3">Click Create and set up your collection. Add social links, a description, profile & banner images, and set a secondary sales fee.</p>
            </div>

            <div class="flex flex-col items-center w-[300px] text-center">
                <div class="icon bg-[#9835FB] w-fit p-4 rounded-xl">
                    <img src="{{asset('img/gallery.svg')}}" alt="">
                </div>
                <h5 class="text-2xl font-bold mt-6">Add Your NFTs</h5>
                <p class="text-[14px] font-normal mt-3">Upload your work (image, video, audio, or 3D art), add a title and description, and customize your NFTs with properties, stats</p>
            </div>

            <div class="flex flex-col items-center w-[300px] text-center">
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
        <div class="text-wrapper flex justify-between items-center lg:px-36 md:px-20 sm:px-10">
            <h2 class="text-4xl font-bold">New Posts</h2>

            <a href="{{route('explore')}}" class="cursor-pointer">
            <div class="font-bold text-[14px] tracking-wider uppercase explore relative">Explore More</div>
            <div class="bg-gradient-to-r from-[#E250E5] to-[#4B50E6] h-[1px]"></div>
            </a>
        </div>

        <div class="cards flex w-screen justify-center mt-10">
           <div class="splide" data-splide='{"type":"loop"}'>
               <div class="splide__track">
                   <div class="splide__list w-screen">
                       <x-card-component :item="$item" class="w-[320px]"/>
                   </div>
               </div>

               <ul class="splide__pagination splide__pagination--ltr absolute lg:-bottom-14 lg:w-[20%] md:w-[22%] sm:w-[40%] lg:left-[40%] md:-bottom-[55px] sm:-bottom-14 sm:left-[30%] md:left-[40%] overflow-x-hidden" role="tablist" aria-label="Select a slide to show">
                   <li role="presentation">
                       <button
                           class="splide__pagination__page is-active"
                           type="button"
                           role="tab"
                           aria-controls="splide01-slide01"
                           aria-label="Go to slide 1"
                           aria-selected="true">
                       </button>
                   </li>

               </ul>

               <div class="splide__arrows lg:w-[15%] md:w-[35%] sm:w-[50%] justify-center absolute -bottom-[50px] lg:right-[42.5%] md:right-[32.5%] sm:right-[25%] z-50">
                   <button class="splide__arrow splide__arrow--prev bg-transparent">
                       <img src="{{asset('img/arrow-left.png')}}" alt="">
                   </button>
                   <button class="splide__arrow splide__arrow--next bg-transparent">
                       <img src="{{asset('img/arrow-right.png')}}" alt="">

                   </button>
               </div>
           </div>

        </div>

    </section>
@endsection


@section('popular')
    <section class="w-full bg-[#14141F] py-20 text-white lg:px-10 md:px-14 sm:px-4">
        <div>
            <div class="flex justify-between">
                <h2 class="text-4xl font-bold">Popular Collection</h2>
                <div>
                    <a href="#" class="cursor-pointer font-bold text-[14px] tracking-wider uppercase explore relative">Explore More</a>
                    <div class="bg-gradient-to-r from-[#E250E5] to-[#4B50E6] h-[1px]"></div>
                </div>
            </div>

            <div class="flex flex-wrap justify-center gap-20 lg:gap-x-6 md:gap-x-4 mt-10">
                <x-collections :collection="$collection"/>
            </div>
        </div>


        <div class="seller mt-20">
            <h2 class="text-4xl font-bold">Top Seller</h2>
            <div class="seller-wrapper flex justify-stretch flex-wrap mt-10 gap-x-20 gap-y-8">
                    <x-seller :users="$users"/>

            </div>
        </div>

        <div class="picks mt-20 overflow-x-hidden">
            <h2 class="text-4xl font-bold">Today's Picks</h2>
            <div class="seller-wrapper flex lg:flex-nowrap md:flex-wrap sm:flex-wrap mt-10 gap-3 lg:justify-start md:justify-center sm:justify-center">

                <x-card-component :item="$item"/>
            </div>
        </div>
    </section>


@endsection

@include('layouts.footer')
