@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'lg:w-full md:w-full sm:5/12 rounded-lg py-3 px-5 bg-transparent border-[1px]
           border-[#343444] text-white placeholder-[#343444] mb-6 outline-0 placeholder-[#8A8AA0]']) !!}>
