<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}

	public function index()
	{
		$data['style']  = $this->load->view('style', '', true);
		$data['script']  = $this->load->view('script', '', true);
		$data['user'] = $this->User_model->readData();
		$GRUP_ID = $this->session->userdata('GRUP_ID');
		$data['namaMenu'] = $this->User_model->readMenu($GRUP_ID);
		$data['namaGrup'] = $this->User_model->readNamaGrup();
		$this->template->load('master_dashboard', 'index', $data);
	}

	public function createAct()
	{
		$this->form_validation->set_rules('USERNAME', 'USERNAME', 'required|trim');
		$this->form_validation->set_rules('PASSWORD', 'PASSWORD', 'required|trim');
		$this->form_validation->set_rules('NAMA_LENGKAP', 'NAMA_LENGKAP', 'required|trim');
		$this->form_validation->set_rules('EMAIL', 'EMAIL', 'required|trim|valid_email');
		if ($this->form_validation->run() == false) {
			$this->index();
		} else {
			$data = [
				"USERNAME" => htmlspecialchars($this->input->post('USERNAME')),
				"PASSWORD" => password_hash($this->input->post('PASSWORD'), PASSWORD_DEFAULT),
				"NAMA_LENGKAP" => $this->input->post('NAMA_LENGKAP'),
				"EMAIL" => htmlspecialchars($this->input->post('EMAIL')),
				"HOST" =>  $this->input->ip_address(),
				"DATE_CREATE" => date('Y-m-d H:i:s'),
				"STATUS" => $this->input->post('STATUS'),
				"GRUP_ID" => $this->input->post('GRUP_ID')
			];
			$this->User_model->createData($data);
			redirect('user');
		}
	}

	public function updateAct()
	{
		$this->form_validation->set_rules('USERNAMEu', 'USERNAME', 'required|trim');
		$this->form_validation->set_rules('PASSWORDu', 'PASSWORD', 'required|trim');
		$this->form_validation->set_rules('NAMA_LENGKAPu', 'NAMA_LENGKAP', 'required|trim');
		$this->form_validation->set_rules('EMAILu', 'EMAIL', 'required|trim|valid_email');
		if ($this->form_validation->run() == false) {
			$this->index();
		} else {
			$id = $this->input->post('USER_ID');
			$data = [
				"USERNAME" => $this->input->post('USERNAMEu'),
				"PASSWORD" => $this->input->post('PASSWORDu'),
				"NAMA_LENGKAP" => $this->input->post('NAMA_LENGKAPu'),
				"EMAIL" => $this->input->post('EMAILu'),
				"HOST" =>  $this->input->ip_address(),
				"DATE_CREATE" => $this->input->post('DATE_CREATE'),
				"STATUS" => $this->input->post('STATUS'),
				"GRUP_ID" => $this->input->post('GRUP_ID')
			];
			$this->User_model->updateData($id, $data);
			redirect('user');
		}
	}
	public function deleteAct()
	{
		$id = $this->input->post('USER_ID');
		$data['user'] = $this->User_model->deleteData($id);
		redirect('user');
	}
}
