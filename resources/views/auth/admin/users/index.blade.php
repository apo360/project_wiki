<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Usúarios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                Área do Administrador
            </div>

            @foreach(\App\Models\User::all() as $user)
                {{ $user->name }} <br>
                {{ $user->email }} <br>
                {{ $user->updated_at }} <br>
            @endforeach
           
        </div>
    </div>
</x-app-layout>