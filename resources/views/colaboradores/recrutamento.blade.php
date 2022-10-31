@include('layouts.header')

@include('layouts.menu')

 <br>
<hr>
<body>
  <div class = "container">
    <div class="card card-navy">
			<div class="card-header">
				<h3 class="card-title">Recrutamento</h3>
			</div>

			<div class="card-body">
        <div class = "">
          @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
          @endif

          <x-jet-validation-errors class="mb-4" />
        </div>
      </div>

      <div class="card-body">
        <div class="container-fluid">
          <form method="POST" action="{{ route('recrutamento') }}" enctype = "multipart/form-data">
            @csrf
            <div class = "container">
              <div class = "row">
                <div class = "col-md-12">

                  <div class = "row">
                    <div class = "col-md-5">
                      <label for="nomecompleto">Nome Completo</label>
                      <input type = "text" class="block mt-1 w-full" type = "text" name = "nomecompleto" id = "nomecompleto" autocomplete value="{{ old('nomecompleto') }}">
                    </div>
                    <div class = "col-md-4">
                      <label for="apelido">Apelido</label>
                      <input type = "text" class="block mt-1 w-full" type = "text" name = "apelido" id = "apelido" autocomplete value="{{ old('apelido') }}">
                    </div>

                    <div class = "col-md-3">
                      <label for="academico">Grau Académico</label>
                      <select class="block mt-1 w-full" name = "academico" id = "academico">
                        <option value="">Selecionar</option>
                        @foreach(\App\Models\GrauAcademicos::all() as $Academicos)
                            <option value="{{$Academicos->id}}"> {{$Academicos->descricao}}</option>
                        @endforeach
                      </select>
                    </div>

                  </div>

                  <div class = "row">
                    <div class = "col-md-6">
                      <label for="email">E-mail</label>
                      <input type = "text" class="block mt-1 w-full" type = "text" name = "email" id = "email" autocomplete value="{{ old('email') }}">
                    </div>

                    <div class = "col-md-6">
                      <label for="morada">Morada Completa</label>
                      <input type = "text" class="block mt-1 w-full" type = "text" name = "morada" id = "morada" autocomplete value="{{ old('morada') }}">
                    </div>

                    
                  </div>

                  <div class = "row">
                    <div class = "col-md-4">
                      <label for="provincia">Provincia</label>
                      <select name = "provincia_id" id = "provincia_id" class="block mt-1 w-full">
                        <option value="">Selecionar</option>
                        @foreach(\App\Models\Provincia::all() as $provincias)
                            <option value="{{$provincias->id}}"> {{$provincias->provincia_descricao}}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class = "col-md-4">
                      <label for="cidade">Cidade</label>
                      <input id="cidade_id" class="block mt-1 w-full" type="text" name="cidade_id" :value="old('cidade_id')" required list = "c_city">
                      <datalist id = "c_city">
                        @foreach(\App\Models\City::all() as $cities)
                          <option value="{{$cities->description_city}}" />
                        @endforeach
                      </datalist>
                    </div>

                    <div class = "col-md-4">
                      <label for="telemovel">Telemovel</label>
                      <input type = "text" class="block mt-1 w-full" type = "text" name = "telemovel" id = "telemovel" autocomplete value="{{ old('telemovel') }}">
                      <input type = "text" class="block mt-1 w-full" type = "text" name = "telemovelalt" id = "telemovelalt" placeholder = "Contacto Alternativo">
                    </div>
                  </div>

                  <div class = "row">
                    <div class = "col-md-6">
                      <label for="">Formação Académica</label>
                        <textarea name="formacao" id="formacao" class="block mt-1 w-full" rows="5" value="{{ old('formacao') }}"></textarea>
                    </div>

                    <div class = "col-md-6">
                      <label for="">Experiência de Ensino</label>
                      <textarea name="experiencia" id="experiencia" class="block mt-1 w-full" rows="5" value="{{ old('experiencia') }}"></textarea>
                    </div>
                  </div>

                  <div class = "row">
                    <div class = "col-md-8">
                      <label for="">Cadeiras que pretende Lecionar</label>
                      <textarea name="cadeiras" id="cadeiras" class="block mt-1 w-full" rows="5" value="{{ old('cadeiras') }}" Placeholder = "Matemática|Ensino Médio; Programação|Ensino Médio/Superior"></textarea>
                    </div>
                  </div>

                  <label for="certificado">Certificado</label> 
                  <input type="file" name="certificado" id="certificado" class="block mt-1 w-full" value="{{ old('certificado') }}">
                </div>
              </div>
            </div>

            <hr>
            <x-jet-button class="ml-4">
                {{ __('Enviar') }}
            </x-jet-button>
          </form>
        </div>
      </div>

  </div>

</body>
</html>

