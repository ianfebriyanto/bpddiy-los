<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Grup extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Grup_model');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['tittle'] = 'LOS';
		$data['grup'] = $this->Grup_model->readData();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('grup', $data);
		$this->load->view('templates/footer');
	}
	public function createAct()
	{
		$data = [
			"GRUP_NAMA" => $this->input->post('GRUP_NAMA'),
			"GRUP_DISKRIPSI" => $this->input->post('GRUP_DISKRIPSI'),
		];
		$this->Grup_model->createData($data);
		redirect('grup');
	}
	public function updateAct()
	{
		$id = $this->input->post('GRUP_ID');
		$data = [
			"GRUP_NAMA" => $this->input->post('GRUP_NAMA'),
			"GRUP_DISKRIPSI" => $this->input->post('GRUP_DISKRIPSI'),
		];
		$this->Grup_model->updateData($id, $data);
		redirect('grup');
	}
	public function deleteAct()
	{
		$id = $this->input->post('GRUP_ID');
		$data['grup'] = $this->Grup_model->deleteData($id);
		redirect('grup');
	}
}
