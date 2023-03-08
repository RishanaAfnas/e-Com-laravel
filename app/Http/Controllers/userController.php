<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

use App\MOdels\User;

class userController extends Controller
{
   function login(Request $req)
   {
     $user= User::where(['email'=>$req->email])->first();
    
     if(!$user || !HASH::check($req->password,$user->password))
     {
     
        return "username or password not matching";
     }
     else{
        $req->session()->put('user',$user);
        return redirect('/');
     }
   }
   function register(Request $req)
   {
     $user=new User;
     $user->name=$req->name;
     $user->email=$req->email;
     $user->password=HASH::make($req->password);
     $user->save();
     return redirect('/login');
   }
}
