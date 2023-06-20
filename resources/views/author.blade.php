@extends('layouts.structure')

@section('banner')
    <section class="w-full h-[400px] bg-[#14141FB2] flex flex-col items-center justify-center text-white font-bold">
        <h1 class="text-5xl">Author</h1>
        <span class="mt-3 text-lg font-normal text-[#8A8AA0]">Home / Pages /<span class="text-white"> Author</span></span>
    </section>
@endsection

@section('popular')
    <section class="bg-[#14141F] py-20 flex flex-col items-center">
        <div class="lg:w-[1100px] md:w-full sm:w-screen lg:h-[280px] md:h-fit sm:h-fit bg-[#313037] p-[30px] rounded-t-xl flex justify-between gap-x-8">
            <div class="flex flex-wrap gap-8">
                <img src="{{ asset('profiles/' . $author->user_img) }}" alt="" class="lg:w-[274px] md:w-[200px] lg:h-[274px] md:h-[200px] sm:w-[140px] sm:h-[140px] rounded-[20px] z-10">
                <div class="mt-5 lg:w-fit md:w-fit sm:w-full">
                    <span class="text-[#EBEBEB] font-normal text-lg ">Author Profile</span>
                    <h6 class="text-4xl font-bold text-white">{{ $author->name }}</h6>
                    <p class="mt-2 text-[14px] text-[#EBEBEB] lg:w-[400px] md:w-[300px] sm:w-full text-justify">{{ $author->description }}</p>
                    <div class="mt-6 bg-[#EBEBEB] rounded-3xl w-[190px] h-[36px] py-2 px-5 flex items-center justify-between">
                        <span class="text-[13px] text-[#7A798A] font-normal">123hbh3bh13iu</span>
                        <img src="{{ asset('img/copy.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="social_medias h-fit flex flex-wrap items-start gap-3">
                <div class="flex items-center justify-center bg-[#EBEBEB] rounded-lg p-[10px]">
                    <img src="{{ asset('img/fb.svg') }}" alt="">
                </div>
                <div class="flex items-center justify-center bg-[#EBEBEB] rounded-lg p-[10px]">
                    <img src="{{ asset('img/coolicon.svg') }}" alt="">
                </div>
                <div class="flex items-center justify-center bg-[#EBEBEB] rounded-lg p-[10px]">
                    <img src="{{ asset('img/brand/coolicon.svg') }}" alt="">
                </div>
                <div class="flex items-center justify-center bg-[#EBEBEB] rounded-lg p-[10px]">
                    <img src="{{ asset('img/brand/Vector.svg') }}" alt="">
                </div>

                @auth()
                @if($author->id != auth()->user()->id)
                @if($author->isFollowing(auth()->user()))
                    <form action="{{route('follow.delete', $author )}}" method="POST">
                        @csrf

                        @method('DELETE')
                        <button type="submit" class="tracking-widest bg-[#14141F] py-1 px-3 rounded-lg text-[12px] font-bold gap-x-1 flex text-white wrapper_li cursor-pointer duration-300 ease-in-out select-none">
                            <span>Unfollow</span>
                        </button>
                    </form>
                @else
                    <form action="{{route('follow.show', $author )}}" method="POST">
                        @csrf
                        <button type="submit" class="tracking-widest bg-[#14141F] py-1 px-3 rounded-lg text-[12px] font-bold gap-x-1 flex text-white wrapper_li cursor-pointer duration-300 ease-in-out select-none">
                            <span>Follow</span>
                        </button>
                    </form>

                @endif
                @endif
                @endauth

            </div>
        </div>
        <div class="filter bg-[#343444] lg:w-[1100px] md:w-full sm:w-screen lg:pl-[400px] md:pl-0 sm:pl-0 justify-center  lg:pr-24 md:pr-0 sm:pr-0 py-6 text-white text-xl flex lg:gap-x-32 md:gap-x-14 sm:gap-x-10 rounded-b-xl">
            <span>All</span>
            @foreach($categories as $category)
                <span>{{ $category->name }}</span>
            @endforeach
        </div>
        <div class="items mt-14 flex justify-center flex-wrap gap-4">
          <x-card_show :items="$items"/>
        </div>
    </section>
@endsection
