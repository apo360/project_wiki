<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disciplinas;
use App\Models\Profdisp;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\JoinClause;

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

        $DispProf = Profdisp::join('professors', 'professors.id', '=', 'profdisps.fk_professor')
                                ->join('users', 'users.id', '=', 'professors.fk_user')
                                ->join('cities', 'cities.id', 'users.city_id')
                                ->where('profdisps.fk_disciplina', $disciplinaID[0]->id)->get();

        return view('apoio_academico.perfil_disciplina',[
            'disciplinaID' => $DispProf,
            'DisciplinaDesc' => $disciplina
        ]);
    }
}
