<x-app-layout>
    <div class="container mx-auto mt-8">
        <h2 class="text-2xl font-bold">Admin Dashboard</h2>
        <p>Selamat datang, {{ Auth::user()->name }}!</p>

        <div class="mt-4">
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                class="px-4 py-2 bg-red-500 text-white rounded">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                @csrf
            </form>
        </div>
    </div>
</x-app-layout>
