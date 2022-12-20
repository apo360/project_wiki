
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
            <div class="posts">
                <article>
                    <a href="explicacoes/{{ $discip->descricao }}" class="image">
                        <img src="images/mat.png" alt="" />
                    </a>
                    <h3>{{ $discip->descricao }}</h3>
                    <p></p>
                    <ul class="actions">
                        <li><a href="explicacoes/{{ $discip->descricao }}" class="button">Explore Mais</a></li>
                    </ul>
                </article>
            </div>
        @endforeach
    </section>