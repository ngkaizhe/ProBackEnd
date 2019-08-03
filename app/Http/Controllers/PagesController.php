<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function welcome()
    {
    	$tasks = [
		'Do thing1',
		'Do thing2',
		'Do thing3',
		];

	    return view('welcome', [
	    	'tasks' => $tasks,
	    ]);
    }

    public function contact()
    {
    	# code...
    	return view('contact');
    }

    public function about()
    {
    	# code...
    	return view('about');
    }

}
