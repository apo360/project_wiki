
<style>

    section.dispclinas{
        background-color: #F6F9FF;
        justify-content: center;
        color: #434343;
        width: 100%;
    }

    section.dispclinas .cards_disp, .localidades{
        margin-right: 350px;
        margin-left: 350px;
        background-color: #ddd;
        padding-bottom: 38px;
        margin-bottom: 10px;
    }

    section.dispclinas form{
        margin-bottom: 5px;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        justify-content: center;
        gap: 1rem;
    }

    section.dispclinas label{
        margin-top: 20px;
        font-size: 20px;
        color: #434343;
        text-transform: uppercase;
        margin-bottom: 15px;
    }

    section.dispclinas input{
        border-radius: 8px;
        margin-bottom: 15px;
        background: transparent;
    }

    .row{
        gap: 0;
        margin-top: 20px;
        margin-bottom: 25px;
        margin-left: 50px;
        margin-right: 50px;
    }
</style>

<section class="container">
    
    <div class="">
        <form action="" method="post">
            <label for="procurar">Pesquise as disciplinas.</label>
            <input id="procurar" class="input_search_disp form-control" type="text" name="procurar" placeholder = "Insira a disciplina desejada" autofocus list="list_disciplina"/>
            <datalist id="list_disciplina" class="resultado_nome_cliente">
                @foreach($disciplina as $discip)
                    <option value="{{ $discip->descricao }}" label="{{ $discip->descricao }}">
                @endforeach
            </datalist>
        </form>

        <div class="">
            <div class="row">

                <div class="col-md-3">
                    <div class="card card-dark">
                        <div class="card-header">Matemática</div>
                        <div class="card-body">
                            <img src="images/mat.png" alt="" style="width: 1080px; height: 270px;">
                        </div>
                        <div class="card-footer">
                            <a href="explicacoes/Matemática" class="btn btn-primary">Explore Mais</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card card-dark">
                        <div class="card-header">Francês</div>
                        <div class="card-body">
                            <img src="images/frances.png" alt="" style="width: 1080px; height: 270px;">
                        </div>
                        <div class="card-footer">
                            <a href="explicacoes/Francês" class="btn btn-primary">Explore Mais</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card card-dark">
                        <div class="card-header">Inglês</div>
                        <div class="card-body">
                            <img src="images/Ingles.jpg" alt="" style="width: 1080px; height: 270px;">
                        </div>
                        <div class="card-footer">
                            <a href="explicacoes/Inglês" class="btn btn-primary">Explore Mais</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card card-dark">
                        <div class="card-header">Informática</div>
                        <div class="card-body">
                            <img src="images/info.png" alt="" style="width: 1080px; height: 270px;">
                        </div>
                        <div class="card-footer">
                            <a href="explicacoes/Informática" class="btn btn-primary">Explore Mais</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-3">
                    <div class="card card-dark">
                        <div class="card-header">Programação</div>
                        <div class="card-body">
                            <img src="images/programacao.jpg" alt="" style="width: 1080px; height: 270px;">
                        </div>
                        <div class="card-footer">
                            <a href="explicacoes/Programação" class="btn btn-primary">Explore Mais</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card card-dark">
                        <div class="card-header">Química</div>
                        <div class="card-body">
                            <img src="images/quimica.png" alt="" style="width: 1080px; height: 270px;">
                        </div>
                        <div class="card-footer">
                            <a href="explicacoes/Química" class="btn btn-primary">Explore Mais</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card card-dark">
                        <div class="card-header">Física</div>
                        <div class="card-body">
                            <img src="images/fisi.png" alt="" style="width: 1080px; height: 270px;">
                        </div>
                        <div class="card-footer">
                            <a href="explicacoes/Física" class="btn btn-primary">Explore Mais</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card card-dark">
                        <div class="card-header">Estudo do meio</div>
                        <div class="card-body">
                            <img src="images/mat.png" alt="" style="width: 1080px; height: 270px;">
                        </div>
                        <div class="card-footer">
                            <a href="explicacoes/Estudo do meio" class="btn btn-primary">Explore Mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="">
        <form action="" method="post">
            <label for="localidade">Encontre o explicador mais próximo de si.</label>
            <input id="localidade" class="input_search_localidade" type="text" name="localidade" placeholder = "Insira a disciplina desejada" autofocus list="list_disciplina"/>
            <datalist id="list_disciplina" class="resultado_nome_cliente">
                @foreach($disciplina as $discip)
                    <option value="{{ $discip->descricao }}" label="{{ $discip->descricao }}">
                @endforeach
            </datalist>
        </form>

        <div class="body-cidade">
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-dark">
                        <div class="card-header">Luanda</div>
                        <div class="card-body">
                            <img src="images/luanda.webp" alt="">
                        </div>
                        <div class="card-footer">
                            <a href="explicacoes/Luanda" class="btn btn-primary">Explore Mais</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-dark">
                        <div class="card-header">Lobito</div>
                        <div class="card-body">
                            <img src="images/luanda.webp" alt="">
                        </div>
                        <div class="card-footer">
                            <a href="explicacoes/Lobito" class="btn btn-primary">Explore Mais</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-dark">
                        <div class="card-header">Soyo</div>
                        <div class="card-body">
                            <img src="images/luanda.webp" alt="">
                        </div>
                        <div class="card-footer">
                            <a href="explicacoes/Soyo" class="btn btn-primary">Explore Mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>
    