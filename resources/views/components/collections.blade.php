@php
    $randomCollection = $collection->shuffle();
@endphp

@foreach($randomCollection->take(3) as $collect)
<div class="gallery flex w-[420px] flex-col bg-[#343444] p-3 gap-1 rounded-[10px]">
    <div class="grid grid-cols-3 gap-1 w-full">
        @foreach($collect->items->take(6) as $test)
        <img src="{{asset('uploads/'.$test->img_item)}}" alt="" class="bg-[#7A798A] h-[120px] rounded-[10px] object-cover">
        @endforeach
    </div>

    <div class="info flex items-center mt-4">
        <div class="flex gap-x-[10px]">
            <div class="w-16 h-16 bg-[#7A798A] rounded-3xl">
                <img src="{{asset('uploads/'.$collect->collection_img)}}" alt="" class="w-full h-full object-cover rounded-3xl">
            </div>

            <div class="flex items-center">
            <div class="flex flex-col">
                <h6 class="text-[18px] font-bold text-white">{{$collect->name}}</h6>
                <span class="font-normal text-[13px] text-[#8A8AA0]">Created by <span class="font-bold text-[14px] text-white">{{$collect->user->name}}</span></span>
            </div>
                <div class="wrapper_like ml-3">
                    <form action="{{ route('collection.like', $collect->id) }}" method="POST" class="like-form">
                        @csrf
                        <button type="submit" class="tracking-widest bg-[#14141F] py-1 px-3 rounded-lg text-[12px] font-bold gap-x-1 flex text-white wrapper_li cursor-pointer duration-300 ease-in-out select-none">
                            <img src="{{ asset('img/heart.svg') }}" alt="" class="like_img fill-white">
                            <span class="count">{{ $collect->likes()->count() }}</span>
                        </button>
                    </form>
                </div>

            </div>
        </div>


    </div>
</div>

@endforeach
