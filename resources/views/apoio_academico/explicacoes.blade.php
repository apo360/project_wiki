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
            <input type="submit" name="" value="enviar 2" style = "background-color: red; border-radius: 7%; border: 2px black solid;">
        </form>
    </header>

    <section>
        
        @foreach(\App\Models\Disciplinas::all() as $discip)
            <div class = "card card-dark">
                <img src="" alt="">
                <div class = "card-body">
                    <h5 class = "card-title">{{ $discip->descricao }}</h5>
                    <p class = "card-text"> {{ $discip->codigo }}</p>
                    <a href="#" class = "btn btn-primary">click</a>
                </div>
            </div>
        @endforeach
    </section>



</body>
