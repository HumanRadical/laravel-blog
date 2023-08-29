<x-layout>
    <article>
        <h1>
             {{ $post->title }} 
        </h1>

        <p>
            By <a href="/user/{{ $post->user->id }}">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </p>

        <p>
             {{ $post->body }} 
        </p>
    </article>

    <a href="/">Back to posts</a>
</x-layout>