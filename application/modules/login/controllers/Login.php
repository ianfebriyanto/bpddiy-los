<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$this->form_validation->set_rules('USERNAME', 'USERNAME', 'required|trim');
		$this->form_validation->set_rules('PASSWORD', 'PASSWORD', 'required|trim');
		if ($this->form_validation->run() == false) {
			$style = $this->load->view('style', '', true);
			$script = $this->load->view('script', '', true);
			$data = [];
			$this->template->load('master', 'index', compact('style', 'script', 'data'));
		} else {
			$this->loginAct();
		}
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
					Password yang anda inputkan salah. </div>');
					redirect('login');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Akun anda tidak aktif.</div>');
				redirect('login');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
		Akun tidak terdaftar. </div>');
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
