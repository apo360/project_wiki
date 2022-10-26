@include('layouts.header')

@include('layouts.menu')

Recrutamento de Professores <br>
<hr>
<body>
  <div class = "container">
    <div class = "">
      @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
      @endif
    </div>
    <x-jet-validation-errors class="mb-4" />
    
    <form method="POST" action="{{ route('recrutamento') }}" enctype = "multipart/form-data">
      @csrf
      <label for="nomecompleto">Nome Completo</label>
      <input type = "text" class = "" type = "text" name = "nomecompleto" id = "nomecompleto" autocomplete value="{{ old('nomecompleto') }}">

      <label for="apelido">Apelido</label>
      <input type = "text" class = "" type = "text" name = "apelido" id = "apelido" autocomplete value="{{ old('apelido') }}">

      <label for="email">E-mail</label>
      <input type = "text" class = "" type = "text" name = "email" id = "emai" autocomplete value="{{ old('title') }}">

      <label for="telemovel">Telemovel</label>
      <input type = "text" class = "" type = "text" name = "telemovel" id = "telemovel" autocomplete value="{{ old('telemovel') }}">
      <input type = "text" class = "" type = "text" name = "telemovelalt" id = "telemovelalt" placeholder = "Contacto Alternativo">

      <label for="morada">Morada Completa</label>
      <input type = "text" class = "" type = "text" name = "morada" id = "morada" autocomplete value="{{ old('morada') }}">

      <label for="provincia">Provincia</label>
      <select class = "" name = "provincia_id" id = "provincia_id">
        <option value="">Selecionar</option>
        @foreach(\App\Models\Provincia::all() as $provincias)
            <option value="{{$provincias->id}}"> {{$provincias->provincia_descricao}}</option>
        @endforeach
      </select>

      <label for="cidade">Cidade</label>
      <input id="cidade_id" class="" type="text" name="cidade_id" :value="old('cidade_id')" required list = "c_city">
      <datalist id = "c_city">
        @foreach(\App\Models\City::all() as $cities)
          <option value="{{$cities->description_city}}" />
        @endforeach
      </datalist>

      <label for="academico">Grau Académico</label>
      <select class = "" name = "academico" id = "academico">
        <option value="">Selecionar</option>
        @foreach(\App\Models\GrauAcademicos::all() as $Academicos)
            <option value="{{$Academicos->id}}"> {{$Academicos->descricao}}</option>
        @endforeach
      </select>

      <label for="">Formação Académica</label>
      <textarea name="formacao" id="formacao" cols="100" rows="5"></textarea>

      <label for="">Experiência de Ensino</label>
      <textarea name="experiencia" id="experiencia" cols="100" rows="5"></textarea>

      <label for="">Cadeiras que pretende Lecionar</label>
      <textarea name="cadeiras" id="cadeiras" cols="100" rows="5"></textarea>

      <label for="">Comentários</label>
      <textarea name="comentario" id="comentario" cols="100" rows="5"></textarea>

      <div>
        <label for="certificado">Certificado</label> <input type="file" name="certificado" id="certificado" >
      </div>

      <x-jet-button class="ml-4">
          {{ __('Enviar') }}
      </x-jet-button>
    </form>
  </div>

</body>
</html>

