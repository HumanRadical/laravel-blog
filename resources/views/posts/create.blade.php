<x-layout>
    <section class="px-6 py-8">
        <x-panel class="max-w-xl mx-auto">
            <h1 class="text-center font-bold text-xl">
                Create a post
            </h1>
    
            <form method="POST" action="/admin/posts" enctype="multipart/form-data" class="mt-10">
                @csrf
    
                <div class="mb-6">
                    <label 
                        class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        for="title" 
                    > Title
                    </label>
    
                    <input class="border border-gray-400 p-2 w-full"
                        type="text"
                        name="title"
                        id="title"
                        value="{{ old("title") }}"
                        required
                    >
    
                    @error("title")
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                        <label 
                        class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        for="excerpt" 
                        > Excerpt
                    </label>
                    
                    <input class="border border-gray-400 p-2 w-full"
                    type="text"
                    name="excerpt"
                    id="excerpt"
                    value="{{ old("excerpt") }}"
                    required
                    >
                    
                    @error("excerpt")
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            
                <div class="mb-6">
                    <label 
                        class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        for="slug" 
                    > Slug
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                        type="text"
                        name="slug"
                        id="slug"
                        value="{{ old("slug") }}"
                        required
                    >

                    @error("slug")
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label 
                        class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        for="thumbnail" 
                    > Thumbnail
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                        type="file"
                        name="thumbnail"
                        id="thumbnail"
                        value="{{ old("thumbnail") }}"
                        required
                    >

                    @error("thumbnail")
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label 
                        class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        for="body" 
                    > Body
                    </label>
    
                    <textarea class="border border-gray-400 p-2 w-full"
                        type="text"
                        name="body"
                        id="body"
                        rows="12"
                        required
                    >{{ old("body") }}</textarea>
    
                    @error("body")
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
    
                <div class="mb-6">
                    <label 
                        class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        for="category_id" 
                    > Category
                    </label>
    
                    <select name="category_id" id="category_id">
                        @foreach (\App\Models\Category::all() as $category)
                            <option 
                                value="{{ $category->id }}"
                                {{ old("category_id") == $category->id ? "selected" : "" }}
                            >{{ $category->name }}</option>
                        @endforeach
                    </select>
    
                    @error("category_id")
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
    
                <div class="mb-6 text-center mt-10">
                    <button type="submit"
                        class="bg-blue-400 text-white text-l font-semibold rounded py-2 px-4 hover:bg-blue-500"
                    > Publish
                    </button>
                </div>
            </form>
        </x-panel>
    </section>
</x-layout>