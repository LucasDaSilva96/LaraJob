@props([
    'isHeading' => false,
])

<div class="flex items-center gap-1.5">
    <div {{ $attributes->merge(['class' => ($isHeading ? 'w-4 h-4' : 'w-3 h-3') . ' rounded-xs']) }} >

    </div>
    <span class="{{$isHeading ? 'text-xl font-semibold' : 'text-base'}}">{{ $slot }}</span>
</div>
