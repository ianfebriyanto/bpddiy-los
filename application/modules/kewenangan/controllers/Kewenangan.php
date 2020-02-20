<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kewenangan extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kewenangan_model');
	}
	public function index()
	{
		$data['style']  = $this->load->view('style', '', true);
		$data['script']  = $this->load->view('script', '', true);
		$data['kewenangan'] = $this->Kewenangan_model->readData();
		$GRUP_ID = $this->session->userdata('GRUP_ID');
		$data['namaMenu'] = $this->Kewenangan_model->readMenu($GRUP_ID);
		$this->template->load('master_dashboard', 'index', $data);
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
