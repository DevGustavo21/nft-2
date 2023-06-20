@unless(request()->is('author'))

    @foreach($items as $item)
    <div class="w-[320px] p-5 bg-[#343444] rounded-3xl">

    <div class="image_bg bg-[#7A798A] w-full h-[290px] rounded-3xl group block relative">

            <img src="{{ asset('uploads/'.$item->img_item ) }}" alt="" class="w-full h-full rounded-3xl object-cover z-10" id="image-preview">

            <span class="tracking-widest bg-[#14141F] absolute top-2 right-2 py-1 px-3 rounded-lg text-[12px] font-bold gap-x-1 flex text-white wrapper_li cursor-pointer duration-300 ease-in-out select-none">
                <img src="{{ asset('img/heart.svg') }}" alt="" class="like_img fill-white">
                <span class="count">{{ $item->likes()->count() }}</span>
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
@endunless
