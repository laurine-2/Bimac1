<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirectToHome(Request $request){
    
        if(Auth::check()){
            if(Auth::user()->type == 'admin'){
                
                return redirect()->route('dashboard');
            }
            else{
                return redirect()->route('tests');
            }
        }
        else{
            return redirect()->route('login');
        }
    }
}
