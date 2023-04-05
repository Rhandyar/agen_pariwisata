<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller

{ 
    public function index()
    {
        $datas=User::all();
        return view('dashboard.users.index', ['title' => 'users' ,'datas' => $datas]);
    }
    public function create(Request $request)
    {
        $validation=$request->validate([
            'email' => 'required|unique:users|email:rfc,dns',
            'password' => 'required',
            'level' => 'required|in:operator, pelanggan, pemilik',
        ]);

        $validation['password']=bcrypt($request->password);
        user::create($validation);
    }
    public function delete(User $user)
    {
        $user->delete();
    }

    public function update(User $user, Request $request){
        $validation=$request->validate([
            'email' => 'required|unique:users|email:rfc,dns',
            'password' => 'required',
            'level' => 'required|in:operator, pelanggan, pemilik',
        ]);
        $user->update($validation);
    }
}
