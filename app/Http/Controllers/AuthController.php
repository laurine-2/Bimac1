<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login(Request $request){
        
        $b_mat = $request['b_mat'];
        $password = $request['password'];


        if(Auth::attempt(['b_mat' => $b_mat, 'password' => $password],true)){
            
            return redirect()->route('home');
        }

        return redirect()->back()->withErrors(['error_login'=>'B0 number or password is wrong']);
    }

    public function register(Request $request){
        
        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        $email = $request['email'];
        $b_mat = $request['b_mat'];
        $password = $request['password'];

        $user = new User();

        $user->first_name = $first_name;
        $user->last_name = $last_name;
        $user->email = $email;
        $user->b_mat = $b_mat;
        $user->password = bcrypt($password);

        try {
            
            $user->save();

            if(Auth::attempt(['b_mat' => $b_mat, 'password' => $password])){
                return redirect()->route('home');
            }
    
            return redirect()->route('login')->withErrors(['error_login'=>'B0 number or password is wrong']);
            
        } catch (\Illuminate\Database\QueryException $e) {
        
            if(Str::contains($e->getMessage(), ["Integrity constraint violation"])){
                return redirect()->back()->withErrors(['error_register'=>'B0 number already exists']);
            }
            else{
                return 'Cool';
                return redirect()->back()->withErrors(['error_register'=>'An error occurred']);
            }
            
        }        
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect()->route('login');
    }
}
