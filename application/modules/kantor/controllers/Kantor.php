<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kantor extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kantor_model');
	}

	public function index()
	{
		$data['style']  = $this->load->view('style', '', true);
		$data['script']  = $this->load->view('script', '', true);
		$data['kantor'] = $this->Kantor_model->readData();
		$GRUP_ID = $this->session->userdata('GRUP_ID');
		$data['namaMenu'] = $this->Kantor_model->readMenu($GRUP_ID);
		$this->template->load('master_dashboard', 'index', $data);
		$kewenangan = in_array(14, array_column($data['namaMenu'], 'MENU_ID'));
		if (!$kewenangan) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Anda tidak memiliki kewenangan untuk mengakses menu tersebut. </div>');
			redirect('dashboard');
		}
	}
	public function createAct()
	{
		$this->form_validation->set_rules('PARENT', 'PARENT', 'required|trim');
		$this->form_validation->set_rules('LEVEL', 'LEVEL', 'required|trim');
		$this->form_validation->set_rules('NAME', 'NAME', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->index();
		} else {
			$data = [
				"PARENT" => $this->input->post('PARENT'),
				"LEVEL" => $this->input->post('LEVEL'),
				"NAME" => $this->input->post('NAME'),
				"STATUS" => $this->input->post('STATUS')
			];
			$this->Kantor_model->createData($data);
			redirect('kantor');
		}
	}

	public function updateAct()
	{
		$this->form_validation->set_rules('PARENTu', 'PARENT', 'required|trim');
		$this->form_validation->set_rules('LEVELu', 'LEVEL', 'required|trim');
		$this->form_validation->set_rules('NAMEu', 'NAME', 'required|trim');
		$this->form_validation->set_rules('STATUSu', 'STATUS', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->index();
		} else {
			$id = $this->input->post('KD_KANTOR');
			$data = [
				"PARENT" => $this->input->post('PARENTu'),
				"LEVEL" => $this->input->post('LEVELu'),
				"NAME" => $this->input->post('NAMEu'),
				"STATUS" => $this->input->post('STATUSu')
			];
			$this->Kantor_model->updateData($id, $data);
			redirect('kantor');
		}
	}
	public function deleteAct()
	{
		$id = $this->input->post('KD_KANTOR');
		$data['Kantor'] = $this->Kantor_model->deleteData($id);
		redirect('kantor');
	}
	function get_ajax()
	{

		$list = $this->Kantor_model->get_datatables();
		$data = array();
		$no = @$_POST['start'];
		foreach ($list as $item) {
			$no++;
			$row = array();
			$row[] = $no . ".";
			$row[] = $item->PARENT;
			$row[] = $item->LEVEL;
			$row[] = $item->NAME;
			$row[] = $item->STATUS;
			$row[] = '<button type="button" id="createBtn" name="createBtn" class="btn btn-outline-primary" data-toggle="modal" data-target="#create">Create</button> 
			<button type="button" id="updateBtn" name="updateBtn" class="btn btn-outline-warning" data-toggle="modal" data-target="#update' . $item->KD_KANTOR . '">Update</button>
			<button type="button" id="deleteBtn" name="deleteBtn" class="btn btn-outline-danger" data-toggle="modal" data-target="#delete' . $item->KD_KANTOR . '">Delete</button>';
			$data[] = $row;
		}
		$output = array(
			"recordsTotal" => $this->Kantor_model->count_all(),
			"recordsFiltered" => $this->Kantor_model->count_filtered(),
			"data" => $data,
		);
		echo json_encode($output);
	}
}
