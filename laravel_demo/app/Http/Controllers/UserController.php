<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function index() {
    	return view('admin.dashboard');
    }

    public function listUsers() {
    	return view('admin.user.list_users');
    }

    public function getAddUser() {
    	return view('admin.user.add_user');
    }

    public function addUser( Request $request ) {
    	$name = $request->name;
    	$email = $request->email;
    	$password = Hash::make($request->password);
    	DB::table('users')->insert([
    		'name' => $name,
    		'email' => $email,
    		'password' => $password,
    	]);
    }
}
