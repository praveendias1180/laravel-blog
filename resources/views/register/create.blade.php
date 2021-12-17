<x-layout>
    <x-slot name="content">
        <section class="px-6 py-8">
        
        <main class="max-w-lg mx-auto mt-20">
            <x-panel>
                <h1 class="text-center font-bold text-xl">Register</h1>
                <form method="POST" action="/register" class="mt-10">
                    @csrf
                    <!-- Name -->
                    <x-form.input name="name" />

                    <!-- Username -->
                    <x-form.input name="username" />

                    <!-- Email -->
                    <div class="mb-6">
                    <x-form.input name="email" type="email" autocomplete="username"/>

                    <!-- Password -->
                    <x-form.input name="password" type="password" autocomplete="new-password" />

                    <div class="mb-6">
                        <x-form.button>Register</x-form.button>
                    </div>

                    <!-- @if($errors->any())
                    <ul>
                        @foreach($errors->all() as $error)
                            <li class="text-red-500 text-xs">{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif -->
                </form>
            </x-panel>
        </main>

        </section>
    </x-slot>
</x-layout>