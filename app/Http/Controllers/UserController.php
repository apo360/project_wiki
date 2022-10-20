<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    
    public function ShowUser(User $user)
    {
        return view('user', [
            'user' => $user
        ]);

       /*  if ($user->role_id == 1) { //Para Administrador
            return $user->name.' é Adminsitrador';
        }elseif ($user->role_id == 3) { //Para professor
            return $user->name.' é Professor';
        }else { //Para Aluno
            return $user->name.' é Estudante';
        } */
    }

    public function ShowAllUser()
    {
        $users = User::all();

        return view('user', [
            'users' => $users
        ]);
    }
}
