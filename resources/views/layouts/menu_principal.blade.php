
  <style>
    /* ---* INICIO MENU *--- */
    .img_logo_header{
      width: 55px;
      border-radius: 50%;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 6px rgba(0, 0, 0, 0.19);
    }
    nav, .navigation_header{
      display: flex;
      flex-direction: row;
      align-items: center;
    }
    nav{
      background-color: #ddd;
      box-shadow: 1px 1px 4px #ddd;
      height: 5.5em;
      justify-content: space-between;
      padding: 0 10%;
    }
    .navigation_header{
      gap: 3em;
      z-index: 2;
    }
    .navigation_header a{
      text-decoration: none;
      color: black;
      transition: 1s;
      font-weight: bold;
      font-size: 14px 16px;
    }
    .navigation_header a:hover{
      text-decoration: underline;
      text-shadow: 2px 2px 8px black;
      text-size-adjust: 22px;
    }

    .dropdown:hover .dropdown-menu {
      display: block;
      margin-top: 0;
    }

    .btn_icon_header{
      background-color: transparent;
      border: none;
      cursor: pointer;
      color: white;
      display: none;
    }

    .FixoNoTopo{
      position: fixed;
      top: 0;
      width: 100%;
    }

    .content{
      text-align: center;
      padding-top: 5em;
      height: 100vh;
      transition: 1s;
    }

        /* Buttom Login and Register*/

    .header__nav__link--cta {
      -webkit-transition: all 0.3s ease;
      transition: all 0.3s ease;
      min-width: 10.9em;
      background-color: #3e868d;
      font-weight: 700;
      box-shadow: rgba(0 0 0 .2) 0 .3em .7em 0;
      padding: 1.4em 1.5em;
      border-radius: 1.5em;
    }

    .header__nav__link {
      margin-left: 1.363em;
      text-align: center;
      text-transform: uppercase;
      position: relative;
      text-decoration: none;
      font-size: 11px;
    }

    @media screen and (max-width: 768px){

      .btn_icon_header{
        display: block;
      }

      /* SideBar Menu */
      .navigation_header{
        position: absolute;
        flex-direction: column;
        top: 0;
        background-color: #ddd;
        height: 90%;
        width: 55vw;
        padding: 1em;
        animation-duration: 1s;
        margin-left: -100vw;
        position: fixed;
        
      }

      .navigation_header a{
        padding: 1.4em 1.5em;
        border-bottom: #be2623 1px solid;
      }

      .cabecalho{
        display: none;
      }

      .toggleButtonRegisterLogin{
        animation-duration: 1s;
        height: 11%;
        width: 100vw;
        background-color: black;
        position: absolute;
        flex-direction: row;
        top: 169vw;
        bottom: 0;
        left: 0;
        align-items: center;
      }

      .toggleButtonRegisterLogin a{
        text-decoration: none;
        border-radius: none;
        background-color: whitesmoke;
        font-size: 14px;
        bottom: 0;
      }


      @keyframes showSidebar {
        form {margin-left: -100vw;}
        form {margin-left: -10vw;}
      }
    }
  </style>

  <header>
    <div class="px-3 py-2 text-bg-dark">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none" :active="request()->routeIs('/')">
            <img src="images/favicon.png" alt = "Plataforma Academica" class="img_logo_header">
          </a>

          <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small" id="navigation_header">
            <li>
              <a href="/" class="nav-link text-secondary" :active="request()->routeIs('/')">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-houses d-block mx-auto mb-1" viewBox="0 0 16 16">
                  <path d="M5.793 1a1 1 0 0 1 1.414 0l.647.646a.5.5 0 1 1-.708.708L6.5 1.707 2 6.207V12.5a.5.5 0 0 0 .5.5.5.5 0 0 1 0 1A1.5 1.5 0 0 1 1 12.5V7.207l-.146.147a.5.5 0 0 1-.708-.708L5.793 1Zm3 1a1 1 0 0 1 1.414 0L12 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l1.854 1.853a.5.5 0 0 1-.708.708L15 8.207V13.5a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 4 13.5V8.207l-.146.147a.5.5 0 1 1-.708-.708L8.793 2Zm.707.707L5 7.207V13.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5V7.207l-4.5-4.5Z"/>
                </svg>
                Home
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-journal-bookmark d-block mx-auto mb-1" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M6 8V1h1v6.117L8.743 6.07a.5.5 0 0 1 .514 0L11 7.117V1h1v7a.5.5 0 0 1-.757.429L9 7.083 6.757 8.43A.5.5 0 0 1 6 8z"/>
                  <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                  <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                </svg>
                {{__('Apoio Académico')}}</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('explicacoes') }}" >Disciplinas</a></li>
                    <li><a class="dropdown-item" href="{{ route('preparatorio') }}">Preparatório</a></li>
                    <li><a class="dropdown-item" href="{{ route('inscricao') }}">{{__('Inscrição Universitária')}}</a> </li>
                </ul>
              
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" role="button" data-bs-toggle="dropdown">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-people d-block mx-auto mb-1" viewBox="0 0 16 16">
                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
                  </svg>
                  Colaboradores</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route ('parceiros') }}" >Parceiros</a></li>
                  <li><a class="dropdown-item" href="{{ route ('trabalhe_connosco') }}" >Trabalhe Connoscos</a></li>
                  <li><a class="dropdown-item" href="{{ route('view_recrutamento') }}">Recrutamento</a></li>
                </ul>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-newspaper d-block mx-auto mb-1" viewBox="0 0 16 16">
                  <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z"/>
                  <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"/>
                </svg>
                {{__('Anúncios')}}
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-info-circle d-block mx-auto mb-1" viewBox="0 0 16 16">
                  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                  <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                </svg>
                {{__('Ajuda')}}
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="px-3 py-2 border-bottom mb-3" style="background-color: #ddd;">
      <div class="container d-flex flex-wrap justify-content-center" >
        <form class="col-12 col-lg-auto mb-4 mb-lg-0 me-lg-auto" role="search">
          <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          @if (Route::has('login'))
            <div class="">
                @auth
                <div class="hidden sm:flex sm:items-center sm:ml-6">

                    <!-- Settings Dropdown -->
                    <div class="ml-3 relative fixed">
                        <x-jet-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                    <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                        <img class="h-8 w-8 rounded-full object-cover" src="storage/{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                    </button>
                                @else
                                    <span class="inline-flex rounded-md">
                                        <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                            {{ Auth::user()->name }}

                                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </button>

                                        <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                            
                                            <a href="https://laravel.bigcartel.com" class="ml-1">
                                                Loja
                                            </a>

                                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                            </svg>

                                        </button>
                                    </span>
                                @endif

                            </x-slot>

                            <x-slot name="content">
                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Configurações de Conta') }}
                                </div>

                                <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                    {{ __('Perfil') }}
                                </x-jet-dropdown-link>

                                <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                    {{ __('Contactos') }}
                                </x-jet-dropdown-link>

                                <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                    {{ __('Carteira') }}
                                </x-jet-dropdown-link>

                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                    <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                        {{ __('API Tokens') }}
                                    </x-jet-dropdown-link>
                                @endif

                                <div class="border-t border-gray-100"></div>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf

                                    <x-jet-dropdown-link href="{{ route('logout') }}"
                                            @click.prevent="$root.submit();">
                                        {{ __('Sair') }}
                                    </x-jet-dropdown-link>
                                </form>
                            </x-slot>
                        </x-jet-dropdown>
                    </div>
                </div>
                @else
                    <a href="{{ route('login') }}">
                      <button type="button" class="btn btn-light text-dark me-2">Login</button>
                    </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-primary text-navy">Regista-se </a>
                    @endif
                @endauth
            </div>
          @endif
        </div>
      </div>
    </div>
  </header>

<script>
  var header = document.getElementById('header');
  var navigatioHeader = document.getElementById('navigation_header');
  var content = document.getElementById('content');
  var showSidebar = false;

  var topoNav = header.offsetTop;

  function toggleSidebar(){
    showSidebar = !showSidebar;

    if (showSidebar) {
      navigatioHeader.style.marginLeft = '-10vw';
      navigatioHeader.style.animationName = 'showSidebar';
      content.style.filter = 'blur(3px)';
    } else {
      navigatioHeader.style.marginLeft = '-100vw';
      navigatioHeader.style.animationName = '';
      content.style.filter = '';
    }
  }

  function closeSidebar(){
    if(showSidebar){
      toggleSidebar();
    }
  }

  function fixar_menu() {  
    if (window.pageYOffset >= topoNav) {
      header.classList.add("FixoNoTopo");
    }else{
      header.classList.remove("FixoNoTopo");
    }
  }

  window.onscroll = function(){
    fixar_menu();
  }

  window.addEventListener('resize', function(event){
    if (window.innerHeight > 768 && showSidebar) {
      toggleSidebar();
    }
  })
</script>