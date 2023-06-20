<header class="flex items-center bg-transparent justify-around py-7 absolute top-0 left-0 w-full text-white border-b-[1px] border-[#8A8AA0]">


    @auth()
        <a href="{{route('dashboard')}}" class="logo flex items-center gap-x-2.5">
            <img src="{{ asset('img/logo.png') }}" alt="logo.png">
            <span class="text-4xl font-bold">Axies</span>
        </a>
    @endauth

    @guest()
            <a href="{{route('home')}}" class="logo flex items-center gap-x-2.5">
                <img src="{{ asset('img/logo.png') }}" alt="logo.png">
                <span class="text-4xl font-bold">Axies</span>
            </a>
    @endguest

    <nav class="hidden lg:block">
        <ul class="flex gap-x-10 text-base font-bold ">

            @auth()
                <li><a href="{{route('dashboard')}}">Home</a></li>
            @endauth

            @guest()
                    <li><a href="{{route('home')}}">Home</a></li>
                @endguest
            <div class="relative cursor-pointer">
                <li class="explore flex items-center gap-x-2"><a>Explore</a> <img src="{{asset('img/arrow.svg')}}" alt=""></li>

                <div class="exploreBox z-10 backdrop-filter backdrop-blur-sm bg-opacity-20 border-gray-100 border-[1px] overflow-y-scroll text-white text-center hidden flex-col gap-y-2 p-2 font-medium text-[15px] w-[140px] h-[100px] absolute top-12 -right-10 rounded-xl">
                    <li><a href="{{route('create')}}">Create Item</a></li>
                    <li><a href="{{route('authors')}}">Authors</a></li>
                </div>
            </div>

            <div class="relative cursor-pointer">
                <li class="activity flex items-center gap-x-2"><a>Activity</a> <img src="{{asset('img/arrow.svg')}}" alt=""></li>
                <div class="activityBox z-10 backdrop-filter backdrop-blur-sm bg-opacity-20 border-gray-100 border-[1px] overflow-y-scroll text-white text-center hidden flex-col gap-y-2 p-2 font-medium text-[15px] w-[140px] h-[100px] absolute top-12 -right-10 rounded-xl">
                        <li><a href="{{route('login')}}">Login</a></li>
                        <li><a href="{{route('register')}}">Sign Up</a></li>
                    </div>
            </div>


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
