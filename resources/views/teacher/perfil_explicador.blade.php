<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title> ... </title>
  </head>
  <body>
    @foreach($ProfID as $rowss)
        <p>{{$rowss->name}}</p>
        <p>{{$rowss->surname}}</p>
        <p>{{$rowss->profile_photo_path}}</p>
        <p>{{$rowss->grau_academico}}</p>
        <p>{{$rowss->formacao_academica}}</p>
        <p>{{$rowss->preco}}</p>
        @if (Route::has('login'))
            <div class="hidden top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <span>Contactos</span>
                    <span> E-mail: <p>{{$rowss->email}}</p></span>
                    <span> Telefone <p>{{$rowss->phone_number}}</p></span>
                @else
                    @if (Route::has('register'))
                        <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">
                            Registe-se para o contactar (Gratuito) <i class="fa fa-lock" aria-hidden="true"></i>
                        </a>
                    @endif
                @endauth
            </div>
        @endif
    @endforeach
   <!-- Button trigger modal -->
    <!-- *********************** begin modal cadastro ***************************-->
    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel">Cadastro de Estudante <p>Encontre as melhores soluções para os seu e duvidas no ambito académico</p> </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class = "box">
                        <x-jet-validation-errors class="mb-4" />

                        <form method="POST" action="{{ route('register') }}" class="login100-form">
                            <span class="login100-form-title">
                                Registo de Estudante
                            </span>	
                            <hr>
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <i class="fa fa-user"> </i> <x-jet-label for="name" value="{{ __('Nome Completo') }}" />
                                        <input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name">
                                    </div> 
                                </div>
                            </div>

                            <div class = "row">
                                <div class="col-md-12">
                                    <div class = "form-group">
                                        <i class="fa fa-user"> </i> <x-jet-label for="surname" value="{{ __('Apelido') }}" />
                                        <x-jet-input id="surname" class="form-control" type="text" name="surname" :value="old('surname')" required autocomplete="surname" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <i class="fa fa-envelope"> </i> <x-jet-label for="email" value="{{ __('Email') }}" />
                                        <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
                                        <input type="hidden" name="register_id" id = "register_id" value = "2">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class = "form-group">
                                        <i class="fa fa-key"> </i> <x-jet-label for="password" value="{{ __('Password') }}" />
                                        <x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                                    </div>
                                </div> 
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class = "form-group">
                                        <i class="fa fa-key"> </i> <x-jet-label for="password_confirmation" value="{{ __('Confirmar Password') }}" />
                                        <x-jet-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                                    </div>
                                </div> 
                            </div>
                            

                            <div class="flex mt-4">
                                <x-jet-button class="ml-4" style="background-color: black; border-radius: 10px; border-color:#333333 2px solid;">
                                    {{ __('Registar') }}
                                </x-jet-button>
                            </div>
                        </form>

                        <div class="login100-pic js-tilt" data-tilt>
                            <img src="images/6461.jpg" alt="IMG">
                        </div>

                    </div>
                    <a class="btn btn-primary" href="{{ route('login') }}">
                                    {{ __('Já estou registado?') }}
                                </a>
                    <!-- <a class="btn btn-primary" href="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Já estou registado.</a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- *********************** /. end modal cadastro ***************************-->
    

    <!-- *********************** /. begin modal login ***************************-->
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2">Benvindo de Volta!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        login.
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Criar uma conta...</button>
      </div>
    </div>
  </div>
</div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>




