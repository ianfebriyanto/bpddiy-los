<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Menu_model');
	}
	public function index()
	{
		$data['style']  = $this->load->view('style', '', true);
		$data['script']  = $this->load->view('script', '', true);
		$data['menu'] = $this->Menu_model->readData();
		$data['namaMenu'] = readMenu();
		$this->template->load('master_dashboard', 'index', $data);
		$kewenangan = in_array('/menu', array_column($data['namaMenu'], 'MENU_LINK'));
		$menuStatus = $this->db->get_where('TBL_MENU', ['MENU_LINK' => '/menu'])->row_array();
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
		$this->form_validation->set_rules('MENU_NAMA', 'MENU_NAMA', 'required|trim');
		$this->form_validation->set_rules('MENU_LINK', 'MENU_LINK', 'required|trim');
		$this->form_validation->set_rules('MENU_DISKRIPSI', 'MENU_DISKRIPSI', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->index();
		} else {
			$data = [
				"MENU_NAMA" => $this->input->post('MENU_NAMA'),
				"MENU_LINK" => $this->input->post('MENU_LINK'),
				"MENU_DISKRIPSI" => $this->input->post('MENU_DISKRIPSI'),
				"MENU_STATUS" => $this->input->post('MENU_STATUS'),
				"PARENT_ID" => $this->input->post('PARENT_ID')
			];
			$this->Menu_model->createData($data);
			redirect('menu');
		}
	}
	public function updateAct()
	{
		$this->form_validation->set_rules('MENU_NAMAu', 'MENU_NAMA', 'required|trim');
		$this->form_validation->set_rules('MENU_LINKu', 'MENU_LINK', 'required|trim');
		$this->form_validation->set_rules('MENU_DISKRIPSIu', 'MENU_DISKRIPSI', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->index();
		} else {
			$id = $this->input->post('MENU_ID');
			$data = [
				"MENU_NAMA" => $this->input->post('MENU_NAMAu'),
				"MENU_LINK" => $this->input->post('MENU_LINKu'),
				"MENU_DISKRIPSI" => $this->input->post('MENU_DISKRIPSIu'),
				"MENU_STATUS" => $this->input->post('MENU_STATUS'),
				"PARENT_ID" => $this->input->post('PARENT_ID')
			];
			$this->Menu_model->updateData($id, $data);
			redirect('menu');
		}
	}
	public function deleteAct()
	{
		$id = $this->input->post('MENU_ID');
		$data['menu'] = $this->Menu_model->deleteData($id);
		redirect('menu');
	}
	function get_ajax()
	{
		$list = $this->Menu_model->get_datatables();
		$data = array();
		$no = @$_POST['start'];
		foreach ($list as $item) {
			if (($item->MENU_STATUS) == 0) {
				$item->MENU_STATUS = '<span style="color: Tomato;"><i class="fas fa-ban"></i></span>';
			} else {
				$item->MENU_STATUS = '<span style="color: Dodgerblue;"><i class="fas fa-check"></i></span>';
			}
			$no++;
			$row = array();
			$row[] = $no . ".";
			$row[] = $item->MENU_NAMA;
			$row[] = $item->MENU_LINK;
			$row[] = $item->MENU_DISKRIPSI;
			$row[] = $item->PARENT_ID;
			$row[] = $item->MENU_STATUS;
			$row[] = '<button type="button" id="updateBtn" name="updateBtn" class="btn btn-outline-warning" data-toggle="modal" data-target="#update' . $item->MENU_ID . '">Update</button>
			<button type="button" id="deleteBtn" name="deleteBtn" class="btn btn-outline-danger" data-toggle="modal" data-target="#delete' . $item->MENU_ID . '">Delete</button>';
			$data[] = $row;
		}
		$output = array(
			"recordsTotal" => $this->Menu_model->count_all(),
			"recordsFiltered" => $this->Menu_model->count_filtered(),
			"data" => $data,
		);
		echo json_encode($output);
	}
}
