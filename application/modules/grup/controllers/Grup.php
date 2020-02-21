<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Grup extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Grup_model');
	}

	public function index()
	{
		$data['style']  = $this->load->view('style', '', true);
		$data['script']  = $this->load->view('script', '', true);
		$data['grup'] = $this->Grup_model->readData();
		$GRUP_ID = $this->session->userdata('GRUP_ID');
		$data['USERNAME'] = $this->session->userdata('USERNAME');
		$data['namaMenu'] = $this->Grup_model->readMenu($GRUP_ID);
		$this->template->load('master_dashboard', 'index', $data);
	}

	public function createAct()
	{
		$this->form_validation->set_rules('GRUP_NAMA', 'GRUP_NAMA', 'required|trim');
		$this->form_validation->set_rules('GRUP_DISKRIPSI', 'GRUP_DISKRIPSI', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->index();
		} else {
			$data = [
				"GRUP_NAMA" => $this->input->post('GRUP_NAMA'),
				"GRUP_DISKRIPSI" => $this->input->post('GRUP_DISKRIPSI'),
			];
			$this->Grup_model->createData($data);
			redirect('grup');
		}
	}
	public function updateAct()
	{
		$this->form_validation->set_rules('GRUP_NAMAu', 'GRUP_NAMA', 'required|trim');
		$this->form_validation->set_rules('GRUP_DISKRIPSIu', 'GRUP_DISKRIPSI', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->index();
		} else {
			$id = $this->input->post('GRUP_ID');
			$data = [
				"GRUP_NAMA" => $this->input->post('GRUP_NAMAu'),
				"GRUP_DISKRIPSI" => $this->input->post('GRUP_DISKRIPSIu'),
			];
			$this->Grup_model->updateData($id, $data);
			redirect('grup');
		}
	}
	public function deleteAct()
	{
		$id = $this->input->post('GRUP_ID');
		$data['grup'] = $this->Grup_model->deleteData($id);
		redirect('grup');
	}
}
