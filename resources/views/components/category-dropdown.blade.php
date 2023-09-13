<x-dropdown class="lg:flex lg:inline-flex lg:items-center relative bg-gray-100 rounded-xl">
    <x-slot name="trigger">
        <button class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex">
            {{ isset($currentCategory) ? $currentCategory->name : "Categories" }}
            <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px;" />
        </button>
    </x-slot>

    <x-dropdown-item 
        href="/?{{ http_build_query(request()->except('category', 'page')) }}" 
        :active="!isset(request()->query()['category'])"
    > All
    </x-dropdown-item>

    @foreach ($categories as $category)
        <x-dropdown-item 
            href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}" 
            :active="isset(request()->query()['category']) && request()->query()['category'] === $category->slug"
        > {{ $category->name }}
        </x-dropdown-item>
    @endforeach
</x-dropdown>