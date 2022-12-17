
<head>
      <!-- bootstrap core css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />

 <!-- font awesome style -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/998c60ef77.js" crossorigin="anonymous"></script>
</head>

<style>
    body{
        background-color: #ddd;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .flex{
        align-items: right;
    }

    .box{
        position: relative;
        width: 1360px;
        background: #fff;
        border-radius: 10px;
        overflow: hidden;

        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        padding: 87px 110px 33px 0px;
        border-bottom: navy 2px solid;

    }

    .box::before{
        content: '';
        position: absolute;
        width: 1560px;
        height: 420px;
        top: -50%;
        background: linear-gradient(0deg, transparent, #45f3ff, transparent, #45f3ff);

    }

    /* .box::after{
        content: '';
        position: absolute;
        width: 1360px;
        height: 450px;
        bottom: -50%;
        right: -50%;
        background: linear-gradient(0deg, transparent, #45f3ff, transparent, #45f3ff);

    } */

    /*------------------------------------------------------------------
[  ]*/
.login100-pic {
    padding-top: 80px;
  width: 416px;
  align-items: center;
}

.login100-pic img {
  max-width: 100%;
}


/*------------------------------------------------------------------
[  ]*/
.login100-form {
  width: 690px;
  padding-left: 96px;
}

.login100-form .row {
  padding-bottom: 15px;
}

.login100-form label {
  padding-bottom: 5px;
  font-family: 'Times New Roman', Times, serif;
  font-kerning: auto;
  font-style: 0.2;
}

.login100-form i {
  color: #6e6460;
}

.login100-form-title {
  font-family: 'Times New Roman', Times, serif;
  font-size: 28px;
  color: #333333;
  line-height: 1.2;
  text-align: center;
  width: 100%;
  display: block;
  padding-bottom: 34px;
}

/*------------------------------------------------------------------
[ Responsive ]*/

@media (max-width: 992px) {
  .wrap-login100 {
    padding: 177px 90px 33px 85px;
  }

  .login100-pic {
    width: 35%;
  }

  .login100-form {
    width: 50%;
  }
}
@media (max-width: 768px) {
  .wrap-login100 {
    padding: 100px 80px 33px 80px;
  }

  .login100-pic {
    display: none;
  }

  .login100-form {
    width: 100%;
  }
}
@media (max-width: 576px) {
  .wrap-login100 {
    padding: 100px 15px 33px 15px;
  }
}


</style>

<body>
    <div class = "box">
        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}" class="login100-form">
            <span class="login100-form-title">
                Regista-se
            </span>	
            <hr>
            @csrf
            <div class="row">

                <div class="col-8">
                    <div class="form-group">
                        <i class="fa fa-user"> </i> <x-jet-label for="name" value="{{ __('Nome Completo') }}" />
                        <input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name">
                    </div> 
                </div>

                <div class="col-md-4">
                    <div class = "form-group">
                        <i class="fa fa-user"> </i> <x-jet-label for="surname" value="{{ __('Apelido') }}" />
                        <x-jet-input id="surname" class="form-control" type="text" name="surname" :value="old('surname')" required autocomplete="surname" />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <i class="fa fa-envelope"> </i> <x-jet-label for="email" value="{{ __('Email') }}" />
                        <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                     <i class="fa fa-phone"> </i> <x-jet-label for="phone_number" value="{{ __('Telefone') }}" />
                        <x-jet-input id="phone_number" class="form-control" type="text" name="phone_number" :value="old('phone_number')"/>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                     <i class="fa fa-map-marker"> </i> <x-jet-label for="city" value="{{ __('Cidade') }}" />
                        <input id="city" class="form-control" type="text" name="city" :value="old('city')" required list = "c_city">
                        <datalist id = "c_city">
                            @foreach(\App\Models\City::all() as $cities)
                                <option value="{{$cities->id}}"> {{$cities->description_city}}</option>
                            @endforeach
                        </datalist>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <i class="fa fa-sort-amount-desc"> </i> <x-jet-label for="register_id" value="{{ __('Registar Como: ') }}" />
                        <select id = "register_id" name = "register_id" class="form-control">
                            <option value="">Selecionar</option>
                            <option value="4">Educador</option>
                            <option value="2">student</option>
                            <option value="3">teacher</option>
                        </select>
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
            

            

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('Concordo com os :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Termos de Serviços').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Politica de Privacidade').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Já estou registado?') }}
                </a>

                <x-jet-button class="ml-4" style="background-color: black; border-radius: 10px; border-color:#333333 2px solid;">
                    {{ __('Registar') }}
                </x-jet-button>
            </div>
        </form>

        <div class="login100-pic js-tilt" data-tilt>
            <img src="images/6461.jpg" alt="IMG">
        </div>

    </div>
</body>
