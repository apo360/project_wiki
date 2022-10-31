
<header class="header_section">
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg custom_nav-container texto">
      <div class="container-fluid">
          <a class="navbar-brand" href="/" :active="request()->routeIs('/')">
            <img src="images/favicon.png" alt = "Plataforma Academica" style="width:50px;" class="rounded-pill">
          </a>

          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
            
            <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#"> <i class='fa fa-home'></i> Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">
                          <i class="fa fa-graduation-cap"> </i> {{__('Apoio Académico')}}</a>
                        <ul class="dropdown-menu">
                            <!-- <li class="dropdown-item"> <a href="apoio_academico">{{__('Info')}} </a> </li> -->
                            <li><a class="dropdown-item" href="/apoio_academico/explicacoes">Explicações</a></li>
                            <li><a class="dropdown-item" href="/apoio_academico/academico">Acompanhamento de Estudo</a></li>
                            <li><a class="dropdown-item" href="/apoio_academico/preparatorio">Preparatório</a></li>
                            <li><a class="dropdown-item" href="/apoio_academico/inscricao">{{__('Inscrição Universitária')}}</a> </li>
                            <!-- <li><a class="dropdown-item" href="/apoio_academico/formacoes">Formações</a></li> -->
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/repositorio" :active = "request()->routeIs('repositorio')">{{ __('Repositório') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Biblioteca</a>
                    </li> 
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">Colaboradores</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/colaboradores/parceiros" :active = "request()->routeIs('colaborador.parceiros')" >Parceiros</a></li>
                            <li><a class="dropdown-item" href="/colaboradores/trabalhe_connosco" :active = "request()->routeIs('colaborador.trabalhe_connosco')">Trabalhe Connoscos</a></li>
                            <li><a class="dropdown-item" href="/colaboradores/recrutamento" :active = "request()->routeIs('colaborador.recrutamento')">Recrutamento</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Anúncios</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Notícias</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                          <i class='fa fa-info'></i> Ajuda</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="ajuda/" :active = "request()->routeIs('ajuda')">Quem Somos</a></li>
                            <li><a class="dropdown-item" href="ajuda/fale_connosco">Fale Connosco</a></li>
                            <li><a class="dropdown-item" href="#">FAQ</a></li>
                        </ul>
                    </li>
                </ul>
                <div class = "">
                  @if (Route::has('login'))
                    <div class="hidden top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/index') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
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
                    <li><a class="dropdown-item" href="/apoio_academico/explicacoes">Explicações</a></li>
                    <li><a class="dropdown-item" href="/apoio_academico/academico">Acompanhamento de Estudo</a></li>
                    <li><a class="dropdown-item" href="/apoio_academico/preparatorio">Preparatório</a></li>
                    <li><a class="dropdown-item" href="/apoio_academico/inscricao">{{__('Inscrição Universitária')}}</a> </li>
                    <!-- <li><a class="dropdown-item" href="/apoio_academico/formacoes">Formações</a></li> -->
                    <li> <hr class="dropdown-divider"> </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" :active = "request()->routeIs('repositorio')">{{ __('Repositório') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Bibliotecas</a>
            </li>
            <li class="nav-item dropdown"> 
                <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" :active="request()->routeIs('colaborador')"> Colaboradores</a>
                <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                    <li><a class="dropdown-item" href="/colaboradores/parceiros"> Parceiros</a></li>
                    <li><a class="dropdown-item" href="/colaboradores/trabalhe_connosco"> Trabalhe Connoscos</a></li>
                    <li><a class="dropdown-item" href="/colaboradores/recrutamento"> Recrutamento</a></li>
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
                    <li><a class="dropdown-item" href="ajuda/fale_connosco">Fale Connosco</a></li>
                    <li> <hr class="dropdown-divider"> </li>
                    <li><a class="dropdown-item" href="#">FAQ</a></li>
                </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav> 
</header>
