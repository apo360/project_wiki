
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv = "X-UA-Compatible" content = "IE-edge" />
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
        <!-- Mobile Metas -->
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

        <style>
        
            .container{
                display: flex;
                justify-content: space-evenly;
                flex-wrap: wrap;
            }
            
            .card{
                width: 300px;
                height: 460px;
                margin: 25px;
                background-color: #fff;
                border-radius: 20px;
                overflow: hidden;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.7);
                transition: 0.3s;
            }
            
            .card-header{
                width: 100%;
                height: 250px;
                overflow: hidden;
            }
            
            .card-img{
                min-width: 100%;
                width: auto;
                height: 100%;
            }
            
            .card-body{
                height: 120px;
                padding: 15px;
                text-align: center;
                font-family: sans-serif;
            }
            
            .card-title{
                font-size: 32px;
                margin: 15px 0;
            }
            
            .card-texto{
                font-size: 12px;
                width: 250px;
                margin: 0 auto;
            }
            
            .card-footer{
                margin-top: 10px;
                text-align: center;
                background-color: #000;
            }
            
            .card-footer a{
                color: #fff;
                display: block;
                padding: 16px;
                text-decoration: none;
                font-family: sans-serif;
                font-weight: 600;
            }
            
            .card:houver{
                transform: scaled3d(1.1, 1.1, 1);
            }
            
            /* First Mobile e tablet*/
            @media screen and (max-width: 767px){
                
                body{
                    background-color: #F6F9FF;
                }
                .pesq_form{
                    position: fixed;
                    background-color: #000;
                    z-index: 1;
                    width: 100%;
                    margin-bottom: 30px;
                }
                
                .pesq_form form{
                    gap: 3rem;
                    margin: 10px auto;
                }
                
                .pesq_form span i{
                    width: 18px;
                    height: auto;
                    height: 24px;
                    border-radius: 0px;
                    
                }
                
                .contt{
                    padding-top: 80px;
                }
                
                .pesq_form .input-group-prepend .input-group{
                     border-radius: 0px;
                }
            }
            
            /* Second Desktop Display*/
            @media screen and (min-width: 767px){
                .pesq_form{
                    display: none;
                }
            }
        </style>
    </head>
    
    <body>
        
        <!-- Inicio do Header (Cabeçalho e Menu) -->
        <header class=""> 
          <!-- fixed-top -->
          <!-- header section strats -->
          @include('layouts.menu_principal')
          <!-- end header section -->
        </header>
        <!-- Fim do Header (Cabeçalho e Menu) -->
        
        <div class = "pesq_form">
            <form role="search" method = "get" action = "{{ route('search') }}">
                <div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fas fa-search"></i></span>
					</div>
                    <input type = "search" aria-label="Search" list = "disp_list" name = "procurar" class = "form-control search2" placeholder = "Pesquisa a Disciplina...">
                    <datalist id = "disp_list">
                        @foreach(App\Models\Disciplinas::all() as $discip)
                            <option value="{{ $discip->descricao }}" label="{{ $discip->descricao }}">
                        @endforeach
                    </datalist>
				</div>
            </form>
        </div>
        
        <section class="contt" id = "PAGE_CONTENT">
            <div class = "container">
                <div class="card card-1">
                    <div class="card-header">
                        <img src="images/mat.png" alt=""  class = "card-img">
                    </div>
                    <div class="card-body">
                        <div class="card-titulo">Matemática</div>
                        <p class = "card-texto">
                            Meu texto aqui de mat
                        </p>
                    </div>
                    <div class="card-footer" id="navigation_header">
                        <a href="explicacoes/Matemática">Explore Mais</a>
                    </div>
                </div>
            
                <div class="card card-2">
                    <div class="card-header">
                        <img src="images/frances.png" alt="" class = "card-img">
                    </div>
                    <div class="card-body">
                        <div class="card-titulo">Francês</div>
                        <p class = "card-texto">
                            Meu texto aqui de Fran
                        </p>
                    </div>
                    <div class="card-footer" id="navigation_header">
                        <a href="explicacoes/Francês">Explore Mais</a>
                    </div>
                </div>
                
                <div class="card card-3">
                    <div class="card-header">
                        <img src="images/Ingles.jpg" alt="" class = "card-img">
                    </div>
                    <div class="card-body">
                        <div class="card-titulo">Inglês</div>
                        <p class = "card-texto">
                            Meu texto aqui de Ing
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="explicacoes/Inglês">Explore Mais</a>
                    </div>
                </div>
            
                <div class="card card-4">
                    <div class="card-header">
                        <img src="images/info.png" alt="" class = "img_disp">
                    </div>
                    <div class="card-body">
                        <div class="card-titulo">Informática</div>
                        <p class = "card-texto">
                            Meu texto aqui de Inf
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="explicacoes/Informática">Explore Mais</a>
                    </div>
                </div>
                
                <div class="card card-5">
                    <div class="card-header">
                        <img src="images/programacao.png" alt="" class = "img_disp">
                    </div>
                    <div class="card-body">
                        <div class="card-titulo">Programação</div>
                        <p class = "card-texto">
                            Meu texto aqui de Prog
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="explicacoes/Programação">Explore Mais</a>
                    </div>
                </div>
            
                <div class="card card-6">
                    <div class="card-header">
                        <img src="images/quimica.png" alt="" class = "img_disp">
                    </div>
                    <div class="card-body">
                        <div class="card-titulo">Química</div>
                        <p class = "card-texto">
                            Meu texto aqui de Química
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="explicacoes/Química">Explore Mais</a>
                    </div>
                </div>
            
                <div class="card card-7">
                    <div class="card-header">
                        <img src="images/fisi.png" alt="" class = "img_disp">
                    </div>
                    <div class="card-body">
                        <div class="card-titulo">Física</div>
                        <p class = "card-texto">
                            Meu texto aqui de Fis
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="explicacoes/Física">Explore Mais</a>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Inicio do Rodapé (Info para todas as páginas) -->
        <section class = "">
          <footer class="footer_section"> 
            <!-- footer section strats -->
            @include('layouts.footer')
            <!-- end footer section -->
          </footer>
        </section>
        <!-- Fim do Rodapé -->
     
        <!-- ********************************************************************************************************************************************* -->
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/998c60ef77.js" crossorigin="anonymous"></script>
    
        <!-- jQery -->
        <script src="/js/jquery-3.4.1.min.js"></script>
    
        <!-- owl carousel -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    
        <!-- custom js -->
        <script src="/js/custom.js"></script>
    
        <!-- Google Map -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
        
        <script>
            $(document).ready(function(){
              $("#navigation_header a").click(function(e){
                e.preventDefault();
                var href = $(this).attr('href');
                $('#PAGE_CONTENT').load(href+"#PAGE_CONTENT");
              }) 
            })
        </script>
      
  </body>
    
</html>

    