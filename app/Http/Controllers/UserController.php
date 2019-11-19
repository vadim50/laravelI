<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function action($i=null){


    	if(isset($i)){
    		return view('form')->with('i',$i);
    	} else {
    		$message = 'Пользователь не зарегистрирован!';

    	return view('form')->with('message',$message);
    	}


    	
    	
    }

 

    public function form(Request $request){
    	dump($request->all());
    	$form_message = 'Форма обработана!';

    	return view('form')->with('form_message',$form_message);
    }
}
