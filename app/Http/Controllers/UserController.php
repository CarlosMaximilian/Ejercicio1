<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function index(){
        // $users = "Hola desde el UserController";
        // dd($users);
        $users = User::all();
        return view('users.index',['users' => $users]);
    }
}
