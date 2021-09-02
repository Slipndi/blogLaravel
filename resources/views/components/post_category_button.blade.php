@props(['category'])
<div class='space-x-2'>
    <a href="/?category={{ $category->slug }}" class="border border-indigo-400 text-indigo-400 text-xs px-3 py-1 rounded-full font-semibold uppercase" style="font-size: 10px;">
        {{ $category->name }}
    </a>
</div>
