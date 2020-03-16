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
		$data['namaMenu'] = readMenu();
		$this->template->load('master_dashboard', 'index', $data);
		$kewenangan = in_array('/grup', array_column($data['namaMenu'], 'MENU_LINK'));
		$menuStatus = $this->db->get_where('TBL_MENU', ['MENU_LINK' => '/grup'])->row_array();
		if (!$kewenangan || $menuStatus['MENU_STATUS'] == 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Anda tidak memiliki kewenangan untuk mengakses menu tersebut. <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button> </div>');
			redirect('dashboard');
		}
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
			$row[] = '<button type="button" id="updateBtn" name="updateBtn" class="btn btn-warning text-white" data-toggle="modal" data-target="#update' . $item->GRUP_ID . '"><i class="fas fa-edit"></i></button>
			<button type="button" id="deleteBtn" name="deleteBtn" class="btn btn-danger" data-toggle="modal" data-target="#delete' . $item->GRUP_ID . '"><i class="fas fa-trash"></button>';
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
