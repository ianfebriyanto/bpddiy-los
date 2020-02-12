<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['user'] = $this->User_model->readData();
		$this->load->view('templates/header', $data);
		$this->load->view('user', $data);
	}
	public function createAct()
	{
		$data = [
			"USERNAME" => $this->input->post('USERNAME'),
			"PASSWORD" => $this->input->post('PASSWORD'),
			"NAMA_LENGKAP" => $this->input->post('NAMA_LENGKAP'),
			"EMAIL" =>$this->input->post('EMAIL'),
			"HOST" =>$this->input->post('HOST'),
			"DATE_CREATE" =>$this->input->post('DATE_CREATE'),
			"STATUS" =>$this->input->post('STATUS')
		];

		$this->User_model->createData($data);
		redirect('user');
	}

		public function updateAct()
	{
		$id = $this->input->post('USER_ID');
		$data = [
			"USERNAME" => $this->input->post('USERNAME'),
			"PASSWORD" => $this->input->post('PASSWORD'),
			"NAMA_LENGKAP" => $this->input->post('NAMA_LENGKAP'),
			"EMAIL" =>$this->input->post('EMAIL'),
			"HOST" =>$this->input->post('HOST'),
			"DATE_CREATE" =>$this->input->post('DATE_CREATE'),
			"STATUS" =>$this->input->post('STATUS'),
		];
		$this->User_model->updateData($id, $data);
		redirect('USER');
	}
	public function deleteAct()
	{
		$id = $this->input->post('USER_ID');
		$data['grup'] = $this->User_model->deleteData($id);
		redirect('grup');
	}
}
