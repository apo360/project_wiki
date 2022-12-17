
@include('layouts.header')

<section>
    @include('layouts.menu')
</section>

<!-- 
    id, name, surname, email, phone_number, profile_photo_path, grau_academico, preco
 -->

 <div class = "container">
    <div class = "row">
        <div class = "col-md-2" style = "border-right: 2px navy solid;">
            <span> Filtrar Pesquisa </span>
            <div>
                <label for="">Preço</label>
                <input type="range" name="Preço" id="" min = "10" max = "9000">
            </div>
            <div class = "">
                <label for=""> Classificação</label>
            </div>
            <div>

            </div>
        </div>
        <div class = "col-md-9">
            @foreach ($disciplinaID as $profs)
                <div class="card mb-3" style="max-width: 570px;">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="/storage/{{ $profs->profile_photo_path }}" class="img-fluid rounded-start" alt="{{ $profs->name }}">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <h5 class="card-title">{{ $profs->name }} {{ $profs->surname }}</h5>
                                <p class="card-text"><small class="text-muted">Explicador</small></p>
                                <p class="card-text">{{ $profs->descricao }}</p>
                            </div>
                            {{ $profs->grau_academico }} <br>
                        </div>
                        <div class="col-md-2">
                            
                            {{ $profs->preco }} kz <br>
                            <a href="{{ $profs->id }}" class = "">Perfil</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
 </div>