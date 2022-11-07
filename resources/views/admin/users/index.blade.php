<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Usúarios__') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table>
                    <thead>
                        <th>Nome Completo</th>
                        <th>Email</th>
                        <th>Actualizado</th>
                    </tthead>
                    <tbody>
                        @foreach(\App\Models\User::all() as $user)
                            <td>{{ $user->name }} </td>
                            <td>{{ $user->email }} </td>
                            <td>{{ $user->updated_at }} </td>
                        @endforeach
                    </tbody>
                </table>
                <hr>    
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Disciplinas') }}
                </h2>
                
            </div>

            
           
        </div>
    </div>

    
 
</x-app-layout>