
  <nav class="navbar navbar-expand-lg custom_nav-container" style = "background-color: #ddd; padding: 0px;">
      <div class="container-fluid">
          <a class="navbar-brand" href="/" :active="request()->routeIs('/')">
            <img src="images/logo.png" alt = "Plataforma Academica" style="width:50px;" class="rounded-pill">
          </a>

          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
            
            <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
                <ul class="navbar-nav" id = "mySidebar">
                    <li class="nav-item">
                        <a class="nav-link" href="#"> <i class='fa fa-home'></i> Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">
                          <i class="fa fa-graduation-cap"> </i> {{__('Apoio Académico')}}</a>
                        <ul class="dropdown-menu">
                            <!-- <li class="dropdown-item"> <a href="apoio_academico">{{__('Info')}} </a> </li> -->
                            <li><a class="dropdown-item" href="{{ route('explicacoes') }}" >Disciplinas</a></li>
                            <!-- <li><a class="dropdown-item" href="/apoio_academico/academico">Acompanhamento de Estudo</a></li> -->
                            <li><a class="dropdown-item" href="{{ route('preparatorio') }}">Preparatório</a></li>
                            <li><a class="dropdown-item" href="{{ route('inscricao') }}">{{__('Inscrição Universitária')}}</a> </li>
                            <!-- <li><a class="dropdown-item" href="/apoio_academico/formacoes">Formações</a></li> -->
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Biblioteca</a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">Colaboradores</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route ('parceiros') }}" >Parceiros</a></li>
                            <li><a class="dropdown-item" href="{{ route ('trabalhe_connosco') }}" >Trabalhe Connoscos</a></li>
                            <li><a class="dropdown-item" href="{{ route('view_recrutamento') }}">Recrutamento</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Anúncios</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Notícias</a></li>
                        </ul>
                    </li>
                    
                </ul>
                <div class = "">
                  @if (Route::has('login'))
                    <div class="hidden top-0 right-0 px-6 py-4 sm:block">
                        @auth
                        <div class="hidden sm:flex sm:items-center sm:ml-6">

                            <!-- Settings Dropdown -->
                            <div class="ml-3 relative fixed">
                                <x-jet-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                            <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                                <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
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
                            <a href="{{ route('login') }}" class="text-sm text-gray-400 dark:text-gray-200 underline header__nav__link--cta header__nav__link">
                                Entrar <i class="fa fa-user" aria-hidden="true"></i>
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-400 dark:text-gray-200 underline header__nav__link--cta header__nav__link">
                                  Register <i class="fa fa-lock" aria-hidden="true"></i> 
                                </a>
                            @endif
                        @endauth
                    </div>
                  @endif
                </div>
            </div>
            
        </div>
      </nav>
  </div>

  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <hr>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Apoio Académico</a>
                <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                    <!-- <li class="dropdown-item"> <a href="apoio_academico">{{__('Info')}} </a> </li> -->
                    <li><a class="dropdown-item" href="{{ route('explicacoes') }}" >Explicações</a></li>
                    <!-- <li><a class="dropdown-item" href="/apoio_academico/academico">Acompanhamento de Estudo</a></li> -->
                    <li><a class="dropdown-item" href="{{ route('preparatorio') }}">Preparatório</a></li>
                    <li><a class="dropdown-item" href="{{ route('inscricao') }}">{{__('Inscrição Universitária')}}</a> </li>
                    <!-- <li><a class="dropdown-item" href="/apoio_academico/formacoes">Formações</a></li> -->
                    <li> <hr class="dropdown-divider"> </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Bibliotecas</a>
            </li>
            <li class="nav-item dropdown"> 
                <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" :active="request()->routeIs('colaborador')"> Colaboradores</a>
                <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                  <li><a class="dropdown-item" href="{{ route ('parceiros') }}" >Parceiros</a></li>
                  <li><a class="dropdown-item" href="{{ route ('trabalhe_connosco') }}" >Trabalhe Connoscos</a></li>
                  <li><a class="dropdown-item" href="{{ route('view_recrutamento') }}">Recrutamento</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown">Anúncios</a>
                <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                    <li><a class="dropdown-item" href="#">Notícias</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown">Ajuda</a>
                <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                    <li><a class="dropdown-item" href="#">Quem Somos</a></li>
                    <li><a class="dropdown-item" href="{{ route ('fale_connosco') }}">Fale Connosco</a></li>
                    <li> <hr class="dropdown-divider"> </li>
                    <li><a class="dropdown-item" href="#">FAQ</a></li>
                </ul>
            </li>
          </ul>
          <div class = "">
                  @if (Route::has('login'))
                    <div class="hidden top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-400 dark:text-gray-200 underline header__nav__link--cta header__nav__link">
                                Entrar <i class="fa fa-user" aria-hidden="true"></i>
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-400 dark:text-gray-200 underline header__nav__link--cta header__nav__link">
                                  Register <i class="fa fa-lock" aria-hidden="true"></i> 
                                </a>
                            @endif
                        @endauth
                    </div>
                  @endif
                </div>
        </div>
      </div>
    </div>
  </nav>
