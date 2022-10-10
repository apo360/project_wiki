
<style>
	.container_logo{
		width: 75px;
		height: 75px;
		background-color: white;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 6px rgba(0, 0, 0, 0.19);
		margin-top: 10px;
		margin-left: 15px;
		border-radius: 50%;
	}
	</style>
</style>

<header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="/" :active="request()->routeIs('/')">
             <div class = "">
                    <img src="images/favicon.png" class = "container_logo">
              </div>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent" >
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="principal" :active="request()->routeIs('principal')">Inicio </a>
                  
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html"> O Projecto</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="academico" :active="request()->routeIs('academico')">Academicos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="repositorio" :active = "request()->routeIs('repositorio')">Repositório</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="colaborador" :active="request()->routeIs('colaborador')">Colaboradores</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Anuncios</a>
                </li>
              </ul>
            </div>
            <div class="quote_btn-container">
              @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/index') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-400 dark:text-gray-200 underline">
                            <span>
                                Entrar
                            </span>
                            <i class="fa fa-user" aria-hidden="true"></i></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-400 dark:text-gray-200 underline">
                                <span>
                                    Register
                                </span>
                                <i class="fa fa-lock" aria-hidden="true"></i> </a>
                        @endif
                    @endauth
                </div>
              @endif
            </div>
          </div>
        </nav>
      </div>
    </header>