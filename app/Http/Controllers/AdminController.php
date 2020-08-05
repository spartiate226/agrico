<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    /**
     * AdminController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    function create(){
        return view('admin.profile');
    }
    function update($user_id,Request $request){
        $data=$request->validate([
            'email'=>"bail|required|email",
            'name'=>'bail|required'
        ]);
        $user=User::find($user_id);
        $user->update($data);
        return redirect()->route('Admin.create')->with(['reponse'=>'informations changees']);
    }

    function Passupdate($user_id,Request $request){
        $data=$request->validate([
            'password'=>'bail|required',
            'password_confirm'=>'bail|required'
        ]);
        if ($request->password==$request->password_confirm){
            $user=User::find($user_id);
            $user->update(['password'=>Hash::make($request->password)]);
            return redirect()->route('Admin.create')->with(['reponse'=>'Mot de passe change']);
        }else{
            return redirect()->route('Admin.create')->with(['pwdNotmatch'=>'Les mots de passe ne correspondent pas']);
        }
    }
}
