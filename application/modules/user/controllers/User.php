<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}

	public function index()
	{
		$data['style']  = $this->load->view('style', '', true);
		$data['script']  = $this->load->view('script', '', true);
		$data['user'] = $this->User_model->readData();
		$GRUP_ID = $this->session->userdata('GRUP_ID');
		$data['namaMenu'] = $this->User_model->readMenu($GRUP_ID);
		$data['namaGrup'] = $this->User_model->readNamaGrup();
		$this->template->load('master_dashboard', 'index', $data);
		$kewenangan = in_array('/user', array_column($data['namaMenu'], 'MENU_LINK'));
		$menuStatus = $this->db->get_where('TBL_MENU', ['MENU_LINK' => '/user'])->row_array();
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
		$this->form_validation->set_rules('USERNAME', 'USERNAME', 'required|trim');
		$this->form_validation->set_rules('PASSWORD', 'PASSWORD', 'required|trim');
		$this->form_validation->set_rules('NAMA_LENGKAP', 'NAMA_LENGKAP', 'required|trim');
		$this->form_validation->set_rules('EMAIL', 'EMAIL', 'required|trim|valid_email');
		if ($this->form_validation->run() == false) {
			$this->index();
		} else {
			$data = [
				"USERNAME" => htmlspecialchars($this->input->post('USERNAME')),
				"PASSWORD" => password_hash($this->input->post('PASSWORD'), PASSWORD_DEFAULT),
				"NAMA_LENGKAP" => $this->input->post('NAMA_LENGKAP'),
				"EMAIL" => htmlspecialchars($this->input->post('EMAIL')),
				"HOST" =>  $this->input->ip_address(),
				"DATE_CREATE" => date('Y-m-d H:i:s'),
				"STATUS" => $this->input->post('STATUS'),
				"GRUP_ID" => $this->input->post('GRUP_ID')
			];
			$this->User_model->createData($data);
			redirect('user');
		}
	}

	public function updateAct()
	{
		$this->form_validation->set_rules('USERNAMEu', 'USERNAME', 'required|trim');
		$this->form_validation->set_rules('PASSWORDu', 'PASSWORD', 'required|trim');
		$this->form_validation->set_rules('NAMA_LENGKAPu', 'NAMA_LENGKAP', 'required|trim');
		$this->form_validation->set_rules('EMAILu', 'EMAIL', 'required|trim|valid_email');
		if ($this->form_validation->run() == false) {
			$this->index();
		} else {
			$id = $this->input->post('USER_ID');
			$data = [
				"USERNAME" => $this->input->post('USERNAMEu'),
				"PASSWORD" => password_hash($this->input->post('PASSWORDu'), PASSWORD_DEFAULT),
				"NAMA_LENGKAP" => $this->input->post('NAMA_LENGKAPu'),
				"EMAIL" => $this->input->post('EMAILu'),
				"HOST" =>  $this->input->ip_address(),
				"DATE_CREATE" => $this->input->post('DATE_CREATE'),
				"STATUS" => $this->input->post('STATUS'),
				"GRUP_ID" => $this->input->post('GRUP_ID')
			];
			$this->User_model->updateData($id, $data);
			redirect('user');
		}
	}
	public function deleteAct()
	{
		$id = $this->input->post('USER_ID');
		$data['user'] = $this->User_model->deleteData($id);
		redirect('user');
	}
	function get_ajax()
	{

		$list = $this->User_model->get_datatables();
		$data = array();
		$no = @$_POST['start'];
		foreach ($list as $item) {
			$no++;
			$row = array();
			$row[] = $no . ".";
			$row[] = $item->USERNAME;
			$row[] = $item->NAMA_LENGKAP;
			$row[] = $item->EMAIL;
			$row[] = $item->HOST;
			$row[] = $item->DATE_CREATE;
			$row[] = $item->GRUP_NAMA;
			$row[] = $item->STATUS;
			$row[] = '<button type="button" id="updateBtn" name="updateBtn" class="btn btn-outline-warning" data-toggle="modal" data-target="#update' . $item->USER_ID . '">Update</button>
			<button type="button" id="deleteBtn" name="deleteBtn" class="btn btn-outline-danger" data-toggle="modal" data-target="#delete' . $item->USER_ID . '">Delete</button>';
			$data[] = $row;
		}
		$output = array(
			"recordsTotal" => $this->User_model->count_all(),
			"recordsFiltered" => $this->User_model->count_filtered(),
			"data" => $data,
		);
		echo json_encode($output);
	}
}
