

<!DOCTYPE html>
    <html lang="pt-pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== BOXICONS ===============-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>Dashboard</title>
        
        <!-- fonts style -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />
    
        <!-- owl carousel -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
        
        <!-- font Professor style -->
        <link href="{{ asset('css/layout_professor.css') }}" rel="stylesheet" />

        <!-- bootstrap core css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

        <!-- font awesome style -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/998c60ef77.js" crossorigin="anonymous"></script>
        
        <style>
            .menu_principal{
                display: none;
            }

        </style>
    </head>
    <body>
        <!--=============== HEADER ===============-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">{{Auth::user()->name}}</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#perfil" class="nav__link active-link">
                                <i class='bx bxs-user-account nav__icon'></i>
                                <span class="nav__name">Perfil</span>
                            </a>
                        </li>
                        
                        <li class="nav__item">
                            <a href="#disciplina" class="nav__link">
                                <i class='bx bx-user nav__icon'></i>
                                <span class="nav__name">Disciplinas</span>
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="#portfolio" class="nav__link">
                                <i class='bx bx-briefcase-alt nav__icon'></i>
                                <span class="nav__name">Portfolio</span>
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="#contactme" class="nav__link">
                                <i class='bx bx-message-square-detail nav__icon'></i>
                                <span class="nav__name">Contacta-me</span>
                            </a>
                        </li>
                        
                        @if(Auth::check())
                            <li class="nav__item">
                                <a href="{{route('logout')}}" class="nav__link">
                                    <i class='bx bx-log-out nav__icon'></i>
                                    <span class="nav__name">Sair</span>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
                
                 
                    <div class="mt-2" x-show="! photoPreview">
                        <img src="{{ asset('profile_images/'.Auth::user()->profile_photo_path) }}" alt="{{Auth::user()->name}}" class="nav__img">
                    </div>
                
                    <!-- New Profile Photo Preview -->
                    <div class="mt-2" x-show="photoPreview">
                        <span class="block nav__img"
                              x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                        </span>
                    </div>
                
                
            </nav>
        </header>

        <form action="{{ route('UpdateUserInformation') }}" method = "POST" enctype="multipart/form-data">
            <main>
                @csrf
                <!--=============== PERFIL ===============-->
                <section class="container section section__height" id="perfil">
                    <div class = "">
                          @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                          @endif
                          <x-jet-validation-errors class="mb-4" />
                          
                        </div>
                    <h2 class="section__title">Perfil</h2>
    
                        <div class="form_foto">
                            <!-- Profile Photo -->
                            
                                <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                                    <!-- Profile Photo File Input -->
                                    <input type="file" wire:model="photo" x-ref="photo" name = "photo" onchange="loadfile(event)" id = "photo" hidden />
    
                                    <x-jet-label for="photo" value="{{ __('Fotografia') }}" />
    
                                    <!-- Current Profile Photo -->
                                    <div class="mt-2" x-show="! photoPreview">
                                        <img src="{{ asset('profile_images/'.Auth::user()->profile_photo_path) }}" alt="{{ auth()->user()->name }}" class="nav__img">
                                    </div>
    
                                    <!-- New Profile Photo Preview -->
                                    <div class="mt-2" x-show="photoPreview">
                                        <img id = "output" class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center" style = "max-width: 80px; width: auto; border-radius: 50%;">
                                    </div>
    
                                    <x-jet-secondary-button class="mt-2 mr-2" type="button" onclick="photoclick()">
                                        {{ __('Selecionar nova foto') }}
                                    </x-jet-secondary-button>
    
                                    @if (auth()->user()->profile_photo_path)
                                        <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                                            {{ __('Remover Foto') }}
                                        </x-jet-secondary-button>
                                    @endif
    
                                    <x-jet-input-error for="photo" class="mt-2" />
                                </div>
                
                        </div>
    
                        <div class = "">
                            <div class = "dados_pessoais container">
                                
                                <div class = "row">
                                    <div class = "col-md-06">
                                        <label for="">Nome Próprio</label>
                                        <input type="text" class = "form-control" name = "name" id = "name" value = "{{Auth::user()->name}}">
                                    </div>
                                    <div class = "col-md-06">
                                        <label for="apelido">Apelido</label>
                                        <input type="text" class = "form-control" name = "apelido" id = "apelido" value = "{{Auth::user()->surname}}">
                                    </div>
                                </div>
                                
                                <div class = "row">
                                    <div class = "col-md-06">
                                        <label for="telefone">Telefone</label>
                                        <input type="text" class = "form-control" name = "telefone" id = "telefone" value = "{{Auth::user()->phone_number}}">
                                        <x-jet-input-error for="telefone" class="mt-2" />
                                    </div>
                                    <div class = "col-md-06">
                                        <label for="morada">Morada</label>
                                        <input type="text" class = "form-control" name = "morada" id = "morada" value = "{{Auth::user()->endereco}}">
                                        <x-jet-input-error for="morada" class="mt-2" />
                                    </div>
                                </div>
                                
                                <div class = "row">
                                    <!-- Email -->
                                    <div class="col-md-06">
                                        <x-jet-label for="email" value="{{ __('Email') }}" />
                                        <input id="email" name = "email" type="email" class="form-control" value = "{{Auth::user()->email}}">
                                        <x-jet-input-error for="email" class="mt-2" />
                                    </div>
    
                                    <!-- Data de Nascimento-->
                                    <div class = "col-md-06">
                                        <x-jet-label for="nascimento" value="{{ __('Data de Nascimento') }}" />
                                        <input type = "date" class = "form-control" name = "nascimento" id = "nascimento" value = "{{Auth::user()->nascimento}}">
                                    </div>
                                </div>
                                
                                <div class = "row">
                                    <!-- Municipio -->
                                    <div class="col-md-06">
                                        <x-jet-label for="municipio" value="{{ __('Municipio') }}" />
                                        <input id="municipio" type="text" class="form-control" value = "{{\App\Models\City::where('id', Auth::user()->city_id)->get()[0]->description_city}}">
                                        <x-jet-input-error for="municipio" class="mt-2" />
                                    </div>
                                    <!-- Genero -->
                                    <div class = "col-md-06">
                                        <x-jet-label for="genero" value="{{ __('Genero') }}" />
                                        <input type = "radio" value = "M" name = "genero" id = "genero"> Masculino
                                        <input type = "radio" value = "F" name = "genero" id = "genero"> Feminino
                                        <x-jet-input-error for="genero" class="mt-2" />
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                </section>
                
                <!--=============== PORTFOLIO ===============-->
                <section class="container section section__height" id="portfolio">
                    <h2 class="section__title">Portfolio</h2>
                    
                    <label for = "isonline">Disponível para dar explicações online</label>
                    <input type = "checkbox" name = "isonline" id = "isonline" >
                    
                    <label for = "grau_academico">Grau Academico</label>
                    <select id = "grau_academico" name = "grau_academico" class = "">
                        <option value = "">Selecionar</option>
                    </select>
                    
                    <label>Formação Academica</label>
                    <input type = "text" name = "formacao_academica" id = "formacao_academica" class = "">
                    
                    <label for = "descricao">Descrição</label>
                    <textarea id = "descricao" name = "descricao" class = "">
                        
                    </textarea>
                    
                    <label>Curriculum</label>
                    <input type = "file" name = "curriculum" id = "curriculum" class = "">
                </section>
                
                <input type = "submit" value = "{{ __('Salvar.') }}" class = "btn btn-secondary text-dark">
            
                <!--=============== Disciplinas ===============-->
                <section class="container section section__height" id="disciplina">
                    <h2 class="section__title">Disciplinas</h2>
                    <div class="div_disciplinas">
                        @if(count(App\Models\Profdisp::where('fk_user', Auth::user()->id)->get()) == 0)
                            <span>Ainda não tem disciplinas adicionadas</span>
                            <hr>
                        @else
                            <table class="tab_disciplinas table table-sm">
                                <thead>
                                    <th>...</th>
                                    <th>Ciclo</th>
                                    <th>Disciplinas</th>
                                    <th>Preço</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    
                                    @foreach(App\Models\Profdisp::join('disciplinas', 'disciplinas.id', 'fk_disciplina')->where('fk_user', Auth::user()->id)->get() as $disp)
                                        <tr>
                                            <td> <input type="checkbox" name="rm_id_disp" id="rm_id_disp" value = "{{$disp->id}}" class = ""> </td>
                                            <td>{{$disp->ciclo_p}}</td>
                                            <td>{{$disp->descricao}}</td>
                                            <td>{{$disp->preco}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                    <a class="btt_remove_disp btn" name = '' href = "">Remover Disciplinas</a>
                    <div class="add_disciplina">
    
                    <div class = "">
                            <hr>
    
                            <h2 class="section__title">Disponiblidades</h2>
                            <div class="div_disponiblidade">
                                
                                <label for="periodo">Período:</label>
                                <select id="periodo" name="periodo">
                                    <option value="Diurno">Diurno</option>
                                    <option value="Noturno">Noturno</option>
                                </select>
                                <br>
                                <label>Dias da Semana:</label>
                                <br>
                                @foreach (App\Models\Professor::join('Disponiblidades', 'professor_id', 'professors.id')->where('fk_user', Auth::user()->id)->get() as $disponibilidade)
                                    @if (strpos($disponibilidade->dias_semana, "Seg") !== false)
                                       <input type="checkbox" id="dia_segunda" name="dias_semana[]" value="Seg" checked> <label for="dia_segunda">Segunda-feira</label><br>
                                    @else
                                        <input type="checkbox" id="dia_segunda" name="dias_semana[]" value="Seg"> <label for="dia_segunda">Segunda-feira</label><br>
                                    @endif
                
                                    @if (strpos($disponibilidade->dias_semana, "Ter") !== false)
                                        <input type="checkbox" id="dia_terca" name="dias_semana[]" value="Ter" checked>
                                        <label for="dia_terca">Terça-feira</label>
                                        <br>
                                    @else
                                        <input type="checkbox" id="dia_terca" name="dias_semana[]" value="Ter">
                                        <label for="dia_terca">Terça-feira</label>
                                        <br>
                                    @endif
                                    
                                    @if (strpos($disponibilidade->dias_semana, "Qua") !== false)
                                        <input type="checkbox" id="dia_quarta" name="dias_semana[]" value="Qua" checked>
                                        <label for="dia_quarta">Quarta-feira</label>
                                        <br>
                                    @else
                                        <input type="checkbox" id="dia_quarta" name="dias_semana[]" value="Qua">
                                        <label for="dia_quarta">Quarta-feira</label>
                                        <br>
                                    @endif
                                    
                                    @if (strpos($disponibilidade->dias_semana, "Qui") !== false)
                                        <input type="checkbox" id="dia_quinta" name="dias_semana[]" value="Qui" checked>
                                        <label for="dia_quinta">Quinta-feira</label>
                                        <br>
                                    @else
                                        <input type="checkbox" id="dia_quinta" name="dias_semana[]" value="Qui">
                                        <label for="dia_quinta">Quinta-feira</label>
                                        <br>
                                    @endif
                                    
                                    @if (strpos($disponibilidade->dias_semana, "Sex") !== false)
                                        <input type="checkbox" id="dia_sexta" name="dias_semana[]" value="Sex" checked>
                                        <label for="dia_sexta">Sexta-feira</label>
                                        <br>
                                    @else
                                        <input type="checkbox" id="dia_sexta" name="dias_semana[]" value="Qua">
                                        <label for="dia_sexta">Sexta-feira</label>
                                        <br>
                                    @endif
                                    
                                    @if (strpos($disponibilidade->dias_semana, "Sab") !== false)
                                        <input type="checkbox" id="sabado" name="dias_semana[]" value="Sab" checked>
                                        <label for="sabado">Sabado</label>
                                        <br>
                                    @else
                                        <input type="checkbox" id="sabado" name="dias_semana[]" value="Sab">
                                        <label for="sabado">Sabado</label>
                                        <br>
                                    @endif
                                    
                                    @if (strpos($disponibilidade->dias_semana, "Dom") !== false)
                                        <input type="checkbox" id="Domingo" name="dias_semana[]" value="Dom" checked>
                                        <label for="Domingo">Domingo</label>
                                        <br>
                                    @else
                                        <input type="checkbox" id="Domingo" name="dias_semana[]" value="Dom">
                                        <label for="Domingo">Domingo</label>
                                        <br>
                                    @endif
                                        
                                @endforeach
                            </div>
                        </div>
                        
                    </div>
                </section>
    
                <!--=============== CONTACTME ===============-->
                <section class="container section section__height" id="contactme">
                    <h2 class="section__title">Contacta-me</h2>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Aluno</th>
                          <th>Mensagem</th>
                          <th>Ações</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach (App\Models\Message::where('status', 'pendente')->get() as $message)
                          <tr>
                            <td>{{ App\Models\User::where('id',$message->from_id )->get()[0]->name}}</td>
                            
                            <td>{{ $message->message }}</td>
                            <td>
                              <a href="teacher/respond-message/{{$message->from_id}}" class="btn btn-primary">Responder</a>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                </section>
            </main>
        </form>
        
        <form action="{{ route('add_disciplinas') }}" class = "container" method = "POST">
            @csrf
          <div class = "row">
                <div class="col-md-4">
                    <label for="ciclo">Ciclo</label>
                    <select class = "form-control" name = "ciclo" id = "ciclo">
                        <option value="extra">Extracurricular</option>
                        <option value="superior">Ensino Superior</option>
                        <option value="medio">Ensino Médio</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label for="disciplina">Disciplina</label>
                    <input type="text" class = "form-control" name = "disp" id = "disp" list = "disp_list">
                    <datalist id = "disp_list">
                        @foreach(App\Models\Disciplinas::all() as $disp)
                            <option value="{{$disp->descricao}}">
                        @endforeach
                    </datalist>
                </div>

                <div class="col-md-4">
                    <label for="preco">Preço</label>
                    <input type="text" name = "preco" id = "preco" class = "form-control">
                </div>
            </div>
          <input type="submit" value="Submit" class = "btn btn-secondary text-dark">
        </form>
        
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

        
        <!--=============== MAIN JS ===============-->
        
        <script type="text/javascript">
        
            function photoclick(){
                document.getElementById('photo').click();
            }
            var loadfile = function(event){
               var output = document.getElementById('output');
               output.src = URL.createObjectURL(event.target.files[0]);
            }
            
        </script>
        
        <script>
            /*=============== SCROLL SECTIONS ACTIVE LINK ===============*/
            const sections = document.querySelectorAll('section[id]')
            
            function scrollActive(){
                const scrollY = window.pageYOffset
            
                sections.forEach(current =>{
                    const sectionHeight = current.offsetHeight,
                        sectionTop = current.offsetTop - 50,
                        sectionId = current.getAttribute('id')
            
                    if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
                        document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.add('active-link')
                    }else{
                        document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.remove('active-link')
                    }
                })
            }
            window.addEventListener('scroll', scrollActive)
            
            
            /*=============== CHANGE BACKGROUND HEADER ===============*/
            function scrollHeader(){
                const header = document.getElementById('header')
                // When the scroll is greater than 80 viewport height, add the scroll-header class to the header tag
                if(this.scrollY >= 80) header.classList.add('scroll-header'); else header.classList.remove('scroll-header')
            }
            window.addEventListener('scroll', scrollHeader)

            
            /*=============== ADD DISCIPLINAS =======================*/
        </script>
    </body>
</html>
