@include('layouts.header')

<body style="background-color: #ddd;">
    <header class="header_section">
        <div class="container-fluid align-items-center">
            <h2>Repositório Academico de Angola</h2>
            <hr>
        </div>

    </header>
    <div class="hero background-light">
        <div class="row">
            <div class="col-10 push-1 no-pad l-col-12 l-no-push">
                <div class="hero-body" >
                    <h3>Partilhamos conhecimentos</h3>
                    <p></p>
                    
                    <form id="searchForm" action="" onsubmit="HostSearchGo();" method="post">

                        <label for="select_keywords">Tipo de Pesquisa</label>
                        <select name="" id="select_keywords">
                            <option value="keyword">Palavra-chave</option>
                            <option value="category">Categória</option>
                            <option value="title">Titulo</option>
                            
                            <option value="author">Autor</option>
                        </select>

                        <input id="ebscohostwindow" name="ebscohostwindow" type="hidden" value="1">
                        <input id="ebscohosturl" name="ebscohosturl" value="http://widgets.ebscohost.com/prod/customerspecific/ns000290/authentication/index.php?url=http://search.ebscohost.com/login.aspx?direct=true&amp;site=eds-live&amp;scope=site&amp;type=0&amp;mode=bool&amp;lang=pt-pt&amp;authtype=ip,guest,uid" type="hidden">
                        <input id="ebscohostsearchsrc" name="ebscohostsearchsrc" type="hidden" value="db">
                        <input id="ebscohostsearchmode" name="ebscohostsearchmode" type="hidden" value="+">
                        <input id="ebscohostkeywords" name="ebscohostkeywords" type="hidden" value="">
                        <input size="50" title="search_field" id="search_field" name="ebscohostsearchtext" value="" placeholder="indique o termo a pesquisar" type="search">
                        <input alt="procurar" title="procurar" value="Pesquisar" class="search-submit" type="submit">
                    </form>

                    <div class="hero-search-service">
                        <a href="/authentication/index.php">Serviço de Pesquisa	</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

<script>
    function HostSearchGo() {
        var category = $('select_keywords').val();
        var words = $('search_field').val();
        alert(words+' olá');
    }
</script>

@include('layouts.footer')