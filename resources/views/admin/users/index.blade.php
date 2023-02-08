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
                <div>
                    <div class = "">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <x-jet-validation-errors class="mb-4" />
                    </div>

                    <form method="post" action="{{ route('disciplinas') }}" enctype = "multipart/form-data">
                        <div>
                            <label for="">Código</label>
                            <input type="text" class="block mt-1 w-full" name = "codigo" id = "codigo">
                        </div>
                       
                        <div>
                            <label for="">Disciplina</label>
                            <input type="text" name="disciplina" id="disciplina" class="block mt-1 w-full">
                        </div>

                        <div>
                            <label for="">Icon</label>
                            <input type="file" name="icon" id="icon" class="block mt-1 w-full">
                        </div>

                        <x-jet-button class="ml-4">
                            {{ __('Inserir') }}
                        </x-jet-button>
                    </form>
                </div>
            </div>

            
           
        </div>
    </div>

    
 
</x-app-layout>