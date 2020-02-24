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
	function get_ajax()
	{
		$list = $this->Grup_model->get_datatables();
		$data = array();
		$no = @$_POST['start'];
		foreach ($list as $item) {
			$no++;
			$row = array();
			$row[] = $no . ".";
			$row[] = $item->GRUP_NAMA;
			$row[] = $item->GRUP_DISKRIPSI;
			$row[] = '<button type="button" id="createBtn" name="createBtn" class="btn btn-outline-primary" data-toggle="modal" data-target="#create">Create</button>
					<button type="button" id="updateBtn" name="updateBtn" class="btn btn-outline-warning" data-toggle="modal" data-target="#update' . $item->GRUP_ID . '">Update</button>
					<button type="button" id="deleteBtn" name="deleteBtn" class="btn btn-outline-danger" data-toggle="modal" data-target="#delete' . $item->GRUP_ID . '">Delete</button>';
			$data[] = $row;
		}
		$output = array(
			"recordsTotal" => $this->Grup_model->count_all(),
			"recordsFiltered" => $this->Grup_model->count_filtered(),
			"data" => $data,
		);
		echo json_encode($output);
	}
}
