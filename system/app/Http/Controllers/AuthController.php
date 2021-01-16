<?php 

namespace App\Http\Controllers;

class AuthController extends Controller
{
	function showlogin(){
		return view('login');
	}

	function showregister(){
		return view('register');
	}

	function showlogout(){
		return view('logout');
	}
}