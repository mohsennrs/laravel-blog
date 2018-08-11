<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistartionForm;

class RegisterationController extends Controller
{
    public function create()
    { 
    	return view('users.create');
    }
  	public function store(RegistartionForm $request) 
  	{
      $request->persist();
      session()->flash('message','Thank you so much for registration.');
  		return redirect('/');
    }
}
