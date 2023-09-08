@auth
    <x-panel>
        <form method="POST" action="/posts/{{ $post->slug }}/comments">
            @csrf
            <header class="flex items-center space-x-4">
                <img src="/images/lary-avatar.svg" alt="Lary avatar" width="40" height="40">
                <h2 class="font-semibold text-lg">Join the conversation!</h2>
            </header>
            <div class="mt-6">
                <textarea 
                    name="body" 
                    id="body" 
                    class="w-full text-sm focus:outline-none focus:ring p-3" 
                    rows="10" 
                    placeholder="What's on your mind?"
                    required></textarea>
                @error('body')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="text-right mt-6 pt-6 border-t boprder-gray-200">
                <button type="submit" class="bg-blue-500 text-white uppercase font-semibold text-sm py-2 px-10 rounded-2xl hover:bg-blue-600">Post</button>
            </div>
        </form>
    </x-panel>
@else
    <x-panel>
        <h2 class="font-semibold text-lg">
            <a href="/login" class="text-blue-500 hover:underline">Log in</a> or <a href="/register" class="text-blue-500 hover:underline">Register</a> to join the conversation!</h2>
    </x-panel>    
@endauth