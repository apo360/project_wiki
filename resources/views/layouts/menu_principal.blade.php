
  <style>
    *{
      margin: 0;
      padding: 0;
    }
    body{
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }
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

</head>

<body>
  
  <header>
    <div class="px-3 py-2 text-bg-dark">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none" :active="request()->routeIs('/')">
            <img src="images/favicon.png" alt = "Plataforma Academica" class="img_logo_header">
          </a>

          <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
            <li>
              <a href="#" class="nav-link text-secondary">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#home"/></svg>
                Home
              </a>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#speedometer2"/></svg>
                {{__('Apoio Académico')}}
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('explicacoes') }}" >Disciplinas</a></li>
                    <li><a class="dropdown-item" href="{{ route('preparatorio') }}">Preparatório</a></li>
                    <li><a class="dropdown-item" href="{{ route('inscricao') }}">{{__('Inscrição Universitária')}}</a> </li>
                </ul>
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#table"/></svg>
                {{__('Colaboradores')}}
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#grid"/></svg>
                Products
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#people-circle"/></svg>
                Customers
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="px-3 py-2 border-bottom mb-3">
      <div class="container d-flex flex-wrap justify-content-center">
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
                        <a href="{{ route('register') }}" class="btn btn-primary text-navy">Register </a>
                    @endif
                @endauth
            </div>
          @endif
        </div>
      </div>
    </div>
  </header>

  <nav class="" id="header">

    <button class="btn_icon_header" onclick="toggleSidebar()">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
      </svg>
    </button>

    <div class="logo_header">
      <a class="navbar-brand" href="/" :active="request()->routeIs('/')">
        <img src="images/favicon.png" alt = "Plataforma Academica" class="img_logo_header">
      </a>
    </div>

    <div class="navigation_header " id="navigation_header">

      <button class="btn_icon_header" onclick="toggleSidebar()">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chevron-double-left" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M8.354 1.646a.5.5 0 0 1 0 .708L2.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
          <path fill-rule="evenodd" d="M12.354 1.646a.5.5 0 0 1 0 .708L6.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
        </svg>
      </button>

      <a href="/" :active="request()->routeIs('/')" > Home </a>

      <a class="nav-link dropdown dropdown-toggle" role="button" data-bs-toggle="dropdown"> <i class="fa fa-graduation-cap"> </i> {{__('Apoio Académico')}}
        <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ route('explicacoes') }}">Disciplinas</a>
            <a class="dropdown-item" href="{{ route('preparatorio') }}">Preparatório</a>
            <a class="dropdown-item" href="{{ route('inscricao') }}">{{__('Inscrição Universitária')}}</a>
        </div>
      </a>

      <a class="nav-link dropdown dropdown-toggle" role="button" data-bs-toggle="dropdown"> <i class="fa fa-users"> </i>{{__('Colaboradores')}}
        <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ route ('parceiros') }}" >Parceiros</a>
            <a class="dropdown-item" href="{{ route ('trabalhe_connosco') }}" >Trabalhe Connoscos</a>
            <a class="dropdown-item" href="{{ route('view_recrutamento') }}">Recrutamento</a>
        </div>
      </a>
      <a href="#">{{__('Anúncios')}}</a>
      <a href="#" class="">{{__('Ajuda')}}</a>
    </div>
  </nav>
  
</body>

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