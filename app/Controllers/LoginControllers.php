<?php

namespace App\Controllers;
use App\Models\UsersModel;

class LoginControllers extends BaseController
{
    public function index()
    {
        if(session()->has('username')){
			return redirect()->to('/');
		}
        return view("login_view");
    }
    public function auth(){
	    $usersModel = new UsersModel();
		$username = $this->request->getPost('username');
	    $password = $this->request->getPost('password');
	    $user = $usersModel->where(
            array(
                'username'=> $username,
                'password'=> $password,
            )
            
            )->first();

	    if(empty($user)){
	    	session()->setFlashdata('message', 'Username atau Password Salah');
	    	return redirect()->to('/login');
	    }
	    if($user['password']!=$password){
	    	session()->setFlashdata('message', 'Username atau Password Salah');
	    	return redirect()->to('/login');
	    }
	    session()->set('username',$username);
	    return redirect()->to('/');
	}
	public function logout(){
		session()->remove('username');
		return redirect()->to('/login');
	}
}
