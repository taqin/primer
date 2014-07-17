<?php


class SessionsController extends BaseController {

	public function create()
	{
		$title = 'Login';

		return View::make('sessions.create')->with('title', $title);
	}

	public function store()
	{

		// Validation

		if (Auth::attempt(Input::only('email','password')))
		{
			return Redirect::intended('/admin');
		}

		return Redirect::back()->with('flash_message','Wrong Password or Email');
	}



	public function destroy()
	{
		Auth::logout();

		return Redirect::to('login')->with('flash_message','Sign Out, Goodbye');
	}

 
}