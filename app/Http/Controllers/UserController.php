<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login(Request $req)
    {
        $user = User::where(['email' => $req->email])->first();
        if (!$user || !Hash::check($req->password, $user->password)) {
            return "Username or Password not matched";
        } else {
            $req->session()->put('user', $user);
            return redirect('/');
        }
    }

    function register(Request $req)
    {
        // return $req->input();
        $user = new User;
<<<<<<< HEAD
        $user -> name = $req->name;
        $user -> email = $req->email;
        $user -> password = Hash::make($req->password);
        $user -> save();
        $req->session()->put('user',$user);
        return redirect('/');
    }

=======
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->save();
        return redirect('/login');
    }
>>>>>>> 04d1b5c67fe9383007ab6c55dcc03d2474b01969
}
