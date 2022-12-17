@include('layouts.header')
<section>
    @include('layouts.menu')
</section>

<body class="enable-inview-animations">
    <div style="text-align:center;bottom:0;position:fixed;width:100%; z-index:1000;background-color:#D0D0D0;">

    </div>
    <!-- local start-->
    <div id="fb-root">

    </div>

    <div id="core" class="page-search-results">
        <div class="page-header" style="z-index: 1000;">
            <div class="container">
                <div class="page-header-inner">
                    <h1><span id="results-title">{{count($disciplinaID)}}</span> resultados para {{$DisciplinaDesc}} - Online</h1>
                </div>
            </div>
        </div>

        <div class="main-wrapper-container">
            <div class="container">
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-lg-8 push-lg-4">
                            <div class="properties-listing">
                                <div class="properties-listing-header clearfix">
                                    <div class="list-sorting">
                                        <h5>Ordenar por:</h5>
                                        <button data-order="1" class="button filter-order-btn" onclick="reorder(1);"><i class="fa fa-coin"></i> Preço</button>
                                        <button data-order="2" class="button filter-order-btn" onclick="reorder(2);"><i class="fa fa-map-marker"></i> Distancia</button>
                                        <button data-order="3" class="button filter-order-btn" onclick="reorder(3);"><i class="fa fa-star-o"></i> Reputação</button>
                                        <button data-order="0" class="button filter-order-btn active" onclick="reorder(0);"><i class="fa fa-thumbs-o-up"></i>Popularidade</button>
                                    </div>
                                </div>
                                <!-- *********** Bloco de Repetição (Início) -->
                                <ul id="results_list" class="custom-list clearfix property-list layout-list">
                                    <!-- -------------------** Repeti **--------------------- -->
                                    @foreach ($disciplinaID as $profs)
                                    <li class="property first-in-row odd">
                                        <a href="/explicacoes/{{$DisciplinaDesc}}/perfil/{{$profs->id}}">
                                            <div class="property-thumb">
                                                <img src="/storage/{{ $profs->profile_photo_path }}" width="250px" height="200px" alt="photo">
                                                <span class="overlay"><span><i class="fa fa-search"></i> Ver Perfil</span></span>
                                            </div>

                                            <div class="property-content">
                                                <h4 class="property-title">{{ $profs->name }} {{ $profs->surname }} <span class="small">(Explicador)</span></h4>
                                                <h6 class="property-location">{{ $profs->provincie }}, {{ $profs->description_city }}/Bairro <span class="small"></span></h6>
                                                <p class="property-subjects">Explicações de Matemática (3 ciclo)</p>
                                                <p class="property-description">{{ $profs->descricao }}</p>
                                                <div class="property-price-rating">
                                                    <div class="property-price"><strong>{{ $profs->preco }} kz </strong> / hora</div>
                                                    <div class="property-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <span class="rating_number">{{ $profs->reputacao }}</span>
                                                    </div>
                                                    <button class="button submit-btn search-profile-button"><i class="fa fa-search"></i> Ver Perfil</button>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    @endforeach
                                    <!-- -------------------** /.Repeti **--------------------- -->
                                    <div class="properties-listing-footer clearfix">
                                        <div class="default-form">
                                            <span class="select-box">
                                                <select name="listing-pagination">
                                                    <option value="?" data-page="1">Pgina 1</option>
                                                    <option value="?" data-page="2">Pgina 2</option>
                                                    <option value="?" data-page="3">Pgina 3</option>
                                                    <option value="?" data-page="4">Pgina 4</option>
                                                    <option value="?" data-page="5">Pgina 5</option>
                                                    <option value="?" data-page="6">Pgina 6</option>
                                                    <option value="?" data-page="7">Pgina 7</option>
                                                    <option value="?" data-page="8">Pgina 8</option>
                                                    <option value="?" data-page="9">Pgina 9</option> 
                                                </select>
                                            </span>
                                        </div> 
                                    </div>
                                </ul>           
                            </div>
                        </div>

                        <div class="col-lg-4 pull-lg-8">
                            <aside class="properties-search">
                                <h3 class="properties-search-title">Filtros</h3>
                                <div class="properties-search-basic">
                                    <form id="properties-search-form" class="default-form" action="#" onsubmit="return urlBuilder( 'properties-search-form' );" method="get">
                                        <p class="search-input"><input id="search-subject" type="text" name="disciplina" placeholder="&#61442;" value=""></p>
                                        <p id="location_filter" class="search-input"><input id="search-location" type="text" name="local" placeholder="&#61461;" value=""></p>
                                        <p class="search-input textalign-center">
                                            <span class="radio-input">
                                                <input id="filter_personal" name="type" type="radio" checked data-event="personal">
                                                <label for="filter_personal">Presencial</label>
                                            </span>
                                            <span class="radio-input">
                                                <input id="filter_online" name="type" type="radio" data-event="online">
                                                <label for="filter_online">Online</label>
                                            </span>
                                        </p>
                                        <p class="form-row">
                                            <button class="button submit-btn center margin-top-lg"><i class="fa fa-search"></i> Procurar</button>
                                        </p>
                                    </form>
                                </div>
                                <hr class="form-divider">

                                <div class="properties-search-filter">
                                    <form class="default-form" action="">
                                        <h4 class="filter-title">Principais Filtros</h4>

                                        <div class="additional-filter toggle-container">
                                            <h5 class="toggle-title">Grau de Escolaridade</h5>
                                            <div class="toggle-content">
                                                <ul id="levels-selector" class="custom-list additional-filter-list darker-primary-color padding-left-md">
                                                    <li>
                                                        <span class="checkbox-input">
                                                            <input type="checkbox" id="level-1" checked>
                                                            <label for="level-1">Basico</label>
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="checkbox-input">
                                                            <input type="checkbox" id="level-2" >
                                                            <label for="level-2">Secundrio</label>
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="checkbox-input">
                                                            <input type="checkbox" id="level-3">
                                                            <label for="level-3">Universidade</label>
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="checkbox-input">
                                                            <input type="checkbox" id="level-4">
                                                            <label for="level-4">Extracurricular</label>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="price-filter toggle-container">
                                            <h5 class="toggle-title">Por Preço / Hora</h5>
                                            <div class="toggle-content">
                                                <div class="slider-range-container">
                                                    <div class="slider-range" data-max="5000" data-step="500" data-default-max="5000" data-currency=""></div>
                                                    <div class="clearfix">
                                                        <input id="price-max" type="text" class="range-to" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="distance-filter" class="price-filter toggle-container">
                                            <h5 class="toggle-title">Por Distncia</h5>
                                            <div class="toggle-content">
                                                <div class="slider-range-container">
                                                    <div class="slider-range" data-max="30" data-step="1" data-default-max="10" data-currency="km"></div>
                                                    <div class="clearfix">
                                                        <input id="distance-max" type="text" class="range-to" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
 
                                        <div class="price-filter filter-inverted toggle-container">
                                            <h5 class="toggle-title">Por Reputação</h5>
                                            <div class="toggle-content">
                                                <div class="slider-range-container">
                                                    <div class="slider-range" data-min="1" data-max="5" data-step="1" data-default-min="1" data-currency="&#61446;"></div>
                                                    <div class="clearfix">
                                                        <input id="rating-min" type="text" class="range-to" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- ******************** ---- Footer ---- ***************************** -->

<!-- ******************** ---- ./ Footer ---- ***************************** -->
 <div class="container-fluid bg-dark pt-5 px-sm-3 px-md-5 mt-5">
        <div class="row py-4">
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Encontre-nos</h5>
                <p class="font-weight-medium"><i class="fa fa-map-marker-alt mr-2"></i>Sequele, Luanda, Angola</p>
                <p class="font-weight-medium"><i class="fa fa-phone-alt mr-2"></i>+244 942 547440</p>
                <p class="font-weight-medium"><i class="fa fa-envelope mr-2"></i>pacangola@gmail.com</p>
                <h6 class="mt-4 mb-3 text-white text-uppercase font-weight-bold">Siga-nos nas redes sociais</h6>
                
                <div class="d-flex justify-content-start">
                    
                    
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="https://www.facebook.com/WikLinksAngola"><i class="fab fa-facebook-f"></i></a>
                    
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="https://www.linkedin.com/in/paca-angola-5aa40b253/"><i class="fab fa-linkedin-in"></i></a>
                    
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="https://www.instagram.com/pacangola/"><i class="fab fa-instagram"></i></a>
                    
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    
                    
                    
                    <a class="btn btn-lg btn-secondary btn-lg-square" href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Links Novidades</h5>
                <div class="mb-3">
                    <div class="mb-2">
                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="https://faa.ao/">Academia Naval</a>
                        <a class="text-body" href="https://faa.ao/mga/academia_naval"><small>Jan 01, 2022</small></a>
                    </div>
                    <a class="small text-body text-uppercase font-weight-medium" href="">Abertura do ano académico 2022/2023 com ingresso de novos cadetes...</a>
                </div>
                <div class="mb-3">
                    <div class="mb-2">
                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="https://faa.ao/">Academia Exército</a>
                        <a class="text-body" href="https://faa.ao/"><small>Jan 01, 2022</small></a>
                    </div>
                    <a class="small text-body text-uppercase font-weight-medium" href="https://faa.ao/">Abertura do ano académico 2022/2023 com ingresso de novos cadetes...</a>
                </div>
                <div class="">
                    <div class="mb-2">
                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="https://faa.ao/">Academia Fan</a>
                        <a class="text-body" href="https://faa.ao/"><small>Jan 01, 2022</small></a>
                    </div>
                    <a class="small text-body text-uppercase font-weight-medium" href="https://faa.ao/">Abertura do ano académico 2022/2023 com ingresso de novos cadetes...</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Categorias</h5>
                <div class="m-n1">
                    <a href="" class="btn btn-sm btn-secondary m-1">Marinha</a>
                    <a href="" class="btn btn-sm btn-secondary m-1">Comunicação</a>
                    <a href="" class="btn btn-sm btn-secondary m-1">Politica</a>
                    <a href="" class="btn btn-sm btn-secondary m-1">Negocios</a>
                    <a href="" class="btn btn-sm btn-secondary m-1">Treinamento</a>
                    <a href="" class="btn btn-sm btn-secondary m-1">Filosofia</a>
                    <a href="" class="btn btn-sm btn-secondary m-1">Projectos</a>
                    <a href="" class="btn btn-sm btn-secondary m-1">Monografia</a>
                    <a href="" class="btn btn-sm btn-secondary m-1">Leitura</a>
                    <a href="" class="btn btn-sm btn-secondary m-1">Cinéma</a>
                    <a href="" class="btn btn-sm btn-secondary m-1">Orientação</a>
                    <a href="" class="btn btn-sm btn-secondary m-1">Explicação</a>
                    <a href="" class="btn btn-sm btn-secondary m-1">Automação</a>
                    <a href="" class="btn btn-sm btn-secondary m-1">Navegação</a>
                    <a href="" class="btn btn-sm btn-secondary m-1">Sociologia</a>
                    <a href="" class="btn btn-sm btn-secondary m-1">Direito</a>
                    <a href="" class="btn btn-sm btn-secondary m-1">Psicologia</a>
                    <a href="" class="btn btn-sm btn-secondary m-1">Saúde</a>
                    <a href="" class="btn btn-sm btn-secondary m-1">Arte</a>
                    <a href="" class="btn btn-sm btn-secondary m-1">Ciência</a>
                    <a href="" class="btn btn-sm btn-secondary m-1">Engenharia</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Nosso Team</h5>
                <div class="row">
                    <div class="col-4 mb-3">
                        <a href=""><img class="w-100" src="images/CEO WIK.jpeg" alt=""></a>
                    </div>
                    <div class="col-4 mb-3">
                        <a href=""><img class="w-100" src="img/news-110x110-2.jpg" alt=""></a>
                    </div>
                    <div class="col-4 mb-3">
                        <a href=""><img class="w-100" src="img/news-110x110-3.jpg" alt=""></a>
                    </div>
                    <div class="col-4 mb-3">
                        <a href=""><img class="w-100" src="img/news-110x110-4.jpg" alt=""></a>
                    </div>
                    <div class="col-4 mb-3">
                        <a href=""><img class="w-100" src="img/news-110x110-5.jpg" alt=""></a>
                    </div>
                    <div class="col-4 mb-3">
                        <a href=""><img class="w-100" src="img/news-110x110-1.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4 px-sm-3 px-md-5" style="background: #111111;">
        <p class="m-0 text-center">&copy; <a href="#">P.A.C.A</a>
	
		Plataforma Académica & Ciêntífica de Angola <a href="https://www.paca.ao/public"></a></p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-square back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>


    </body>

    <!-- bootstrap js -->
    <script src=" {{ asset('js/bootstrap.js') }}"></script>

    <!-- custom js -->
    <script src=" {{ asset('js/custom.js') }}"></script>
    <script src=" {{ asset('e_js/4007fdd540.js') }}"></script>
    <script type="text/javascript" src=" {{ asset('e_js/5038-analytics-analytics.js') }}"></script>
    <script defer src=" {{ asset('e_js/6314-js-fontawesome-all.js') }}"></script>
    <script defer src=" {{ asset('e_js/8315-js-fa-v4-shims.js') }}"></script>
    <script src="{{ asset('e_js/1772-js-modernizr.custom.17475.js') }}"></script>
    <script src=" {{ asset('e_js/1.12.4-jquery.min.js') }}"></script>
    <script src=" {{ asset('e_js/2980-newjs-jquery-ui.min.js') }}"></script>
    <script src=" {{ asset('e_js/0.2.3-jquery.ui.touch-punch.min.js') }}"></script>
    <script src=" {{ asset('e_js/js-bootstrap.min.js') }}" integrity="sha256-+h0g0j7qusP72OZaLPCSZ5wjZLnoUUicoxbvrl14WxM= sha512-0z9zJIjxQaDVzlysxlaqkZ8L9jh8jZ2d54F3Dn36Y0a8C6eI/RFOME/tLCFJ42hfOxdclfa29lPSNCmX5ekxnw==" crossorigin="anonymous"></script>
    <script src=" {{ asset('e_js/dependencies-casa_magnific-popup.min.js') }}"></script>
    <script src=" {{ asset('e_js/dependencies-casa_inview.min.js') }}"></script>
    <script src=" {{ asset('e_js/dependencies-casa_outside_events.min.js') }}"></script>
    <script src=" {{ asset('e_js/casa-elements.js') }}"></script>
    <script src=" {{ asset('e_js/casa-general.js') }}"></script>
    <script src=" {{ asset('e_js/casa-navbar.js') }}"></script>
    <script src=" {{ asset('e_js/casa-home.js') }}"></script>
    <script src=" {{ asset('e_js/casa-search.js') }}"></script>
    <script src=" {{ asset('e_js/casa-profile.js') }}"></script>
    <script src=" {{ asset('e_js/709-newjs-global.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src=" {{ asset('e_js/9718-js-jquery.md5.js') }}"></script>
    <script type="text/javascript" src=" {{ asset('e_js/5433-js-selectnav.js') }}"></script>
    <script type="text/javascript" src=" {{ asset('e_js/2126-js-shortcodes.js') }}"></script>
    <script type="text/javascript" src=" {{ asset('e_js/4595-js-tooltip.js') }}"></script>
    <script type="text/javascript" src=" {{ asset('e_js/4543-js-effects.js') }}"></script>
    <script type="text/javascript" src=" {{ asset('e_js/3879-js-ajaxsbmt.js') }}"></script>
    <script type="text/javascript" src=" {{ asset('e_js/6313-js-jquery.bxslider.min.js') }}"></script>
    <script src=" {{ asset('e_js/js-platform.js') }}" async defer>
                {
                    lang: 'pt-PT'
                }
            </script>
    <script src=" {{ asset('e_js/recaptcha-api.js') }}" async defer></script>
    
    <script type="text/javascript">
        $ ( document ).ready ( function () {
            $ ( ".expander" ).hide ();
            $ ( "h2.expand_heading" ).toggle ( function () {
                $ ( this ).addClass ( "active" );
            } , function () {
                $ ( this ).removeClass ( "active" );
            } );
            $ ( "h2.expand_heading" ).click ( function () {
                $ ( this ).next ( ".expander" ).slideToggle ( "slow" );
            } );
            $ ( ".expand_all" ).toggle ( function () {
                $ ( this ).addClass ( "expanded" );
            } , function () {
                $ ( this ).removeClass ( "expanded" );
            } );
            $ ( ".expand_all" ).click ( function () {
                $ ( ".expander" ).slideToggle ( "slow" );
            } );
        } );
    </script>

    <script>
        (function ( d , s , id ) {
            var js , fjs = d.getElementsByTagName ( s )[ 0 ];
            if ( d.getElementById ( id ) )
            {
                return;
            }

            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/pt_PT/sdk.js#xfbml=1&version=v2.6&appId=182887881841566";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <script type="text/javascript">
        window.$zopim || (function ( d , s ) {
            var z = $zopim = function ( c ) {
                z._.push ( c )
            } , $ = z.s = d.createElement ( s ) , e = d.getElementsByTagName ( s )[ 0 ];
            z.set                                   = function ( o ) {
                z.set._.push ( o )
            };
            z._                                     = [];
            z.set._                                 = [];
            $.async                                 = !0;
            $.setAttribute ( 'charset' , 'utf-8' );
            $.src  = '//v2.zopim.com/?3F1cFbYl1SmjIi1aIFHct5Aot3VymVV5';
            z.t    = +new Date;
            $.type = 'text/javascript';
            e.parentNode.insertBefore ( $ , e )
        }) ( document , 'script' );

        // Sets theme colour
        $zopim ( function () {
            var primaryColor = $ ( '#header_search input[name=disciplina]' ).css ( 'color' );
            $zopim.livechat.theme.setColor ( rgb2hex ( primaryColor ) );
            $zopim.livechat.theme.reload ();
        } );

        // Hides by default
        $zopim ( function () {
            $zopim.livechat.window.hide ();
        } );
    </script>

    <!-----banner-->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-54812322-1', 'auto');
            ga('send', 'pageview' );

    </script>
    <!---banner-->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq)return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq)f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window,
            document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');

        fbq('init', '843600215713694');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none" src="">
    </noscript>

</html>
