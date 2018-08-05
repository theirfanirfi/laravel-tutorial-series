<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
	
	public function index()
	{
		$data['n'] = "My name is Irfan ullah";
		$data['s'] = "This is laravel seventh class";
		$x = 6;
		if($x > 0)
		{
			$data['logic'] = "The value is greater than zero";
		}
		else
		{
			$data['logic']= "The value is less or equal to zero";
		}
		$arr = array('Pakistan','Afghanistan','India','Iran','China','Russia');
		$data['countries'] = '';
		$data['y'] = 10;
		return view('home',$data);
	}
	public function second()
	{
		echo "this is the second function";
	}
	
	public function display()
	{
		return view('display');
	}
}
