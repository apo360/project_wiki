@include('layouts.header')
<section>
    @include('layouts.menu')
</section>

<style>
    body{
        background-color : #ddd;
    }
</style>

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
        @foreach($disciplina as $discip)
            <div class = "card card-dark">
                <img src="" alt="">
                <div class = "card-body">
                    <h5 class = "card-title">{{ $discip->descricao }}</h5>
                    <p class = "card-text"> {{ $discip->id }}</p>
                    <a href="explicacoes/{{ $discip->descricao }}" class = "btn btn-primary">Explore Mais >></a>
                </div>
            </div>
        @endforeach
    </section>



</body>
