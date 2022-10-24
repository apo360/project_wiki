@include('layouts.header')

Recrutamento <br>
<hr>
<body>
  <div class = "container">
    <div class = "">
      @if(Session::has('success'))
        <div class = "alert alert-success">
          {{Session::get('success')}}
        </div>
      @endif
    </div>
    <x-jet-validation-errors class="mb-4" />
    
    <form method="POST" action="{{ route('recrutamento') }}">
      @csrf
      <label for="nomecompleto">Nome Completo</label>
      <input type = "text" class = "block mt-1 w-full" type = "text" name = "nomecompleto" id = "nomecompleto">

      <label for="apelido">Apelido</label>
      <input type = "text" class = "block mt-1 w-full" type = "text" name = "apelido" id = "apelido">

      <label for="email">E-mail</label>
      <input type = "text" class = "block mt-1 w-full" type = "text" name = "email" id = "emai">

      <label for="telemovel">Telemovel</label>
      <input type = "text" class = "block mt-1 w-full" type = "text" name = "telemovel" id = "telemovel">
      <input type = "text" class = "block mt-1 w-full" type = "text" name = "telemovelalt" id = "telemovelalt" placeholder = "Contacto Alternativo">

      <label for="morada">Morada Completa</label>
      <input type = "text" class = "block mt-1 w-full" type = "text" name = "morada" id = "morada">

      <label for="provincia">Provincia</label>
      <select class = "block mt-1 w-full" name = "provincia_id" id = "provincia_id">
        <option value="">Selecionar</option>
        @foreach(\App\Models\Provincia::all() as $provincias)
            <option value="{{$provincias->id}}"> {{$provincias->provincia_descricao}}</option>
        @endforeach
      </select>

      <label for="cidade">Cidade</label>
      <input id="cidade_id" class="block mt-1 w-full" type="text" name="cidade_id" :value="old('cidade_id')" required list = "c_city">
      <datalist id = "c_city">
        @foreach(\App\Models\City::all() as $cities)
          <option value="{{$cities->id}}"> {{$cities->description_city}}</option>
        @endforeach
      </datalist>

      <label for="academico">Grau Académico</label>
      <select class = "block mt-1 w-full" name = "academico" id = "academico">
        <option value="">Selecionar</option>
        @foreach(\App\Models\GrauAcademicos::all() as $Academicos)
            <option value="{{$Academicos->id}}"> {{$Academicos->descricao}}</option>
        @endforeach
      </select>

      <x-jet-button class="ml-4">
          {{ __('Enviar') }}
      </x-jet-button>
    </form>
  </div>

</body>
</html>

