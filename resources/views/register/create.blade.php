<x-layout>
    <x-slot name="content">
        <section class="px-6 py-8">
        
        <main class="max-w-lg mx-auto mt-20 border border-gray-200 bg-gray-100 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Register!</h1>
            <form method="POST" action="/register" class="mt-10">
                @csrf
                <!-- Name -->
                <div class="mb-6">
                    <lable class="block mb-2 uppercase font-bold text-xs text-gray-700" 
                        for="name" >
                        Name
                    </lable>
                    <input class="border border-gray-400 p-2 w-full"
                        type="text"
                        name="name"
                        id="name"
                        required />
                </div>

                <!-- Username -->
                <div class="mb-6">
                    <lable class="block mb-2 uppercase font-bold text-xs text-gray-700" 
                        for="username" >
                        Username
                    </lable>
                    <input class="border border-gray-400 p-2 w-full"
                        type="text"
                        name="username"
                        id="username"
                        required />
                </div>


                <!-- Email -->
                <div class="mb-6">
                    <lable class="block mb-2 uppercase font-bold text-xs text-gray-700" 
                        for="email" >
                        Email
                    </lable>
                    <input class="border border-gray-400 p-2 w-full"
                        type="text"
                        name="email"
                        id="email"
                        required />
                </div>
                <!-- Password -->
                <div class="mb-6">
                    <lable class="block mb-2 uppercase font-bold text-xs text-gray-700" 
                        for="password" >
                        Password
                    </lable>
                    <input class="border border-gray-400 p-2 w-full"
                        type="password"
                        name="password"
                        id="password"
                        required />
                </div>

                <div class="mb-6">
                    <button type="submit"
                        class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                        >
                        Submit
                    </button>
                </div>
            </form>
        </main>

        </section>
    </x-slot>
</x-layout>