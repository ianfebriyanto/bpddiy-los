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
		$data['namaParent'] = readParent();
		$data['namaMenu'] = readMenu();
		$this->template->load('master_dashboard', 'index', $data);
		$kewenangan = in_array('/kantor', array_column($data['namaMenu'], 'MENU_LINK'));
		$menuStatus = $this->db->get_where('TBL_MENU', ['MENU_LINK' => '/kantor'])->row_array();
		if (!$kewenangan || $menuStatus['MENU_STATUS'] == 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Anda tidak memiliki kewenangan untuk mengakses menu tersebut.<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button> </div>');
			redirect('dashboard');
		}
	}
	public function createAct()
	{
		$this->form_validation->set_rules('KD_KANTOR', 'KD_KANTOR', 'required|trim');
		$this->form_validation->set_rules('PARENT', 'PARENT', 'required|trim');
		$this->form_validation->set_rules('LEVEL', 'LEVEL', 'required|trim');
		$this->form_validation->set_rules('NAME', 'NAME', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->index();
		} else {
			$data = [
				"KD_KANTOR" => $this->input->post('KD_KANTOR'),
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
		$this->form_validation->set_rules('KD_KANTORu', 'KD_KANTOR', 'required|trim');
		$this->form_validation->set_rules('PARENTu', 'PARENT', 'required|trim');
		$this->form_validation->set_rules('LEVELu', 'LEVEL', 'required|trim');
		$this->form_validation->set_rules('NAMEu', 'NAME', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->index();
		} else {
			$id = $this->input->post('KANTOR_ID');
			$data = [
				"KD_KANTOR" => $this->input->post('KD_KANTORu'),
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
		$id = $this->input->post('KANTOR_ID');
		$data['Kantor'] = $this->Kantor_model->deleteData($id);
		redirect('kantor');
	}
	function get_ajax()
	{
		$list = $this->Kantor_model->get_datatables();
		$data = array();
		$no = @$_POST['start'];
		foreach ($list as $item) {
			if (($item->STATUS) == 0) {
				$item->STATUS = '<span style="color: Tomato;"><i class="fas fa-ban"></i></span>';
			} else {
				$item->STATUS = '<span style="color: Dodgerblue;"><i class="fas fa-check"></i></span>';
			}
			$no++;
			$row = array();
			$row[] = $no . ".";
			$row[] = $item->KD_KANTOR;
			$row[] = $item->PARENT;
			$row[] = $item->LEVEL;
			$row[] = $item->NAME;
			$row[] = $item->STATUS;
			$row[] = '<button type="button" id="updateBtn" name="updateBtn" class="btn btn-warning text-white" data-toggle="modal" data-target="#update' . $item->KANTOR_ID . '"><i class="fas fa-edit"></i></button>
			<button type="button" id="deleteBtn" name="deleteBtn" class="btn btn-danger" data-toggle="modal" data-target="#delete' . $item->KANTOR_ID . '"><i class="fas fa-trash"></button>';
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
