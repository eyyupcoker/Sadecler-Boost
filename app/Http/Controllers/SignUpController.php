<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SignUpController extends Controller
{
    public function signup() {
        return view ('/signup');
    }
    public function store(Request $request)
    {
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $email = $request->input('email');
        $password = bcrypt($request->input('password'));
        $phone = $request->input('phone');
        $data = array('first_name' => $first_name, 'last_name' => $last_name, 'email' => $email, 'password' => $password, 'phone' => $phone,);
        DB::table('users')->insert($data);
        return redirect('signin')->with('status', 'register post form data has been inserted');
    }
}
