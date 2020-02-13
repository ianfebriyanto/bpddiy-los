<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kewenangan extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kewenangan_model');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['tittle'] = 'LOS';
		$data['kewenangan'] = $this->Kewenangan_model->readData();
		$data['namaMenu'] = $this->Kewenangan_model->readNamaMenu();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('kewenangan', $data);
		$this->load->view('templates/footer');
	}
	public function createAct()
	{
		$data = [
			"GRUP_ID" => $this->input->post('GRUP_ID'),
			"MENU_ID" => $this->input->post('MENU_ID'),
			"CREATE" => $this->input->post('CREATE'),
			"UPDATE" => $this->input->post('UPDATE'),
			"DELETE" => $this->input->post('DELETE')
		];
		$this->Kewenangan_model->createData($data);
		redirect('kewenangan');
	}
	public function updateAct()
	{
		$id = $this->input->post('KEWENANGAN_ID');
		$data = [
			"GRUP_ID" => $this->input->post('GRUP_ID'),
			"MENU_ID" => $this->input->post('MENU_ID'),
			"CREATE" => $this->input->post('CREATE'),
			"UPDATE" => $this->input->post('UPDATE'),
			"DELETE" => $this->input->post('DELETE')
		];
		$this->Kewenangan_model->updateData($id, $data);
		redirect('kewenangan');
	}
	public function deleteAct()
	{
		$id = $this->input->post('KEWENANGAN_ID');
		$data['kewenangan'] = $this->Kewenangan_model->deleteData($id);
		redirect('kewenangan');
	}
}
