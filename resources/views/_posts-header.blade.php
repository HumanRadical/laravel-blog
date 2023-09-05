<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        Latest <span class="text-blue-500">Laravel From Scratch</span> News
    </h1>

    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-4">
        <!--  Category -->
        <x-dropdown>
            <x-slot name="trigger">
                <button class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex">
                    {{ isset($currentCategory) ? $currentCategory->name : "Categories" }}
                    <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px;" />
                </button>
            </x-slot>

            <x-dropdown-item href="/" :active='request()->is("/")'>
                All
            </x-dropdown-item>

            @foreach ($categories as $category)
                <x-dropdown-item href="/?category={{ $category->slug }}" :active='request()->is("?category={$category->slug}")'>
                    {{ $category->name }}
                </x-dropdown-item>
            @endforeach
        </x-dropdown>

        <!--  Author -->
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

        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="GET" action="#">
                <input type="text" 
                        name="search" 
                        placeholder="Find something"
                        class="bg-transparent placeholder-black font-semibold text-sm"
                        value="{{ request('search') }}">
            </form>
        </div>
    </div>
</header>