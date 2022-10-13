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
    }

    public function ShowAllUser()
    {
        $users = User::all();

        return view('user', [
            'users' => $users
        ]);
    }
}
