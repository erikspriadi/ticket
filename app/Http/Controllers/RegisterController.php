<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'nama'=>'required',
            'username'=>'required',
            'password'=>'required',
            'level'=>'required'
        ]);
        $validateData['password']=bcrypt($validateData['password']);
        Register::create($validateData);
        return redirect()->route('auth.login')->with('success', 'Berhasil Register !!');
    }
}
