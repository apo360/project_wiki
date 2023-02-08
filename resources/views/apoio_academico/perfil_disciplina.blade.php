<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="UTF-8">
    <!-- Mobile Metas -->
    <meta http-equiv = "X-UA-Compatible" content = "IE-edge" />
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Site Metas -->
    <link rel="icon" href="images/favicon.png" type="image/gif" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>{{ config('app.name', 'Plataforma Académica') }}</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />

    <!-- owl carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />

    <!-- font awesome style -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
    
    <!-- font Perfil Disciplina style -->
    <link href="{{ asset('css/perfil_disciplina.css') }}" rel="stylesheet" />

    <style>
        .container{
            display: flex;
            justify-content: space-evenly;
            flex-wrap: wrap;
            background-color: #fff;
            box-shadow: 0px 20px 30px -10px rgba(0,0,0,0.1);
        }
        
        .body-template{
            display: block;
            flex-direction: column;
        }
        
        .cards{
            display: flex;
            width: 100%;
            margin-bottom: 20px;
        }
        
        
        /*
        .card-left{
            width: 300px;
                height: 460px;
                margin: 25px;
                background-color: #fff;
                border-radius: 20px;
                overflow: hidden;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.7);
                transition: 0.3s;
        }*/
        
        .cards .card-left{
            justify-content: center;
            align-items: center;
            height: 290px;
            background-color: #fff;
            border-radius: 4px;
            box-shadow: 0px 20px 30px -10px rgba(0,0,0,0.1);
            max-width: 300px;
            min-width: 280px;
            overflow: hidden;
            display: flex;
            align-items: center;
            flex-direction: column;
            position: relative;
            transition: all .4s ease;
            margin: 0;
        }
        
        .cards .card-right{
            height: 290px;
            max-width: 550px;
            min-width: 530px;
            border: 0;
            box-shadow: 0px 20px 30px -10px rgba(0,0,0,0.1);
            transition: all .4s ease;
        }
        
        .cards .card-left:before{
            height: 150px;
            width: calc(100% + 100px);
            content: "";
            position: absolute;
            background-image: linear-gradient(to top, #000 0%, #04befe 100%);
            border-radius: 4px 4px 100% 100%;
            transition: all .4s ease-out;
            top: 0;
        }
        
        .cards .card-left article{
            z-index: 2;
            display: flex;
            align-items: center;
            flex-direction: column;
            text-align: center;
        }
        
        .cards .card-left article h5{
            color: #fff;
            margin: 0;
            padding: 20px 0px 5px 0px;
            font-weight: 10px;
            letter-spacing: .5px;
        }
        
        .card-right .card-footer{
            margin-top: 5px;
            text-align: center;
            background-color: #000;
        }
            
        .card-right .card-footer a{
            color: #fff;
            display: block;
            text-decoration: none;
            font-family: sans-serif;
            font-weight: 600;
        }
        
        .cards .card-left article .title{
            color: #fff;
            padding: 5px 20px;
            letter-spacing: .8px;
            transition: all .4s ease;
        }
        
        .cards .card-left article .pic{
            width: 80px;
            height: 80px;
            overflow: hidden;
            border-radius: 100%;
            margin: 20px 0;
            box-shadow: 0px 0px 0px 0px rgba(255, 255, 255, 0.3);
            transition: all .6s ease;
        }
        
        .cards .card-left article .pic img{
            width: 100%;
        }
        
        .cards .card-left article .text{
            padding: 5px 15px;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.5;
            word-spacing: 1px;
            text-align: center;
            color: #666;
            height: 90px;
            transition: all .4s ease-out;
        }
        
        .cards .card-left:hover .text{
            color: #fff;
        }
        
        .cards .card-left:hover{
            transform: transtateY(-10px);
            box-shadow: 0px 5px 10px -5px rgba(0,0,0,.3);
        }
        
        .cards .card-left:hover:before{
            height: 100%;
            border-radius: 4px;
        }
        
        .cards .card-left:hover .pic{
            box-shadow: 0px 0px 0px 8px rgba(0,0,0,.3);
        }
        
    </style>
  </head>

<body >
    
    <!-- Inicio do Header (Cabeçalho e Menu) -->
    <header class="">  <!-- fixed-top -->
      <!-- header section strats -->
      <!-- end header section -->
    </header>
    <!-- Fim do Header (Cabeçalho e Menu) -->
    
    <div class = "container">
        
        <!-- Para filtros (filter)-->
        <div class = "filters">
            <span>Filtros</span>
            <div class = "header-filter">
                <input type = "text" class = "" name = "search-filter" placeholder = "Pesquisar por Nome...">
                <button class = "btn btn-secondary">Procurar</button>
            </div>
            <div class = "body-filter">
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
                
                <div class="escola-filter">
                    <h5 class="toggle-title">Grau de Escolaridade</h5>
                    <div class="toggle-content">
                        <ul id="levels-selector" class="">
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
                
            </div>
        </div>
        
        <div class = "body-template">
            
            <div class="page-header-inner">
                <h1><span id="results-title">
                    @if (is_countable($disciplinaID) && count($disciplinaID) > 0)
                       {{ count($disciplinaID) }}
                    @else
                        Sem
                    @endif
                    </span> resultados para {{$DisciplinaDesc}} - Online
                </h1>
            </div>
            
            <div class = "23udns">
                <ul>
                    @foreach ($disciplinaID as $profs)
                        <li>
                            <div class = "cards">
                                
                                <div class = "card-left">
                                    <article>
                                        <h5>{{ $profs->surname}}</h5>
                                        <div class = "title"> {{ __('Explicador') }}</div>
                                        <div class = "pic">
                                            <img src="{{asset('profile_images/'.$profs->profile_photo_path)}}">
                                        </div>
                                        <div class = "text">
                                            <p>{{ $profs->descricao}}</p>
                                            {{ $profs->formacao_academica}}
                                        </div>
                                    </article>
                                </div>
                                
                                <div class = "card card-right">
                                    <div class = "card-header">
                                        {{ $profs->provincie}} / {{ $profs->description_city}}
                                    </div>
                                    <div class = "card-body">
                                        <span class = "text">
                                            {{ $profs->descricao_professor}}
                                        </span> <br>
                                        {{ $profs->preco}}<br>
                                        {{ $profs->reputacao}}<br>
                                        {{ $profs->isonline}}
                                    </div>
                                    <div class = "card-footer">
                                        <a href = "../perfil/{{$profs->id}}"> Ver Perfil</a>
                                    </div>
                                </div>
                                
                            </div>
                        </li>
                    @endforeach
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
        
    </div>
    
    teste------------------------------
<!-- ******************** ---- Footer ---- ***************************** -->

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
