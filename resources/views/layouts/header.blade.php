<header class="flex items-center bg-transparent justify-around py-7 absolute top-0 left-0 w-full text-white border-b-[1px] border-[#8A8AA0]">
    <div class="logo flex items-center gap-x-2.5">
        <img src="{{ asset('img/logo.png') }}" alt="logo.png">
        <span class="text-4xl font-bold">Axies</span>
    </div>

    <nav class="hidden lg:block">
        <ul class="flex gap-x-10 text-base font-bold ">

            <li><a href="#">Home</a></li>
            <li><a href="#">Explore</a></li>
            <li><a href="#">Activity</a></li>
            <li><a href="#">Community</a></li>
            <li><a href="#">Pages</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>

    <div class="search_wrapper flex items-center gap-x-10">
        <img src="{{asset('img/search_icon.svg')}}" alt="search icon">

        @guest()
        <a href="{{route('login')}}" class="flex items-center gap-x-2.5 px-9 py-3 border-[1px] border-[#5142FC] rounded-3xl text-[15px]">
            <img src="{{asset('img/wallet.svg')}}" alt="">
            Login
        </a>
        @endguest



            @auth()
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="flex items-center gap-x-2.5 px-9 py-3 border-[1px] border-[#5142FC] rounded-3xl text-[15px]">Cerrar Sesión</button>
            </form>


        @endauth


    </div>

</header>
