<x-app-layout>
    <div class="text-center p-10 text-white bg-gradient-to-br from-purple-600 to-blue-500 min-h-screen">
        <h1 class="text-3xl font-bold mb-4">Welcome! ❤️</h1>
        <p class="text-lg mb-6">You’re now logged in.</p>

        <div class="space-y-4">
            <a href="{{ route('home#page')}}"
               class="block bg-white text-blue-600 font-semibold px-6 py-3 rounded-full shadow hover:bg-blue-100 transition">
                Start
            </a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                        class="w-full bg-white text-red-600 font-semibold px-6 py-3 rounded-full shadow hover:bg-red-100 transition">
                    Logout
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
