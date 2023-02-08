<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disciplinas;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\File;


class DisciplinasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $discplinas = Disciplinas::all();

        return view('apoio_academico.disciplinas',[
            
            'disciplina' => $discplinas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'ciclo' => ['required', 'string', 'max:25'],
            'disciplina' => ['required', 'string', 'max:255', 'unique'],
        ]);
 
        //$icons = !$request['icon']=null ? $request['icon']->store('icons') : '';
    
        Disciplinas::create([
            'ciclo' => $request['ciclo'],
            'descricao' => $request['disciplina'],
        ]);

        return redirect('admin.disciplinas')->with('status', 'Disciplina Cadastrada!');
    }
}
