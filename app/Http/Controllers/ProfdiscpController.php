<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disciplinas;
use App\Models\Profdisp;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\JoinClause;
//use App\Http\Controllers\UserController;

class ProfdiscpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
     
    public function index($disciplina = null)
    {

        $disciplinaID = Disciplinas::where('descricao', $disciplina)->get();

        $DispProf = Profdisp::join('professors', 'professors.fk_user', '=', 'profdisps.fk_user')
                                ->join('users', 'users.id', '=', 'professors.fk_user')
                                ->join('cities', 'cities.id', 'users.city_id')
                                ->join('grau_academicos', 'grau_academicos.id', 'professors.fk_grau_academico')
                                ->where('profdisps.fk_disciplina', $disciplinaID[0]->id)->get();
        
        return view('apoio_academico.perfil_disciplina',[
            'disciplinaID' => $DispProf,
            'DisciplinaDesc' => $disciplina
        ]);
    }
    
    public function search(Request $request){

        $disciplinaID = Disciplinas::where('descricao', $request->input('procurar'))->get();

        $DispProf = Profdisp::join('professors', 'professors.id', '=', 'profdisps.fk_user')
                                ->join('users', 'users.id', '=', 'professors.fk_user')
                                ->join('cities', 'cities.id', 'users.city_id')
                                ->join('grau_academicos', 'grau_academicos.id', 'professors.fk_grau_academico')
                                ->where('profdisps.fk_disciplina', $disciplinaID[0]->id)->get();

        return view('apoio_academico.perfil_disciplina', 
        [
            'disciplinaID' => $DispProf,
            'DisciplinaDesc' => $request->input('procurar')
        ]);
    }

    public function store(Request $request){

        $request->validate([
            'ciclo' => ['required', 'string', 'max:250'],
            'disp' =>  ['required', 'string', 'max:250'],
            'preco' => ['required', 'string', 'max:100'],
        ]);

        $disciplinaID = Disciplinas::where('descricao', $request['disp'])->get();

        Profdisp::create([
            'fk_user' => auth()->user()->id,
            'fk_disciplina' => $disciplinaID[0]->id,
            'ciclo_p' => $request['ciclo'],
            'preco' => $request['preco'],
        ]);

        return redirect()->route('index')->with('status','Disp listada');
    }
}
