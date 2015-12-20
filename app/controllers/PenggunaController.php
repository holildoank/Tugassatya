<?php

class PenggunaController extends \BaseController {

	public function getIndex()
	{
		$users = User::all();
			$data = array(
				'title' =>'Pengguna ',
				'new' => URL::to('pengguna/new'),
				'users' => $users,
				'usersCount' => $users->count(),
	            'deleteUrl' => URL::to('pengguna/delete'),
	            'editUrl' => URL::to('pengguna/edit'),
	            'readUrl' => URL::to('pengguna/read'),
				);
			return View::make('pengguna.index', $data);
	}
	
	public function getNew(){
		$data = array(
			'title' => 'Tambah Data Pengguna',
			'action' => URL::to('/pengguna/save-new')
			);
		return View::make('pengguna.new', $data);
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
			return Redirect::to('pengguna')->with('success', ' Anda Berhasil Menambah users');
		}else{
			return Redirect::to('pengguna')->with('error', 'Anda Gagal Menympan Data users');
		}
	}
	public function getEdit($id){
		$users = User::find($id);
		$data = array(
			'title' =>'Edit Data Pengguna',
			'action' => URL::to('pengguna/edit'),
			'users' => $users,
			);
		return View::make('pengguna.new', $data);
	}
	public function postEdit(){
		  $users = User::find(Input::get('id'));
      
		$users->name = Input::get('name');
		$users->email = Input::get('email');
		$users->username = Input::get('username');
		$users->password = Hash::make(Input::get('password'));
		
		$users->sek = Input::get('sek');
		$users->alamat = Input::get('alamat');
		$users->telpon = Input::get('telpon');
	

		if($users->save()){
			return Redirect::to('pengguna')->with('success', ' Anda Berhasil Mengubah Pengguna');
		}else{
			return Redirect::to('pengguna')->with('error', 'Anda Gagal Menympan Data Pengguna');
		}
    }
	public function getDelete($id){
		$users = User::find($id);
		if($users->delete()){
			return Redirect::to('pengguna')->with('success', 'Anda Berhasi Menghapus data Pengguna');
		}else{
			return Redirect::to('pengguna')->with('error', 'Anda gagal menghapus data ini');
		}
	}
}
