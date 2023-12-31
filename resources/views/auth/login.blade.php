<x-guest title="Login">
    <div class="w-[400px] container shadow-lg bg-white px-6 py-8 my-10 rounded">
        <h1 class="font-2xl font-bold text-center mb-4">Login</h1>
        <form action="{{ route('login.store') }}" method="POST" class="w-full">
            @csrf
            <div>
                <x-form.label value="Username" for="username" />
                <x-form.input type="text" id="username" name="username" placeholder="Enter Username" />
                @error('username')
                    <p class="text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="mt-4">
                <x-form.label value="Password" for="password" />
                <x-form.input type="password" id="password" name="password" placeholder="Enter Password" />
                @error('password')
                    <p class="text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex items-center gap-2">
                <input type="checkbox" name="remember_me" class="" id="remember_me">
                <x-form.label value="Remember Me" class="mt-[7px]" for="remember_me" />
            </div>

            <button type="submit"
                class="float-right text-white  bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Login</button>
        </form>
    </div>
</x-guest>
