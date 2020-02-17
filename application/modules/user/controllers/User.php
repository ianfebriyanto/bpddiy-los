<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends MY_Controller
{

	public function __construct()
	{
		ini_set('date.timezone', 'Asia/Jakarta');
		parent::__construct();
		$this->load->model('User_model');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['tittle'] = 'LOS';
		$data['user'] = $this->User_model->readData();
		$data['namaGrup'] = $this->User_model->readNamaGrup();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('user', $data);
		$this->load->view('templates/footer');
	}
	public function createAct()
	{
		$data = [
			"USERNAME" => $this->input->post('USERNAME'),
			"PASSWORD" => password_hash($this->input->post('PASSWORD'), PASSWORD_DEFAULT),
			"NAMA_LENGKAP" => $this->input->post('NAMA_LENGKAP'),
			"EMAIL" => $this->input->post('EMAIL'),
			"HOST" =>  $this->input->ip_address(),
			"DATE_CREATE" => date('Y-m-d H:i:s'),
			"STATUS" => $this->input->post('STATUS'),
			"GRUP_ID" => $this->input->post('GRUP_ID')
		];

		$this->User_model->createData($data);
		redirect('user');
	}

	public function updateAct()
	{
		$id = $this->input->post('USER_ID');
		$data = [
			"USERNAME" => $this->input->post('USERNAME'),
			"PASSWORD" => password_hash($this->input->post('PASSWORD'), PASSWORD_DEFAULT),
			"NAMA_LENGKAP" => $this->input->post('NAMA_LENGKAP'),
			"EMAIL" => $this->input->post('EMAIL'),
			"HOST" =>  $this->input->ip_address(),
			"DATE_CREATE" => $this->input->post('DATE_CREATE'),
			"STATUS" => $this->input->post('STATUS'),
			"GRUP_ID" => $this->input->post('GRUP_ID')
		];
		$this->User_model->updateData($id, $data);
		redirect('user');
	}
	public function deleteAct()
	{
		$id = $this->input->post('USER_ID');
		$data['user'] = $this->User_model->deleteData($id);
		redirect('user');
	}
}
