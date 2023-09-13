<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">
                Log in to Laracasts
            </h1>

            <form method="POST" action="/login" class="mt-10">
                @csrf
                <x-form.input name="username" />
                <x-form.input name="password" type="password" />
                <x-form.submit-button>Log in</x-form.submit-button>
            </form>
        </main>
    </section>
</x-layout>