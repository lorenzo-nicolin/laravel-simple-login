<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\UserAuths;

class UserAuth extends Controller
{
    //

    function userLogin(Request $req){

        $name = $req->input('user');
        $password = $req->input('password');

        // print_r($name);
        // print_r($password);

        // $users = UserAuths::where('name',$name)
        // ->where('password',$password)
        // ->get();

        $users = DB::table('user_auths')
        ->where('name',$name)
        ->where('password',$password)
        ->count();

        // $users = UserAuths::all();

        // dd($users);

        if($users > 0){
            echo 'user exists';
        }else{
            echo 'user not found';
        }

      



        // print_r($data);

        // $req->session()->put('user',$data['user']);

        // return redirect('profile');

        // echo session('user');

    }
}
