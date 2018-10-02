<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function register(Request $request)
    {
    	session(['name' => $request->name]);
    	$data = array(
            'title'=>'My App',
            'Description'=>'This is New Application',
            'author'=>$request->name
            );
        //return view('thanks')->with($data);
        return view('thanks');
    }
}
