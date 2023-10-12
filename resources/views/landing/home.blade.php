<x-app title="Home">
    <div class="container">

        {{-- Ng kene stylen dewe pal --}}


        <div
            class="font-semibold text-gray-800 hover:text-white bg-blue-500 hover:bg-blue-500 transition-all ease-in-out py-4 px-6 rounded-lg duration-150">
            <a class="flex"
                onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"
                href="#">
                <form action="{{ route('logout') }}" method="POST" class="flex" id="logout-form">
                    @csrf
                    <span class="text-white font-semibold">Log out</span>
                </form>
            </a>
        </div>
    </div>
</x-app>
