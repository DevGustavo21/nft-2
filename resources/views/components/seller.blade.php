@foreach($users->where('id', '<=', 10) as $user)
<div class="flex gap-x-4 items-center">
    <div class="relative">
        <img src="{{ asset('profiles/' . $user->user_img) }}" alt="User Image" class="w-[100px] h-[100px] rounded-3xl bg-[#7A798A]">

        <div class="w-[26px] h-[26px] bg-[#5142FC] rounded-full absolute -bottom-1 -right-1 flex items-center justify-center">
            <img src="{{ asset('img/check.svg') }}" alt="Check Icon">
        </div>
    </div>

    <div class="flex flex-col gap-y-1">
        <h6 class="text-base font-bold">{{ $user->name }}</h6>
        <span class="text-[14px] font-normal text-[#EBEBEB]">{{ $user->price }} ETH</span>
    </div>
</div>

@endforeach
