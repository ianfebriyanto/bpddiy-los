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
		$data['readKewenangan'] = $this->Kewenangan_model->readKewenangan();
		$data['namaMenuOption'] = $this->Kewenangan_model->readNamaMenu();
		$data['namaGrup'] = $this->Kewenangan_model->readNamaGrup();
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
	function get_ajax()
	{
		$GRUP = $this->input->post('id');
		$list = $this->Kewenangan_model->get_datatables($GRUP);
		$data = array();
		$no = @$_POST['start'];
		foreach ($list as $item) {
			$no++;
			$row = array();
			$row[] = $no . ".";
			$row[] = $item->GRUP_NAMA;
			$row[] = $item->MENU_NAMA;
			$row[] = $item->CREATE;
			$row[] = $item->UPDATE;
			$row[] = $item->DELETE;
			$row[] = '<button type="button" id="createBtn" name="createBtn" class="btn btn-outline-primary" data-toggle="modal" data-target="#create">Create</button> 
			<button type="button" id="updateBtn" name="updateBtn" class="btn btn-outline-warning" data-toggle="modal" data-target="#update' . $item->KEWENANGAN_ID . '">Update</button>
			<button type="button" id="deleteBtn" name="deleteBtn" class="btn btn-outline-danger" data-toggle="modal" data-target="#delete' . $item->KEWENANGAN_ID . '">Delete</button>';
			$data[] = $row;
		}
		$output = array(
			"recordsTotal" => $this->Kewenangan_model->count_all(),
			"recordsFiltered" => $this->Kewenangan_model->count_filtered(),
			"data" => $data,
		);
		echo json_encode($output);
	}
}
