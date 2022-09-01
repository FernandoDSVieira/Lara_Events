<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(){
        return view("auth.register");
    }

    public function store(Request $request){

        $reqData = $request->all();
        $reqData['role'] = 'participant'; 

        User::create($reqData);
    }
}
