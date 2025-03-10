
<a {{ $attributes->merge(
    ['class' => 'inline bg-neutral-700 text-slate-50 px-4 py-1.5 rounded-md border border-transparent transition-all hover:border-blue-500 group/a']) }}>
   <p class=" group-hover/a:text-blue-500">
    {{ $slot }}
   </p>
</a>