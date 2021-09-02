<div>
    <x-dropdown_menu>
        <x-slot name='trigger'>
            <button class="py-2 pl-3 pr-9 text-sm font-bold w-full lg:w-32 text-left flex lg:inline-flex">
                {{ isset($current_category) ? ucwords($current_category->name) : 'Catégories' }}
                <x-icon name='down_arrow' class='absolute pointer-events-none' style="right: 12px;"/>
            </button>
        </x-slot>
        <x-dropdown_items href='/?' :active="request()->routeIs('home')">Toutes</x-dropdown_items>
        @foreach ($categories as $category)
            <x-dropdown_items href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category','page')) }}" :active="isset($current_category) && $current_category->is($category)">
                 {{ ucwords($category->name)}}
            </x-dropdown_items>
        @endforeach
     </x-dropdown_menu>
</div>
