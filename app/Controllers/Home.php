<?php namespace App\Controllers;
use App\Models\UserModel;

class Home extends BaseController
{
	public function __construct() {
			$this->validation =  \Config\Services::validation();
			$this->session = \Config\Services::session();
			$this->session->start();
			$this->baseUrl = base_url();
			helper('url');
	}

	public function index(){
		$data['main'] = 'index';

		return view('templates/template',$data);
	}

	public function login(){
		$this->user = new UserModel();

		if($this->request->getMethod()==='post'){
			$items['email'] 		= $this->request->getPost('email');
			$items['password']	= $this->request->getPost('password');

			$loginData = $this->user->login($items);

			if(!is_null($loginData)){
				foreach ($loginData as $data):
					$_SESSION['name'] = $data['name'];
					$_SESSION['uid']  = $data['id'];
				endforeach;

					return redirect('areas','refresh');
			}
			else{
				return redirect('login','refresh');
			}
		}
	}

	public function logout(){
        $session_items = array('uname', 'uid');
        $this->session->remove($session_items);
        $this->session->setFlashdata('msg', '<div class="alert alert-danger text-center">Logged out Sucessfully !</div>');

        return redirect('login','refresh');
	}



	//--------------------------------------------------------------------

}
