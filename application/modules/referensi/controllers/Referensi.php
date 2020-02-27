<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Referensi extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Referensi_model');
	}

	public function index()
	{
		$data['style']  = $this->load->view('style', '', true);
		$data['script']  = $this->load->view('script', '', true);
		$data['referensi'] = $this->Referensi_model->readData();
		$GRUP_ID = $this->session->userdata('GRUP_ID');
		$data['USERNAME'] = $this->session->userdata('USERNAME');
		$data['namaMenu'] = $this->Referensi_model->readMenu($GRUP_ID);
		$this->template->load('master_dashboard', 'index', $data);
				$kewenangan = in_array(13, array_column($data['namaMenu'], 'MENU_ID'));
		if (!$kewenangan) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Anda tidak memiliki kewenangan untuk mengakses menu tersebut. </div>');
			redirect('dashboard');
		}
	}

	public function createAct()
	{
		$this->form_validation->set_rules('GROUP_ID', 'GROUP_ID', 'required|trim');
		$this->form_validation->set_rules('REF', 'REF', 'required|trim');
		$this->form_validation->set_rules('DESC', 'DESC', 'required|trim');
		$this->form_validation->set_rules('GROUP_ID2', 'GROUP_ID2', 'required|trim');
		$this->form_validation->set_rules('REF2', 'REF2', 'required|trim');
		$this->form_validation->set_rules('DESC2', 'DESC2', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->index();
		} else {
			$data = [
				"GROUP_ID" => $this->input->post('GROUP_ID'),
				"REF" => $this->input->post('REF'),
				"DESC" => $this->input->post('DESC'),
				"GROUP_ID2" => $this->input->post('GROUP_ID2'),
				"REF2" => $this->input->post('REF2'),
				"DESC2" => $this->input->post('DESC2'),
			];
			$this->Referensi_model->createData($data);
			redirect('referensi');
		}
	}
	public function updateAct()
	{
		$this->form_validation->set_rules('GROUP_IDu', 'GROUP_ID', 'required|trim');
		$this->form_validation->set_rules('REFu', 'REF', 'required|trim');
		$this->form_validation->set_rules('DESCu', 'DESC', 'required|trim');
		$this->form_validation->set_rules('GROUP_ID2u', 'GROUP_ID2', 'required|trim');
		$this->form_validation->set_rules('REF2u', 'REF2', 'required|trim');
		$this->form_validation->set_rules('DESC2u', 'DESC2', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->index();
		} else {
			$id = $this->input->post('REFERENSI_ID');
			$data = [
				"GROUP_ID" => $this->input->post('GROUP_IDu'),
				"REF" => $this->input->post('REFu'),
				"DESC" => $this->input->post('DESCu'),
				"GROUP_ID2" => $this->input->post('GROUP_ID2u'),
				"REF2" => $this->input->post('REF2u'),
				"DESC2" => $this->input->post('DESC2u'),
			];
			$this->Referensi_model->updateData($id, $data);
			redirect('referensi');
		}
	}
	public function deleteAct()
	{
		$id = $this->input->post('REFERENSI_ID');
		$data['referensi'] = $this->Referensi_model->deleteData($id);
		redirect('referensi');
	}
	function get_ajax()
	{
		$list = $this->Referensi_model->get_datatables();
		$data = array();
		$no = @$_POST['start'];
		foreach ($list as $item) {
			$no++;
			$row = array();
			$row[] = $no . ".";
			$row[] = $item->GROUP_ID;
			$row[] = $item->REF;
			$row[] = $item->DESC;
			$row[] = $item->GROUP_ID2;
			$row[] = $item->REF2;
			$row[] = $item->DESC2;
			$row[] = '<button type="button" id="updateBtn" name="updateBtn" class="btn btn-outline-warning" data-toggle="modal" data-target="#update' . $item->REFERENSI_ID . '">Update</button>
						<button type="button" id="deleteBtn" name="deleteBtn" class="btn btn-outline-danger" data-toggle="modal" data-target="#delete' . $item->REFERENSI_ID . '">Delete</button>';
			$data[] = $row;
		}
		$output = array(
			"recordsTotal" => $this->Referensi_model->count_all(),
			"recordsFiltered" => $this->Referensi_model->count_filtered(),
			"data" => $data,
		);
		echo json_encode($output);
	}
}
