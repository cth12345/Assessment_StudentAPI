<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PassportController extends Controller
{
    public function register(Request $request){
        $this->validate($request,[
            'name'=>'required|string|max:30',
            'email'=>'required|string|email|unique:users',
            'password'=>'required|string|min:8',
        ]);
        $user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
        ]);
        $token = $user->createToken('PassportAuth')->accessToken;
 
        return response()->json(['token' => $token], 200);
    }

    public function login(Request $request){
        $credentials=[
            'email'=> $request->email,
            'password'=> $request->password,
        ];
        
        if (auth()->attempt($credentials)){
            $token=auth()->user()->createToken('PassportAuth')->accessToken;
            return response()->json(['token'=> $token],'200');
        }
        else{
            return response()->json(['error'=>'Unauthorized'],400);
        }
    }
}
