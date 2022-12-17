<?php

namespace App\Http\Controllers\Teachers;

use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Professor;
use App\Models\GrauAcademicos;

class ProfessorController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function index(){

        $data2['grau'] = GrauAcademicos::all();
        $data['prof'] = Professor::where('fk_user', '=', auth()->user()->id)->get();

        return view('teacher.update-profile-professor',$data, $data2);
        
        return view();
    }

    public function PerfilShow($disciplina,$id){

        $prof = Professor::join('users', 'users.id', 'professors.fk_user')
                                ->join('cities', 'cities.id', 'users.city_id')
                                ->join('roles', 'roles.id', 'users.role_id')
                                ->where('users.id', $id)->get();

        return view('teacher.perfil_explicador',[
            'ProfID' => $prof
        ]);
    }

    public function update(Professor $professor, Request $request){

        $request->validate([
            'formacao_academica' => ['required', 'string', 'max:255'],
            'id' => [Rule::unique('professors')->ignore($professor->id)],
        ]);

        $professor->where('id', $request['ProfessorID'])->update([
            'formacao_academica' => $request['formacao_academica'],
        ]);

        return redirect()->route('UpdateProfessor')->with('status', 'Registo Enviado com Sucesso!');
    }
}
