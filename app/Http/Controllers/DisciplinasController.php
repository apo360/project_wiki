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
        //
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
            'codigo' => ['required', 'string', 'max:255'],
            'disciplina' => ['required', 'string', 'max:255', 'unique'],
        ]);

        $icons = !$request['icon']=null ? $request['icon']->store('icons') : '';
    
        Disciplinas::create([
            'codigo' => $request['codigo'],
            'descricao' => $request['disciplina'],
            'icon' => $icons,
        ]);

        //return redirect('/admin/users/')->with('status', 'Registo Enviado com Sucesso!');
    }
}
