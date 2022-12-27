
<style>
    .conteiner{
        margin: none;
        background-color: #ddd;
        position: static;
    }

    img{
        width: 500px;
        height: 100%;
    }

    .body_disp{
        margin-left: 300px;
        margin-right: 300px;
    }

    .card_disp
    {
        position: static;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, 0.125);
        border-radius: 0.25rem;
        margin: 5px;
    }

    .input_search_disp{

        border: thick double #32a1ce;
        border-radius: 15px;
        margin-bottom: 20px;
        margin-top: 20px;
        width: 70%;
    }
</style>

<div class="conteiner">
    <!-- <img src="images/banner-educacao.png" alt="..."> -->

    <section class="body_disp">
        <header>
            <input id="procurar" onkeyup="myFunction()" class="input_search_disp" type="text" name="procurar" placeholder = "Insira a disciplina desejada" autofocus />
        </header>
        <div class="row row-cols-md-6">
            <ul id="myUL">
                @foreach($disciplina as $discip)
                <li >
                    <a href="#">{{ $discip->descricao }}</a>     
                </li>
                @endforeach
            </ul>
            @foreach($disciplina as $discip)
                <div class="col">
                    <div class="card_disp">
                        <img src="images/mat.png" class="card-img-top img-thumbnail" alt="..." style = "width: 340px;" />
                        <div class="card-body">
                            <h5 class="card-title">
                                <span>{{ $discip->descricao }}</span>
                            </h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <a href="explicacoes/{{ $discip->descricao }}" class="btn btn-primary">Explore Mais</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</div>

<script>
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("procurar");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>
    