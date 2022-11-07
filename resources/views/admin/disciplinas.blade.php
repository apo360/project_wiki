<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Disciplinas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div style = "border: black 1px solid; border-radius: 7px; padding: 10px;">
                <div class = "">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <x-jet-validation-errors class="mb-4" />
                </div>
                <form method="POST" action="{{ route('cadastro_disciplina') }}" enctype = "multipart/form-data">
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

                <table>
                    <thead>
                        <th>Código</th>
                        <th>Disciplina</th>
                    </thead>
                    <tbody>
                        @foreach (\App\Models\Disciplinas::all() as $disp)
                            <tr>
                                <td>{{$disp->codigo}}</td>
                                <td>{{$disp->descricao}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>        
            </div>
        </div>
    </div>
</x-app-layout>