<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
	function showindex(){
		return view('index');
	}

	function showproduk(){
		return view('produk');
	}

	function showkategori(){
		return view('kategori');
	}
}