<x-layout>
    <section class="px-6 py-8">
        <x-panel class="max-w-xl mx-auto">
            <h1 class="text-center font-bold text-xl">
                Create a post
            </h1>
    
            <form method="POST" action="/admin/posts" enctype="multipart/form-data" class="mt-10">
                @csrf
                <x-form.input name="title" />
                <x-form.input name="slug" />
                <x-form.input name="excerpt" />
                <x-form.input name="thumbnail" type="file" />
                <x-form.textarea name="body" />               
                <div class="mb-6">
                    <x-form.label name="category" />
    
                    <select name="category_id" id="category_id">
                        @foreach (\App\Models\Category::all() as $category)
                            <option 
                                value="{{ $category->id }}"
                                {{ old("category_id") == $category->id ? "selected" : "" }}
                            >{{ $category->name }}</option>
                        @endforeach
                    </select>
    
                    <x-form.error name="category" />
                </div>
                <x-form.submit-button>Publish</x-form.submit-button>
            </form>
        </x-panel>
    </section>
</x-layout>