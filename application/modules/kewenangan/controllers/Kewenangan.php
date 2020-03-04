<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kewenangan extends MY_Controller
{
	private $link = '/kewenangan';
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kewenangan_model');
	}
	public function index()
	{
		$data['style']  = $this->load->view('style', '', true);
		$data['script']  = $this->load->view('script', '', true);
		$GRUP_ID = $this->session->userdata('GRUP_ID');
		$data['kewenangan'] = $this->Kewenangan_model->readData();
		$data['readKewenangan'] = $this->Kewenangan_model->readKewenangan();
		$data['namaMenuOption'] = $this->Kewenangan_model->readNamaMenu();
		$data['namaGrup'] = $this->Kewenangan_model->readNamaGrup();
		$data['namaMenu'] = $this->Kewenangan_model->readMenu($GRUP_ID);
		$this->template->load('master_dashboard', 'index', $data);
		$kewenangan = in_array('/kewenangan', array_column($data['namaMenu'], 'MENU_LINK'));
		$menuStatus = $this->db->get_where('TBL_MENU', ['MENU_LINK' => $this->link])->row_array();
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
		$GRUP_ID = $this->session->userdata('GRUP_ID');
		$menuCheck = $this->db->get_where(['TBL_KEWENANGAN'], ['GRUP_ID' => $this->input->post('GRUP_ID')])->result_array();
		$kewenanganCreate = $this->db->get_where(['TBL_KEWENANGAN', 'TBL_MENU'], ['TBL_KEWENANGAN.GRUP_ID' => $GRUP_ID, 'TBL_MENU.MENU_LINK' => $this->link])->row_array();
		$menuSudahAda = in_array($this->input->post('MENU_ID'), array_column($menuCheck, 'MENU_ID'));
		if ($menuSudahAda) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Sudah terdapat kewenangan untuk menu tersebut. <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button> </div>');
			redirect('kewenangan');
		}
		if ($kewenanganCreate['CREATE'] == 1) {
			$data = [
				"GRUP_ID" => $this->input->post('GRUP_ID'),
				"MENU_ID" => $this->input->post('MENU_ID'),
				"CREATE" => $this->input->post('CREATE'),
				"UPDATE" => $this->input->post('UPDATE'),
				"DELETE" => $this->input->post('DELETE')
			];
			$this->Kewenangan_model->createData($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			Berhasil menambahkan data. <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button> </div>');
			redirect('kewenangan');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Anda tidak memiliki akses. <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button> </div>');
			redirect('kewenangan');
		}
	}
	public function updateAct()
	{
		$GRUP_ID = $this->session->userdata('GRUP_ID');
		$kewenanganCreate = $this->db->get_where(['TBL_KEWENANGAN', 'TBL_MENU'], ['TBL_KEWENANGAN.GRUP_ID' => $GRUP_ID, 'TBL_MENU.MENU_LINK' => $this->link])->row_array();
		if ($kewenanganCreate['UPDATE'] == 1) {
			$id = $this->input->post('KEWENANGAN_ID');
			$data = [
				"GRUP_ID" => $this->input->post('GRUP_ID'),
				"MENU_ID" => $this->input->post('MENU_ID'),
				"CREATE" => $this->input->post('CREATE'),
				"UPDATE" => $this->input->post('UPDATE'),
				"DELETE" => $this->input->post('DELETE')
			];
			$this->Kewenangan_model->updateData($id, $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			Berhasil memperbarui data. <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button> </div>');
			redirect('kewenangan');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		Anda tidak memiliki akses. <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button> </div>');
			redirect('kewenangan');
		}
	}
	public function deleteAct()
	{
		$GRUP_ID = $this->session->userdata('GRUP_ID');
		$kewenanganCreate = $this->db->get_where(['TBL_KEWENANGAN', 'TBL_MENU'], ['TBL_KEWENANGAN.GRUP_ID' => $GRUP_ID, 'TBL_MENU.MENU_LINK' => $this->link])->row_array();
		if ($kewenanganCreate['DELETE'] == 1) {
			$id = $this->input->post('KEWENANGAN_ID');
			$data['kewenangan'] = $this->Kewenangan_model->deleteData($id);
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			Berhasil menghapus data. <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button> </div>');
			redirect('kewenangan');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		Anda tidak memiliki akses. <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button> </div>');
			redirect('kewenangan');
		}
	}
	function get_ajax()
	{
		$GRUP = $this->input->post('id');
		$list = $this->Kewenangan_model->get_datatables($GRUP);
		$data = array();
		$no = @$_POST['start'];
		foreach ($list as $item) {
			if (($item->CREATE) == 0) {
				$item->CREATE = '<span style="color: Tomato;"><i class="fas fa-ban"></i></span>';
			} else {
				$item->CREATE = '<span style="color: Dodgerblue;"><i class="fas fa-check"></i></span>';
			}
			if (($item->UPDATE) == 0) {
				$item->UPDATE = '<span style="color: Tomato;"><i class="fas fa-ban"></i></span>';
			} else {
				$item->UPDATE = '<span style="color: Dodgerblue;"><i class="fas fa-check"></i></span>';
			}
			if (($item->DELETE) == 0) {
				$item->DELETE = '<span style="color: Tomato;"><i class="fas fa-ban"></i></span>';
			} else {
				$item->DELETE = '<span style="color: Dodgerblue;"><i class="fas fa-check"></i></span>';
			}
			$no++;
			$row = array();
			$row[] = $no . ".";
			$row[] = $item->MENU_NAMA;
			$row[] = $item->CREATE;
			$row[] = $item->UPDATE;
			$row[] = $item->DELETE;
			$row[] = '<button type="button" id="updateBtn" name="updateBtn" class="btn btn-outline-warning" data-toggle="modal" data-target="#update' . $item->KEWENANGAN_ID . '">Update</button>
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
