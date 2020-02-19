<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
	}
	public function index()
	{
		$data['tittle'] = 'LOS';
		$this->load->view('templates/header', $data);
		$this->load->view('login', $data);
		$this->load->view('templates/footer');
	}
	public function loginAct()
	{
		$username = $this->input->post('USERNAME');
		$password = $this->input->post('PASSWORD');
		$userLogin = $this->db->get_where('TBL_USER', ['USERNAME' => $username])->row_array();

		if ($userLogin) {
			if ($userLogin['STATUS'] == 1) {
				if (password_verify($password, $userLogin['PASSWORD'])) {
					$data = [
						'USERNAME' => $userLogin['USERNAME'],
						'GRUP_ID' => $userLogin['GRUP_ID'],
					];
					$this->session->set_userdata($data);
					redirect('kewenangan');
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
					Password Yang Anda Inputkan Salah. </div>');
					redirect('login');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Akun Anda Tidak Aktif. </div>');
				redirect('login');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
		Akun Tidak Terdaftar. </div>');
			redirect('login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('USERNAME');
		$this->session->unset_userdata('GRUP_ID');
		redirect('login');
	}
}
