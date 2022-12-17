
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Informação do Professor') }}
        </h2>
    </x-slot>
    
    <form action=" {{ route('update_info_professor') }}" method="post">
        <div class = "">
          @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
          @endif

          <x-jet-validation-errors class="mb-4" />
        </div>
        @csrf
        @foreach($prof as $prof)
        <input type="hidden" name="ProfessorID" id = "ProfessorID" value = "{{$prof->id}}">
            <div>
                <label for=""> Formação Academica</label>
                <input type="text" name="formacao_academica" id="formacao_academica" value = "{{$prof->formacao_academica}}">
            </div>
            <div>
                <label for="">Selecionar o Grau Académico</label>
                <select name="grau_academico" id="grau_academico" value = "{{$prof->grau_academico}}">
                    @foreach($grau as $grau)
                        <option value="{{$grau->id}}">{{$grau->descricao}}</option>
                    @endforeach
                </select>
            </div>
            <div>
            area_pesquisa
            </div>
            <div>
                <textarea name="experiencia_ensino" id="experiencia_ensino" cols="30" rows="5">
                    {{$prof->experiencia_ensino}}
                </textarea>
                
            </div>
            <div>
                <label for="preco">Preço: </label>
                <input type="text" name="preco" id="preco" value = "{{$prof->preco}}">
                <select name="preco_por" id="preco_por">
                    <option value="Hora">Hora</option>
                    <option value="Aula">Aula</option>
                </select>
            </div>
            <div>
                <label for="descricao">Descrição</label>
                <textarea name="descricao" id="descricao" cols="30" rows="5">
                    {{$prof->descricao}}
                </textarea>
            </div>
        @endforeach
        <div>
        <hr>
            <x-jet-button class="ml-4">
                {{ __('Salvar') }}
            </x-jet-button>
        </div>
    </form>

    <form action="" method="post">
        <span>Disponiblidade do Professor</span>
        <div>
            <label for="dias">Dias da Semana</label>
            <select name="dias" id="dias">
                <option value="2">Segunda-Feira</option>
                <option value="3">Terça-Feira</option>
                <option value="4">Quarta-Feira</option>
                <option value="5">Quinta-Feira</option>
                <option value="6">Sexta-Feira</option>
                <option value="7">Sabado</option>
                <option value="8">Domingo</option>
            </select>
        </div>
        <div>
            <div>
                <span>Periodo Laboral</span>
                <label for="horario">9H - 12H</label>
                <input type="text" name = "" id = "" value = "">

                <label for="horario">14H - 17H</label>
                <input type="text" name = "" id = "" value = "">
            </div>
            
            <div>
                <span>Periodo Pós - Laboral</span>
                <label for="horario">18H - 21h</label>
                <input type="text" name = "" id = "" value = "">
            </div>

            
        </div>
        <table>
            <thead>
                <th>Dias da Semana</th>
                <th>9h - 12h</th>
                <th>14h - 17h</th>
                <th>18h - 21h</th>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <hr>
            <x-jet-button class="ml-4">
                {{ __('Salvar') }}
            </x-jet-button>
    </form>
</x-app-layout>
