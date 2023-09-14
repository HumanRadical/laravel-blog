<x-layout>
    <x-setting heading="Manage Posts">
        <div class="max-w-md">
            <table class="min-w-max table-auto w-full">
                <tbody class="text-gray-600 text-sm font-light">
                    @foreach ($posts as $post)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-4 text-left whitespace-nowrap">
                                <span class="font-medium">{{ \Illuminate\Support\Str::limit($post->title, 25, $end="...") }}</span>
                            </td>
                            <td class="py-3 px-4 text-left">
                                <span>{{ \Illuminate\Support\Str::limit($post->author->name, 16, $end="...") }}</span>
                            </td>
                            <td class="py-3 px-4 text-center">
                                <span class="bg-green-200 text-green-500 py-1 px-3 rounded-full text-xs">Published</span>
                            </td>
                            <td class="py-3 px-4 text-center">
                                <div class="flex item-center justify-center">
                                    <div class="w-4 mr-2 transform hover:text-blue-500 hover:scale-110">
                                        <a href="/posts/{{ $post->slug }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-blue-500 hover:scale-110">
                                        <a href="/admin/posts/{{ $post->slug }}/edit">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </a>
                                    </div>
                                    <form method="POST" action="/admin/posts/{{ $post->slug }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="bg-none">
                                            <div class="w-4 mr-2 transform hover:text-red-500 hover:scale-110 cursor-pointer">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </div>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-setting>
</x-layout>