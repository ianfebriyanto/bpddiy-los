<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Profile_model');
	}

	public function index()
	{
		$data['style']  = $this->load->view('style', '', true);
		$data['script']  = $this->load->view('script', '', true);
		$data['profile'] = $this->Profile_model->readData();
		$data['namaMenu'] = readMenu();
		$this->template->load('master_dashboard', 'index', $data);
	}
	public function updateAct()
	{
		$this->form_validation->set_rules('USERNAMEu', 'USERNAME', 'required|trim');
		$this->form_validation->set_rules('NAMA_LENGKAPu', 'NAMA_LENGKAP', 'required|trim');
		$this->form_validation->set_rules('EMAILu', 'EMAIL', 'required|trim|valid_email');
		if ($this->form_validation->run() == false) {
			$this->index();
		} else {
			$id = $this->input->post('USER_ID');
			$data = [
				"USERNAME" => $this->input->post('USERNAMEu'),
				"NAMA_LENGKAP" => $this->input->post('NAMA_LENGKAPu'),
				"EMAIL" => $this->input->post('EMAILu'),
			];
			$this->Profile_model->updateData($id, $data);
			redirect('profile');
		}
	}
}
