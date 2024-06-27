<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\User;
use Faker\Guesser\Name;

class UserController extends Controller
{
    public function index() {
        return view('home');
    }
    public function register() {
        return view('register');
    }
    public function users($status) {
        $users = User::all();
        return view('users', ['status' => $status], ['users'=> $users]);
    }
    public function store(Request $request) {
        $user = new User;
        $user->name = $request->name." ".$request->lastname;
        $user->email = $request->email;
        $user->status = $request->status;
        
        $user->save();
        return redirect('/register')->with('msg', 'Usuário cadastrado com sucesso');
    }
}
