<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sistem extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Sistem_model');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['tittle'] = 'LOS';
		$data['sistem'] = $this->Sistem_model->readData();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('sistem', $data);
		$this->load->view('templates/footer');
	}
	public function createAct()
	{
		$id = $this->input->post('SISTEM_ID');
		$data = [
			"SISTEM_NAMA" => $this->input->post('SISTEM_NAMA'),
			"SISTEM_DISKRIPSI" => $this->input->post('SISTEM_DISKRIPSI'),
			"SISTEM_VERSI" => $this->input->post('SISTEM_VERSI')

		];
		$this->Sistem_model->createData($data);
		redirect('sistem');
	}

	public function updateAct()
	{
		$id = $this->input->post('SISTEM_ID');
		$data = [
			"SISTEM_NAMA" => $this->input->post('SISTEM_NAMA'),
			"SISTEM_DISKRIPSI" => $this->input->post('SISTEM_DISKRIPSI'),
			"SISTEM_VERSI" => $this->input->post('SISTEM_VERSI')

		];
		$this->Sistem_model->updateData($id, $data);
		redirect('sistem');
	}
	public function deleteAct()
	{
		$id = $this->input->post('SISTEM_ID');
		$data['Sistem'] = $this->Sistem_model->deleteData($id);
		redirect('sistem');
	}
}
