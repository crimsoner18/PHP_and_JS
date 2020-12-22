<?php namespace App\Controllers;
use App\Models\AreaModel;

class Areas extends BaseController
{
	public function __construct() {
			$this->validation =  \Config\Services::validation();
			$this->session = \Config\Services::session();
			$this->area = new AreaModel();
			$this->session->start();
			$this->baseUrl = base_url();
			helper('url');
	}

	public function index(){
		$data['main'] = 'areas/index';

		return view('templates/template',$data);
	}

	public function newArea(){
		$data['main'] = 'areas/create';

		return view('templates/template',$data);
	}

	public function ViewArea($id = null){
		if(!is_null($id)){

			$data['main'] = 'areas/create';
			$data['id']		= $id;
			$data['name'] = $this->area->getAreaName($id);

			return view('templates/in_template',$data);
		}
		else {
			return redirect('areas','refresh');
		}

	}

	public function save(){

		if($this->request->getMethod()==='post'){
			$this->area->save($this->request->getPost());

			return redirect('areas','refresh');
		}
	}



	//--------------------------------------------------------------------

}
