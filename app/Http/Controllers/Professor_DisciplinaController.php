<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Professor_DisciplinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $discp_prof = Professor_Discplina::all();

        return $discp_prof;
    }
}
