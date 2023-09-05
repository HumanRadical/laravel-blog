<x-dropdown>
    <x-slot name="trigger">
        <button class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-40 text-left flex lg:inline-flex">
            {{ isset($currentAuthor) ? $currentAuthor->name : "Authors" }}
            <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px;" />
        </button>
    </x-slot>

    <x-dropdown-item href="/" :active="!request()->routeIs('author')">
        All
    </x-dropdown-item>

    @foreach ($authors as $author)
        <x-dropdown-item href="/?author={{ $author->username }}" :active='request()->is("authors/{$author->username}")'>
            {{ $author->name }}
        </x-dropdown-item>
    @endforeach
</x-dropdown>