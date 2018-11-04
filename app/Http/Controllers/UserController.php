<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\RegisterUserRequest;

class UserController extends Controller
{
    
    public function edit($id){
        $user = User::user($id);
        
        return view('username.edit',['user'=>$user]);
    }

    public function update(RegisterUserRequest $request){
        
         User::updateUser($request->validated());

         return redirect()->route('home');
        
    }
}
