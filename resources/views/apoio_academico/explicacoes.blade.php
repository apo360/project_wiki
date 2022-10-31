@include('layouts.header')
<section>
    @include('layouts.menu')
</section>

<body>
    <header>
    <h2>Explicações aqui</h2>
        <form action="" method="get">
            <input id="procurar" class="block mt-1 w-full" type="search" name="procurar" :value="old('procurar')" placeholder = "Insira a disciplina desejada" autofocus />
            <x-jet-button class="ml-4">
                {{ __('Buscar') }}
            </x-jet-button>
        </form>
    </header>

    <section>
        @foreach(\App\Models\Disciplinas::all() as $discip)
            {{ $discip->codigo }}
            <b> <a href = "#">{{ $discip->descricao }}</a> </b>
            {{ $discip->icon }}
        @endforeach
    </section>



</body>
