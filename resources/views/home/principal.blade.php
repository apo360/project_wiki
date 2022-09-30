@include('layouts.header')

<body>
    <div class = "hero_area">
       <!-- header section strats -->

       @include('layouts.menu_principal')

        <!-- end header section -->
        
        <!--  -->
        <div class = "row">
            <div class="col-md-3">

            logot
            </div>
            <div class="col-md-9 mx-auto" style = "border-bottom: 1px solid; margin-top: 25px; ">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                        <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                            <a class="nav-link" href="" :active="">{{ __('Faça Kumbu') }}</a>
                            
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="" :active="">{{ __('Serviços') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="" :active="">{{ __('Livraria') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="" :active="">{{ __('Contatos') }}</a>
                            </li>
                        </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        home blade
    </div>
</body>