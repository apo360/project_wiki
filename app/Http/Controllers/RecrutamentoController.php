<?php

namespace App\Http\Controllers;

use App\Models\Recrutamento;
use Illuminate\Http\Request;

class RecrutamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/colaboradores/recrutamento');
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
            'nomecompleto' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:recrutamentos'],
            'apelido' => ['required', 'string', 'max:150'],
            'telemovel' => ['required', 'integer'],
            'provincia_id' => ['required', 'integer'],
        ]);

        return Recrutamento::create([
            'nomecompleto' => $request['nomecompleto'],
            'email' => $request['email'],
            'apelido' => $request['apelido'],
            'telemovel' => $request['telemovel'],
            'telemovelalt' => $request['telemovelalt'],
            'provincia_id' => $request['provincia_id'],
            'cidade_id' => $request['cidade_id'],
            'academico_id' => $request['academico'],
            'verificado' => 0,
        ]);

        //return redirect()->route('/colaboradores/recrutamento')->with('success', 'Registo Enviado com Sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recrutamento  $recrutamento
     * @return \Illuminate\Http\Response
     */
    public function show(Recrutamento $recrutamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recrutamento  $recrutamento
     * @return \Illuminate\Http\Response
     */
    public function edit(Recrutamento $recrutamento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recrutamento  $recrutamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recrutamento $recrutamento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recrutamento  $recrutamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recrutamento $recrutamento)
    {
        //
    }
}
