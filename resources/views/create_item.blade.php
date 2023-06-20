@extends('layouts.structure')

@push('components.card-component', ['users' => $users])

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush

@section('banner')
    <section class="w-full h-[400px] bg-[#14141FB2] flex flex-col items-center justify-center text-white font-bold">
        <h1 class="text-5xl">Create Item</h1>

        <span class="mt-3 text-lg font-normal text-[#8A8AA0]">Home / Pages /<span class="text-white"> Create Item</span></span>

    </section>
@endsection

@section('form')
    <section class="py-20 lg:px-24 md:px-16 sm:px-5 bg-[#14141F] flex lg:flex-nowrap md:flex-wrap sm:flex-wrap gap-10 justify-center overflow-x-hidden">
        <div class="flex flex-col gap-y-5 lg:w-fit lg:h-fit md:w-screen sm:w-screen justify-center items-center">
            <h6 class="text-xl text-white font-bold">Preview Item</h6>
            <x-preview/>
        </div>

        <div class="lg:w-screen md:w-screen sm:w-screen lg:px-0 md:px-5 sm:px-0">
            <label class="text-xl text-white font-bold">Upload File</label>
        <form action="{{route('image.store')}}" method="POST" id="dropzone" enctype="multipart/form-data" class="dropzone w-full h-10 lg:w-full md:w-full sm:5/12 rounded-lg py-3 px-5 bg-transparent border-[1px]
           border-[#343444] text-white mb-6 outline-0 placeholder-[#8A8AA0] mt-4">
            @csrf
        </form>


        <form action="{{route('create-item.store')}}" method="POST" class="lg:w-[900px] md:w-screen sm:w-screen" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-col gap-y-5">
                <label for="" class="text-xl text-white font-bold">Select Method</label>
                <div class="w-[320px] h-16 flex items-center justify-center bg-white rounded-lg gap-x-[10px] text-[#5142FC] font-bold text-[14px]">
                    <img src="{{asset('img/price.svg')}}" alt="">
                    Fixed Price
                </div>
            </div>

            <div class="flex flex-col gap-y-5 mt-5">
                <label for="" class="text-xl text-white font-bold">Price</label>
                <x-text-input id="price" onkeyup="getPrice()" minlength="1" type="text" name="price" placeholder="Enter price for one item (ETH)"></x-text-input>
                @error('price')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
            </div>

            <div class="flex flex-col gap-y-5 ">
                <label for="" class="text-xl text-white font-bold">Title</label>
                <x-text-input id="title" onkeyup="getValue()" minlength="4" maxlength="35"  type="text" name="title" placeholder="Item Name"></x-text-input>
                @error('title')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
            </div>

            <div class="flex flex-col gap-y-5">
                <label for="" class="text-xl text-white font-bold">Description</label>
                <textarea type="text" name="description" placeholder="Item Name" rows="5" class="lg:w-full md:w-full sm:w-screen rounded-lg py-3 px-5 bg-transparent border-[1px]
           border-[#343444] text-white mb-6 outline-0 placeholder-[#8A8AA0]"></textarea>
                @error('description')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
            </div>

            <div class="flex items-center flex-wrap justify-between gap-x-5">
            <div class="flex flex-col gap-y-5 lg:w-[320px] md:w-screen sm:w-screen">
                <label for="" class="text-xl text-white font-bold">Royalties</label>
                <x-text-input type="text" name="royalties" placeholder="Item Name"></x-text-input>
                @error('royalties')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
            </div>

                <div class="flex flex-col gap-y-5 lg:w-[320px] md:w-screen sm:w-screen">
                    <label for="" class="text-xl text-white font-bold">Size</label>
                    <x-text-input type="text" name="size" placeholder="Item Name"></x-text-input>
                    @error('size')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>
                <div class="flex flex-col gap-y-5 lg:w-[320px] md:w-screen sm:w-screen">
                    <label for="" class="text-xl text-white font-bold">Collection</label>
                    <select name="collection_id" id="collection_id" class="lg:w-full md:w-full sm:5/12 rounded-lg py-3 px-5 bg-transparent border-[1px]
           border-[#343444] text-white mb-6 outline-0 placeholder-[#8A8AA0]">
                        @foreach($collections as $collection)
                            <option value="{{$collection->id}}">{{$collection->name}}</option>
                        @endforeach
                    </select>

                </div>

                <div class="flex flex-col gap-y-5 lg:w-[320px] md:w-screen sm:w-screen">
                    <label for="" class="text-xl text-white font-bold">Categories</label>
                    <select name="category_id" id="category_id" class="lg:w-full md:w-full sm:5/12 rounded-lg py-3 px-5 bg-transparent border-[1px]
           border-[#343444] text-white mb-6 outline-0 placeholder-[#8A8AA0]">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>

            </div>

            <div class="mb-5">
                <input name="img_item" value="{{old('img_item')}}" type="hidden">
                @error('img_item')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
            </div>

            <button type="submit" class="bg-[#5142FC] text-white text-[15px] font-bold py-3 rounded-xl px-10 mt-5">Submit</button>

        </form>
        </div>

    </section>
@endsection

@include('layouts.footer')
