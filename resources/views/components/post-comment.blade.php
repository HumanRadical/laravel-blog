@props(['comment'])

<article class="flex bg-gray-100 border border-gray-200 p-6 rounded-xl space-x-4">
    <div>
        <header class="mb-2">
            <x-author-card :author="$comment->author" />
            <p class="text-sm mt-4 font-semibold"> Posted <time>{{ $comment->created_at->diffForHumans() }}</time> </p>
        </header>
        <p>{{ $comment->body }}</p>
    </div>
</article>