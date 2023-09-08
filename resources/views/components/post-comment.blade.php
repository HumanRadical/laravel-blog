@props(['comment'])

<x-panel class="bg-gray-100">
    <article class="flex space-x-4">
        <div>
            <header class="mb-2">
                <x-author-card :author="$comment->author" />
                <p class="text-sm mt-4 font-semibold"> Posted <time>{{ $comment->created_at->diffForHumans() }}</time> </p>
            </header>
            <p>{{ $comment->body }}</p>
        </div>
    </article>
</x-panel>