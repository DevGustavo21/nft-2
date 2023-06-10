@section('footer')
    <footer class="bg-[#0D0D11] text-white py-24 flex flex-wrap gap-28 justify-center">
        <div class="w-[260px]">
            <div class="logo flex items-center gap-x-2.5">
                <img src="{{ asset('img/logo.png') }}" alt="logo.png">
                <span class="text-4xl font-bold">Axies</span>
            </div>

            <p class="mt-3 text-justify text-[14px] font-normal">Lorem ipsum dolor sit amet,consectetur
                adipisicing elit. Quis non, fugit totam vel
                laboriosam vitae.</p>

            <div class="social_medias flex gap-x-3 mt-7">
                <div class="bg-[var(--third-light-violet)] rounded-lg p-[10px]">
                    <img src="{{asset('img/fb.svg')}}" alt="">
                </div>

                <div class="bg-[var(--third-light-violet)] rounded-lg p-[10px]">
                    <img src="{{asset('img/fb.svg')}}" alt="">
                </div>

                <div class="bg-[var(--third-light-violet)] rounded-lg p-[10px]">
                    <img src="{{asset('img/fb.svg')}}" alt="">
                </div>

                <div class="bg-[var(--third-light-violet)] rounded-lg p-[10px]">
                    <img src="{{asset('img/fb.svg')}}" alt="">
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-y-6">
            <h6 class="font-bold text-lg">My Account</h6>

            <ul class="font-normal text-[14px] flex flex-col gap-y-4">
                <li><a href="#">Authors</a></li>
                <li><a href="#">Collection</a></li>
                <li><a href="#">Author Profile</a></li>
                <li><a href="#">Create Collection</a></li>
            </ul>
        </div>

        <div class="flex flex-col gap-y-6">
            <h6 class="font-bold text-lg">Resources</h6>

            <ul class="font-normal text-[14px] flex flex-col gap-y-4">
                <li><a href="#">Help & Support</a></li>
                <li><a href="#">Live Auctions</a></li>
                <li><a href="#">Item Details</a></li>
                <li><a href="#">Activity</a></li>
            </ul>
        </div>

        <div class="flex flex-col gap-y-6">
            <h6 class="font-bold text-lg">Company</h6>

            <ul class="font-normal text-[14px] flex flex-col gap-y-4">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Our Blog</a></li>
                <li><a href="#">Discover</a></li>
            </ul>
        </div>

        <div class="flex flex-col gap-y-6">
            <h6 class="font-bold text-lg">Suscribe Us</h6>

            <div class="flex items-center relative">
                <input type="email" placeholder="info@yourgmail.com" class="placeholder-[var(--second-light-violet)] bg-transparent border-[1px] border-[var(--third-light-violet)] py-4 px-6 outline-0">
                <button class="bg-[#5142FC] p-[20px] border-[1px] border-[var(--third-light-violet)] rounded-r-[10px] absolute -right-10">
                    <img src="{{asset('img/send.svg')}}" alt="">
                </button>
            </div>
        </div>

    </footer>
@endsection
