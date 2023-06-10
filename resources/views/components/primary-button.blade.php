<button {{ $attributes->merge(['type' => 'submit', 'class' => 'border-2 border-white w-full text-[15px] font-bold py-4 mt-6 rounded-3xl text-white']) }}>
    {{ $slot }}
</button>
