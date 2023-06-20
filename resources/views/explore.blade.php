

@extends('layouts.structure')

@section('banner')
    <section class="w-full h-[400px] bg-[#14141FB2] flex flex-col items-center justify-center text-white font-bold">
        <h1 class="text-5xl">Explore</h1>

        <span class="mt-3 text-lg font-normal text-[#8A8AA0]">Home / Pages /<span class="text-white"> Explore</span></span>

    </section>
@endsection

@section('form')
    <section class="bg-[#14141F] py-20 flex justify-between px-10">
        <form id="filterForm" action="{{route('explore.filter')}}" method="POST" class="filter w-[300px] h-fit">
            @csrf
            <div>
            <div class="dropdown flex items-center justify-between text-white text-xl font-bold">Categories
                <img src="{{asset('img/arrow.svg')}}" alt="">
            </div>

            <div class="flex flex-col gap-y-2 mt-5">
                @foreach($category as $cate)
                    <div class="flex gap-x-2 text-white text-base items-center">
                        <input name="category[]" value="{{$cate->id}}" type="checkbox" class="bg-[#14141F] border-gray-300 rounded ">{{$cate->name}}</div>
                @endforeach
            </div>
            </div>

            <div class="mt-10">
                <div class="dropdown flex items-center justify-between text-white text-xl font-bold">Collections
                    <img src="{{asset('img/arrow.svg')}}" alt="">
                </div>

                <div class="flex flex-col gap-y-2 mt-5">
                    @foreach($collection as $collect)
                        <div class="flex gap-x-2 text-white text-base items-center">
                            <input name="collection[]" value="{{$collect->id}}" class="bg-[#14141F] border-gray-300 rounded" type="checkbox">{{$collect->name}}</div>
                    @endforeach
                </div>
            </div>

            <button type="submit" class="mt-10 bg-blue-500 text-white px-4 py-2 rounded">Apply Filters</button>

        </form>


        <div class="w-[1000px] items flex flex-wrap gap-5">
            @if($items->count()== 0)
                <div class="flex flex-col gap-y-4 w-full justify-center items-center">
                    <h2 class="font-semibold text-3xl text-white">No items founded!</h2>
                    <img src="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExM3A1M3VwdjIzM2cyY3p2aTF5YmNkbWxxdGhrdXd3amFsMnNpaGR0YyZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/zOvBKUUEERdNm/giphy.gif" alt="" class="w-[800px] h-[400px] ">
                </div>
            @endif
          @foreach($items as $item)
                <div class="w-[320px] p-5 bg-[#343444] rounded-3xl">

                    <div class="image_bg bg-[#7A798A] w-full h-[290px] rounded-3xl group block relative">

                        <img src="{{ asset('uploads/'.$item->img_item ) }}" alt="" class="w-full h-full rounded-3xl object-cover z-10" id="image-preview">

                        <span class="tracking-widest bg-[#14141F] absolute top-2 right-2 py-1 px-3 rounded-lg text-[12px] font-bold gap-x-1 flex text-white wrapper_li cursor-pointer duration-300 ease-in-out select-none">
                <img src="{{ asset('img/heart.svg') }}" alt="" class="like_img fill-white">
                <span class="count">{{$item -> totalLikes}}</span>
            </span>
                    </div>


                    <h6 class="mt-5 text-lg font-bold text-white" id="name-change">{{$item->title}}</h6>

                    <div class="wrapper flex justify-between items-center mt-3">
                        <div class="flex items-center gap-x-2">
                            @if(isset($item))
                                <div class="skeleton-img w-11 h-11 rounded-2xl bg-[#7A798A]">
                                    <img src="{{ asset('profiles/'. $item->author->user_img ) }}" alt="" class="w-full h-full object-cover rounded-2xl">
                                </div>
                            @endif

                            <div class="">
                                <span class="text-[13px] font-normal text-[#8A8AA0]">Creator</span>

                                <h6 class="text-[15px] font-bold text-[#EBEBEB]">{{$item->author->name}}</h6>

                            </div>
                        </div>
                        <span class="tracking-widest bg-[#5142FC] py-1 px-3 rounded-lg text-[12px] font-bold">BSC</span>
                    </div>

                    <div class="w-full h-[1px] bg-[#14141F] mt-4"></div>

                    <div class="wrapper flex justify-between items-center mt-3">
                        <div class="">
                            <span class="text-[13px] font-normal text-[#8A8AA0]">Current Bid</span>
                            <div class="flex items-center gap-x-2">
                                <h6 class="text-[15px] font-bold text-[#EBEBEB] error-message" id="price-change">{{$item->price}}</h6>
                                <span id="result-text" class="text-[13px] font-normal text-[#8A8AA0]">= $0.000</span>
                            </div>
                        </div>
                        <div class="wrapper_like">


                <span class="flex items-center gap-x-2 text-[16px] font-bold text-[#8A8AA0]">
                    <img src="{{asset('img/preview.svg')}}" alt="">
                    View History
                </span>

                        </div>
                    </div>
                </div>
          @endforeach
        </div>
    </section>

@endsection

@include('layouts.footer');

