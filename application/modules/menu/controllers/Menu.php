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
		$GRUP_ID = $this->session->userdata('GRUP_ID');
		$data['namaMenu'] = $this->Menu_model->readMenu($GRUP_ID);
		$this->template->load('master_dashboard', 'index', $data);
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
				"MENU_STATUS" => $this->input->post('MENU_STATUS')
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
				"MENU_STATUS" => $this->input->post('MENU_STATUS')
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
}
