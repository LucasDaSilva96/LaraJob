@props([
    'title' => '',
    'company' => '',
    'salary' => '',
    'tags' => [],
    'logo' => '',
])

<article {{ $attributes->merge(['class' => 'w-[370px] h-[250px] rounded-md bg-neutral-900 p-2.5 flex flex-col justify-evenly group transition-all border border-transparent hover:border-blue-500']) }}>
    {{-- <p class="text-lg font-semibold">{{ $company }}</p> --}}

    <div class="text-center space-y-3">

        <h1 class="text-2xl font-bold group-hover:text-blue-500">{{ $title }}</h1>


        <p class="font-light text-base">From - {{ $salary }}$</p>
    </div>

    <div class="flex justify-between items-end">

        <div class="flex gap-2 max-w-[75%] overflow-x-auto no-scrollbar">
            @foreach ($tags as $tag)
                <x-tag class="text-[0.625rem]" href="#">{{ $tag['name'] }}</x-tag>
            @endforeach
        </div>

        <img src="{{ $logo }}" alt="logo" class="w-16 h-auto object-contain rounded-xs">

    </div>
</article>