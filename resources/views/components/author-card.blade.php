@props(["author"])

<a href="/?author={{ $author->username }}&{{ http_build_query(request()->except('author')) }}">
    <div class="flex items-center text-sm">
        <img src="/images/lary-avatar.svg" alt="Lary avatar">
        <div class="ml-3 text-left">
            <h3 class="font-bold text-base">{{ $author->name }}</h5>
            <h4 class="text-gray-400 text-sm">{{'@' . $author->username }}</h6>
        </div>
    </div>
</a>