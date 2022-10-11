

<header class="header_section">

      <div class="container-fluid">

        <nav class="navbar navbar-expand-lg custom_nav-container ">

          <a class="navbar-brand" href="/" :active="request()->routeIs('/')">
            <img src="images/favicon.png" class="container_logo rounded-pill">
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse align-items-center" id="navbarSupportedContent" >

            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">

              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="principal" :active="request()->routeIs('principal')">Início </a>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Academicos</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-item" href="#">Inscrição Universitária</li>
                    <li class="dropdown-item" href="#">Livraria</li>
                    <li class="dropdown-item" href="#">###</li>
                  </ul>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="repositorio" :active = "request()->routeIs('repositorio')">{{ __('Repositório') }}</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="colaborador" :active="request()->routeIs('colaborador')">Colaboradores</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="anuncio">{{__('Anúncios')}}</a>
                </li>
              </ul>
              
            </div>

            <div class="d-flex mx-auto flex-column flex-lg-row">
              <div class="quote_btn-container">
                @if (Route::has('login'))
                  <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
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

            <div>
              <input type="checkbox" class="checkbox" id="chk" />
              <label class="label" for="chk">
                <i class="fas fa-sun"></i>
                <i class="fas fa-moon"></i>
                <div class="ball"></div>
              </label>
            </div>

          </div>

        </nav>

      </div>

    </header>

    <script>
const chk = document.getElementById('chk')

chk.addEventListener('change', () => {
  document.body.classList.toggle('dark')
})
</script>