<x-layout>
    <article>
        <h1>
             {{ $post->title }} 
        </h1>
        <p>
             {{ $post->body }} 
        </p>
    </article>

    <a href="/">Back to posts</a>
</x-layout>