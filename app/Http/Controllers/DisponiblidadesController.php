<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use App\Models\Disponiblidades;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DisponiblidadesController extends Controller
{
    
    public function index()
    {
        $fk_professor = Professor::where('fk_user', auth()->user()->id)->get();
        
        $disponibilidades = Disponibilidades::where('professor_id', $fk_professor[0]->id);
        
        return view('teacher.update-profile-professor', [
            "disponibilidades" => $disponibilidades,
        ]);
    }
    
    public function store(Request $request)
    {
        
        $nome_professor = Professor::where('fk_user', auth()->user()->id)->get();
        $dias_semana = $request['dias_semana'];
        
        $dias_semana_string = implode(",", $dias_semana);
        
        // Chama a procedure
        DB::select("CALL registrar_ou_atualizar_disponibilidade(?, ?, ?)", [$nome_professor[0]->id, $request['periodo'], $dias_semana_string]);
        
        /*Disponiblidades::update([
            'professor_id' => $nome_professor[0]->id,
            'periodo' => $request['periodo'],
            'dias_semana' => $dias_semana_string,
        ]);*/
        
    }
}
