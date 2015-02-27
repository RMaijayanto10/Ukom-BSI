<?php
 
class UserController extends \BaseController {
 
    public function login()
    {
                    return View::make('login');
    }
	
	public function authenticate() {
	if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password'))))
		{
		   return Redirect::to('login')->with('pesan_error', 'Login gagal, email atau password salah!');
		}
		else{
          return Redirect::to('Adminmenu')->with('pesan_error', 'Login berhasil');
		}
	}

	
 
 
    public function logout()
    {
        Auth::logout();
        return Redirect::to('login');
    }
 
}