<x-dropdown>
    <x-slot name="trigger">
        <button class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-40 text-left flex lg:inline-flex">
            {{ isset($currentAuthor) ? $currentAuthor->name : "Authors" }}
            <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px;" />
        </button>
    </x-slot>

    <x-dropdown-item 
        href="/?{{ http_build_query(request()->except('author', 'page')) }}" 
        :active="!isset(request()->query()['author'])"
        > All
    </x-dropdown-item>

    @foreach ($authors as $author)
        @if ($author->post_author)
            <x-dropdown-item 
                href="/?author={{ $author->username }}&{{ http_build_query(request()->except('author', 'page')) }}" 
                :active="isset(request()->query()['author']) && request()->query()['author'] === $author->username"
                > {{ $author->name }}
            </x-dropdown-item> 
        @endif
    @endforeach
</x-dropdown>