<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ConfirmsPasswords;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ConfirmPasswordController extends Controller
{
    public function confirmpassword($token = null){
        if($token == null){

            return response()->json(['warning' => 'Invalid Token !']);
        }

        $user = User::where('remember_token', $token)->first();

        if($user == null){
            return response()->json(['warning' => 'Invalid Token !']);
        }else{
            
            return response()->json(['user' => $user]);
        }
        
    }
    public function changepassword(Request $request){

    }
}
