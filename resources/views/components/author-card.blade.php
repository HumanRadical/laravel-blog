@props(["author"])

<a href="/?author={{ $author->username }}&{{ http_build_query(request()->except('author')) }}">
    <div class="flex items-center text-sm">
        <img src="/images/lary-avatar.svg" alt="Lary avatar">
        <div class="ml-3">
            <h5 class="font-bold">{{ $author->name }}</h5>
            <h6 class="text-gray-400 text-xs">{{'@' . $author->username }}</h6>
        </div>
    </div>
</a>