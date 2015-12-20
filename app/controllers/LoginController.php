<?php

class LoginController extends BaseController{
    public function getIndex(){
        return View::make('login.index');
    }
    
    public function postSignIn(){
        $username = Input::get('username');
        $password = Input::get('password');
        if (Auth::attempt(array('username' => $username, 'password' => $password))) {
            return Redirect::to('/');
        }else{
            return Redirect::to('login')->with('error', 'Kombinasi email dan Password Salah');
        }
    }
    
    public function getSignOut(){
        Auth::logout();
        return Redirect::to('login')->with('success', 'Anda telah keluar');
    }
}
