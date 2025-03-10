@props([
    'title' => '',
    'company' => '',
    'salary' => '',
    'tags' => [],
    'logo' => '',
    'perks'=> [],
])

<article class="p-4 bg-neutral-900 rounded-md w-full h-[150px] flex justify-between items-center gap-4 group transition-all border border-transparent hover:border-blue-500">

    <div class="flex gap-6 h-full">

        <img src="{{$logo }}" alt="logo" class="h-full w-auto max-w-[180px] object-contain rounded-lg">
        <div class="h-full flex flex-col justify-evenly">
            <p class="opacity-80 font-semibold">{{ $company }}</p>
            <h1 class="font-bold text-2xl group-hover:text-blue-500">{{ $title }}</h1>
            <p class="opacity-80 font-semibold">{{ $salary }}</p>
        </div>

    </div>


    <div class="h-full flex flex-col justify-between">

        <div class="flex gap-2">
            @foreach ($perks as $perk)
            <span class="border border-neutral-600 py-0.5 px-4 rounded-full">{{ $perk }}</span>
            @endforeach
        </div>

        <div class="flex gap-2">
            @foreach ($tags as $tag)
            <x-tag class="text-[0.625rem]" href="#">{{ $tag }}</x-tag>
            @endforeach
        </div>


    </div>


</article>