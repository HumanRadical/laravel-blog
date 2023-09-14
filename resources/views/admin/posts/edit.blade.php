<x-layout>
    <x-setting :heading="'Edit Post: ' . $post->title">
        <form method="POST" action="/admin/posts/{{ $post->slug }}" enctype="multipart/form-data" class="mt-10">
            @csrf
            @method('PATCH')
            <x-form.input name="title" :value="$post->title" required />
            <x-form.input name="slug" :value="$post->slug" required />
            <x-form.textarea name="excerpt" rows="3" required>{{ $post->excerpt }}</x-form.textarea>
            <div class="flex mt-6">
                <div class="flex-1 mr-6">
                    <x-form.input name="thumbnail" type="file" />
                </div>
                <img src="{{ asset("storage/" . $post->thumbnail) }}" alt="" class="rounded-xl" width="150">
            </div>
            <x-form.textarea name="body">{{ $post->body }}</x-form.textarea>
            <div class="mb-6">
                <x-form.label name="category" />
                <select name="category_id" id="category_id">
                    @foreach (\App\Models\Category::all() as $category)
                        <option 
                            value="{{ $category->id }}"
                            {{ old("category_id", $post->category_id) == $category->id ? "selected" : "" }}
                        >{{ $category->name }}</option>
                    @endforeach
                </select>
                <x-form.error name="category" />
            </div>
            <x-form.submit-button>Update</x-form.submit-button>
        </form>
    </x-setting>
</x-layout>