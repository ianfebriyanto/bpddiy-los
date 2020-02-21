<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sistem extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Sistem_model');
	}
	public function index()
	{
		$data['style']  = $this->load->view('style', '', true);
		$data['script']  = $this->load->view('script', '', true);
		$data['sistem'] = $this->Sistem_model->readData();
		$GRUP_ID = $this->session->userdata('GRUP_ID');
		$data['namaMenu'] = $this->Sistem_model->readMenu($GRUP_ID);
		$this->template->load('master_dashboard', 'index', $data);
	}
	public function createAct()
	{
		$this->form_validation->set_rules('SISTEM_NAMA', 'SISTEM_NAMA', 'required|trim');
		$this->form_validation->set_rules('SISTEM_DISKRIPSI', 'SISTEM_DISKRIPSI', 'required|trim');
		$this->form_validation->set_rules('SISTEM_VERSI', 'SISTEM_VERSI', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->index();
		} else {
			$data = [
				"SISTEM_NAMA" => $this->input->post('SISTEM_NAMA'),
				"SISTEM_DISKRIPSI" => $this->input->post('SISTEM_DISKRIPSI'),
				"SISTEM_VERSI" => $this->input->post('SISTEM_VERSI')
			];
			$this->Sistem_model->createData($data);
			redirect('sistem');
		}
	}

	public function updateAct()
	{
		$this->form_validation->set_rules('SISTEM_NAMAu', 'SISTEM_NAMA', 'required|trim');
		$this->form_validation->set_rules('SISTEM_DISKRIPSIu', 'SISTEM_DISKRIPSI', 'required|trim');
		$this->form_validation->set_rules('SISTEM_VERSIu', 'SISTEM_VERSI', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->index();
		} else {
			$id = $this->input->post('SISTEM_ID');
			$data = [
				"SISTEM_NAMA" => $this->input->post('SISTEM_NAMAu'),
				"SISTEM_DISKRIPSI" => $this->input->post('SISTEM_DISKRIPSIu'),
				"SISTEM_VERSI" => $this->input->post('SISTEM_VERSIu')
			];
			$this->Sistem_model->updateData($id, $data);
			redirect('sistem');
		}
	}
	public function deleteAct()
	{
		$id = $this->input->post('SISTEM_ID');
		$data['Sistem'] = $this->Sistem_model->deleteData($id);
		redirect('sistem');
	}
}
