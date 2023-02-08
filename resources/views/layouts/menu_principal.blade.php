
<style>
    
    @media screen and (min-width: 767px){
        .fab button, ul{
            display: none;
        }
    }
    
    /* ---* INICIO MENU *--- */
    .img_logo_header{
      width: 55px;
      border-radius: 50%;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 6px rgba(0, 0, 0, 0.19);
    }
    .list-buttom-svg{
        display: none;
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
    
    /* Telas Mobile */
    @media screen and (max-width: 767px){
        
        .menu_princ{
            display: none;
        }
          
        .fab{
          position: fixed;
          bottom:10px;
          right:10px;
          
        }
        
        .fab button{
          cursor: pointer;
          width: 48px;
          height: 48px;
          border-radius: 30px;
          background-color: navy;
          border: none;
          box-shadow: 0 1px 5px rgba(0,0,0,.4);
          font-size: 24px;
          color: white;
            
          -webkit-transition: .2s ease-out;
          -moz-transition: .2s ease-out;
          transition: .2s ease-out;
        }
        
        .fab button:focus{
          outline: none;
        }

        .fab button.main{
          position: absolute;
          width: 60px;
          height: 60px;
          border-radius: 30px;
          background-color: #5b19b7;
          right: 0;
          bottom: 0;
          z-index: 20;
          line-height: 2.6em;
          text-align: center;
        }
        
        .fab button.main:before{
          content: '⏚';
        }
        
        .fab ul{
          position:absolute;
          bottom: 0;
          right: 0;
          padding:0;
          padding-right:5px;
          margin:0;
          list-style:none;
          z-index:10;
          
          -webkit-transition: .2s ease-out;
          -moz-transition: .2s ease-out;
          transition: .2s ease-out;
        }

        .fab ul li{
          display: flex;
          justify-content: flex-end;
          position: relative;
          margin-bottom: -10%;
          opacity: 0;
          
          -webkit-transition: .3s ease-out;
          -moz-transition: .3s ease-out;
          transition: .3s ease-out;
        }
        
        .fab ul li label{
          margin-right:10px;
          white-space: nowrap;
          display: block;
          margin-top: 10px;
          padding: 5px 8px 10px;
          background-color: #333333;
        box-shadow: 0 1px 3px rgba(0, 0, 0, .2);
        border-radius: 3px;
        height: 18px;
        font-size: 12px;
        pointer-events: none;
        opacity: 1;
        -webkit-transition: .2s ease-out;
        -moz-transition: .2s ease-out;
        transition: .2s ease-out;
        color: white;
        }
        
        .fab.show button.main, .fab.show button.main{
          outline: none;
          color: white;
          box-shadow: 0 3px 8px rgba(0,0,0,.5);
         }
         
        .fab.show button.main:before, .fab.show button.main:before{
          content: '↑';
        }

        .fab.show button.main + ul, .fab.show button.main + ul{
          bottom: 70px;
        }
        
        .fab.show button.main + ul li, .fab.show button.main + ul li{
          margin-bottom: 10px;
          opacity: 1;
          display: flex;
    justify-content: flex-end;
        }
        
        .fab.show button.main + ul li:hover label,
        .fab.show button.main + ul li:hover label{
          opacity: 1;
        }
    }
    
    /* ----------- Menu Sidebar --------- */
    
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        /*overflow-y: hidden;*/
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

  </style>

<header class = "menu_princ">
    <!-- ******************************* Menu ****************************** -->
    <div class="px-3 py-2 text-bg-dark">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none" :active="request()->routeIs('/')">
            <img src="images/logo.png" alt = "Plataforma Academica" class="img_logo_header">
          </a>
          
          <buttom class = "list-buttom-svg">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-ul" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
              </svg>
          </buttom>

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

            <li>
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
                    @endauth
                </div>
              @endif
            </li>

          </ul>
        </div>
      </div>
    </div>
    <!-- ************************************ Menu ************************************** -->

    <!--  -->
    
          @if (Route::has('login'))
            @auth
              <input type="hidden" name="">
            @else
              <div class="px-3 py-2 border-bottom mb-3" style="background-color: #ddd;">
                <div class="container d-flex flex-wrap justify-content-center" >
                  <form class="col-12 col-lg-auto mb-4 mb-lg-0 me-lg-auto" role="search" method = "get" action = "{{ route('search') }}">
                    <input type="search" class="form-control" placeholder="Pesquisa a Disciplina..." aria-label="Search" list = "disp_list" name = "procurar" id = "procurar">
                    <datalist id = "disp_list">
                        @foreach(App\Models\Disciplinas::all() as $discip)
                            <option value="{{ $discip->descricao }}" label="{{ $discip->descricao }}">
                        @endforeach
                    </datalist>
                  </form>
                  <div class="text-end">
                    <div class="">
                      <a href="{{ route('login') }}" class="btn btn-light text-dark me-2"> Login </a>
                      @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-primary text-navy">Regista-se </a>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
            @endauth
          @endif
    <!--  -->

</header>
  
<div class="fab">
    
  <button class="main"></button>
  
  <ul>
    <li>
        <label for="opcao1">Disciplinas</label> <!-- Menus -->
        <a href="{{ route('explicacoes') }}" >
            <button id="opcao1" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarLight" aria-controls="offcanvasNavbarLight">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-ul" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                </svg>
              </button>
        </a>
    </li>
    
    <li>
      <label for="opcao2">Login</label> <!-- Login -->
      <button id="opcao2">
          <a href="{{ route('login') }}">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg>
          </a>
      </button>
    </li>
    
    <li>
      <label for="opcao3">Recrutamento</label> <!-- Register -->
      <button id="opcao3">
          <a href="{{ route('register') }}">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16">
                  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                  <path d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z"/>
                </svg>
          </a>
      </button>
    </li>
    
    <li>
      <label for="opcao4">Contacto</label> <!-- Contact -->
      <button id="opcao4">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-inbound-fill" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v2.793L15.146.146a.5.5 0 0 1 .708 0z"/>
        </svg>
      </button>
    </li>
    
    <li>
      <label for="opcao5">Encontre</label> <!-- location -->
      <button id="opcao5">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
          <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
        </svg>
      </button>
    </li>
    
  </ul>
</div>

<script>

    function toggleFAB(fab){
    	if(document.querySelector(fab).classList.contains('show')){
      	document.querySelector(fab).classList.remove('show');
      }else{
      	document.querySelector(fab).classList.add('show');
      }
    }

    document.querySelector('.fab .main').addEventListener('click', function(){
    	toggleFAB('.fab');
    });
    
    document.querySelectorAll('.fab ul li button').forEach((item)=>{
    	item.addEventListener('click', function(){
    		toggleFAB('.fab');
    	});
    })
    
</script>