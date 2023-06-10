@extends('layouts.structure')

@section('banner')
    <section class="w-full h-[400px] bg-[#14141FB2] flex flex-col items-center justify-center text-white font-bold">
        <h1 class="text-5xl">Create Item</h1>

        <span class="mt-3 text-lg font-normal text-[#8A8AA0]">Home / Pages /<span class="text-white"> Create Item</span></span>

    </section>
@endsection

@section('form')
    <section class="py-20 px-24 bg-[#14141F] flex gap-x-20 justify-center">
        <div class="flex flex-col gap-y-5">
            <h6 class="text-xl text-white font-bold">Preview Item</h6>
        <x-card-component></x-card-component>
        </div>
        <form action="" method="POST" class="w-[800px]" enctype="multipart/form-data">
            <div class="flex flex-col gap-y-5">
                <label for="" class="text-xl text-white font-bold">Upload File</label>
                <x-text-input accept=".png, .jpg, .gif, .jpeg, .webp, .mp4" placeholder="PNG, JPG, GIF, WEBP or MP4. Max 200mb." class="" value="Upload File" type="file"></x-text-input>
            </div>

            <div class="flex flex-col gap-y-5">
                <label for="" class="text-xl text-white font-bold">Select Method</label>
                <div class="w-[320px] h-16 flex items-center justify-center bg-white rounded-lg gap-x-[10px] text-[#5142FC] font-bold text-[14px]">
                    <img src="{{asset('img/price.svg')}}" alt="">
                    Fixed Price
                </div>
            </div>

            <div class="flex flex-col gap-y-5 mt-5">
                <label for="" class="text-xl text-white font-bold">Price</label>
                <x-text-input type="text" placeholder="Enter price for one item (ETH)"></x-text-input>
            </div>

            <div class="flex flex-col gap-y-5 ">
                <label for="" class="text-xl text-white font-bold">Title</label>
                <x-text-input type="text" placeholder="Item Name"></x-text-input>
            </div>

            <div class="flex flex-col gap-y-5">
                <label for="" class="text-xl text-white font-bold">Description</label>
                <textarea type="text" placeholder="Item Name" rows="5" class="lg:w-full md:w-full sm:5/12 rounded-lg py-3 px-5 bg-transparent border-[1px]
           border-[#343444] text-white mb-6 outline-0 placeholder-[#8A8AA0]"></textarea>
            </div>

            <div class="flex items-center justify-between gap-x-5">
            <div class="flex flex-col gap-y-5 w-[320px]">
                <label for="" class="text-xl text-white font-bold">Royalties</label>
                <x-text-input type="text" placeholder="Item Name"></x-text-input>
            </div>

                <div class="flex flex-col gap-y-5 w-[320px]">
                    <label for="" class="text-xl text-white font-bold">Size</label>
                    <x-text-input type="text" placeholder="Item Name"></x-text-input>
                </div>
                <div class="flex flex-col gap-y-5 w-[320px] ">
                    <label for="" class="text-xl text-white font-bold">Collection</label>
                    <select name="cars" id="cars" class="lg:w-full md:w-full sm:5/12 rounded-lg py-3 px-5 bg-transparent border-[1px]
           border-[#343444] text-white mb-6 outline-0 placeholder-[#8A8AA0]">
                        <option value="" selected disabled hidden>Select a Colletion</option>
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>

            </div>

        </form>
    </section>
@endsection

@include('layouts.footer')
