<?php

class RegisterController extends \BaseController {

	public function getIndex()
	{
			$data = array(
			'title' => 'HALAMAN REGISTRASI',
			'action' => URL::to('/register/save-new')
			);
		return View::make('register.index', $data);
	}
	
	public function postSaveNew(){
		$users =new User();
		$users->name = Input::get('name');
		$users->email = Input::get('email');
		$users->username = Input::get('username');
		$users->password = Hash::make(Input::get('password'));
		$users->sek = Input::get('sek');
		$users->alamat = Input::get('alamat');
		$users->telpon = Input::get('telpon');
	
		
		if($users->save()){
			return Redirect::to('login')->with('success', ' Anda Berhasil Daftar Silahkan Login Dengan');
		}else{
			return Redirect::to('login')->with('error', 'Anda Gagal Daftar Silahkan Ulangi lagi');
		}
	}


}
