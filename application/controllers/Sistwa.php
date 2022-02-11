<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sistwa extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('AuthModel');
		if(!$this->AuthModel->is_login()){
			redirect('auth/login');
		}
		$this->load->model('SistwaModel');
	}

	public function index()
	{
		$data = $this->SistwaModel->getSistwa();
		// print_r($this->db->last_query()); die();
		$this->load->view('sistwa/index',['data'=>$data]);
	}

	public function error()
	{
		$this->load->view('sistwa/error');
	}

	public function tambah()
	{
		$this->load->view('sistwa/tambah');
	}
	public function action_tambah()
	{
		if($this->SistwaModel->simpan()){
			redirect(base_url('index.php/sistwa/tambah'));
		}else{
			redirect(base_url('index/sistwa/error/'));
		}
	}

	public function edit($id)
	{
		$data = $this->SistwaModel->getData($id);
		$this->load->view('sistwa/edit',['data'=>$data]);
	}
	public function action_edit($id)
	{
		if($this->SistwaModel->edit($id)){
			redirect(base_url('index.php/sistwa/edit/'.$id));
		}else{
			redirect(base_url('index/sistwa/error/'));
		}
	}
	public function action_delete($id)
	{
		if($this->SistwaModel->getDelete($id)){
			redirect(base_url('index.php/sistwa/'));
		}else{
			redirect(base_url('index/sistwa/error/'));
		}
	}
}