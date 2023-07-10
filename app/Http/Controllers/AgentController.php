<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AgentController extends Controller
{

    public function show(){
        $users = User::all();
        return view("admin.agents.index",['users' => $users]);
    }
    public function create(){
        return view('admin.agents.create');
    }



    public function store(Request $request){
  
        $incomingData = $request->validate([
            'first_name' => 'required|min:2|max:50',    
            'last_name' =>'required|min:2|max:50',
            'username' => 'required|min:4|max:50|unique:users',
            'email' => 'required|min:5|max:50|unique:users',
            'phone' => 'required|min:5|max:50',
            'password' => 'required|min:6|max:25|confirmed'
        ]);
    
       $newUser=  User::create([
            'first_name' =>$incomingData['first_name'],
            'last_name' =>$incomingData['last_name'],
            'username' =>$incomingData['username'],
            'email' =>$incomingData['email'],
            'phone' =>$incomingData['phone'],
            'password'=>Hash::make($incomingData['password']),
            'description' =>$request['description'],
            'role_id' =>2,
           
       ]);
    
 
        $newUser->save();
        return redirect()->route('agents.index')->with('success','User Created!');
    }




    public function update(){

        return view('admin.agents.update');
    }
}
