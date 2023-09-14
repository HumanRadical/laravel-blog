<x-layout>
    <x-setting heading="Publish New Post">
        <form method="POST" action="/admin/posts" enctype="multipart/form-data" class="mt-10">
            @csrf
            <x-form.input name="title" required/>
            <x-form.input name="slug" required/>
            <x-form.textarea name="excerpt" rows="3" required/>
            <x-form.input name="thumbnail" type="file" required/>
            <x-form.textarea name="body" required/>               
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
    </x-setting>
</x-layout>