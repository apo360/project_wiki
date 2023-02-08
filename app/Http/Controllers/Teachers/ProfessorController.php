<?php

namespace App\Http\Controllers\Teachers;

use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Professor;
use App\Models\GrauAcademicos;
use App\Models\Message;

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
        $professor = Professor::where('fk_user', auth()->user()->id)->get();

        return view('teacher.update-profile-professor',[
            'UpdateProf' => $professor
        ]);
    }

    public function PerfilShow($id){

        $prof = Professor::join('users', 'users.id', 'professors.fk_user')
                                ->join('cities', 'cities.id', 'users.city_id')
                                ->join('roles', 'roles.id', 'users.role_id')
                                ->where('users.id', $id)->get();

        return view('teacher.perfil_explicador',[
            'ProfID' => $prof
        ]);
    }

    public function update(Request $request){

        $request->validate([
            'formacao_academica' => ['required', 'string', 'max:255'],
            //'id' => [Rule::unique('professors')->ignore($professor->id)],
        ]);

        Professor::where('id', $request['ProfessorID'])->update([
            'formacao_academica' => $request['formacao_academica'],
            'descricao_professor' => $request['descricao'],
            'fk_grau_academico' => $request['grau_academico'],
            'isonline' => $request['isonline'],
            
        ]);
    }
    
    public function respondMessage($id)
    {
        $message = Message::find($id);
        return view('teacher.respond-message', compact('message'));
    }
    
    public function sendResponse(Request $request, $id)
    {
        $message = Message::find($id);
        $message->response = $request->input('response');
        $message->status = 'respondida';
        $message->save();
        return redirect()->route('teacher.pending-messages')->with('success', 'Resposta enviada com sucesso!');
    }

}
