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
			$is_logged_in = $this->session->userdata('is_logged_in');
			$data = [];
			$this->template->load('master', 'index', compact('style', 'script', 'data'));
			if (isset($is_logged_in) || $is_logged_in == true) {
				redirect('dashboard');
			}
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
						'is_logged_in' => true
					];
					$this->session->set_userdata($data);
					redirect('dashboard');
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					Password yang anda inputkan salah. <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button> </div>');
					redirect('login');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Akun anda tidak aktif.<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button> </div>');
				redirect('login');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		Akun tidak terdaftar. <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button> </div>');
			redirect('login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('USERNAME');
		$this->session->unset_userdata('GRUP_ID');
		$this->session->unset_userdata('is_logged_in');
		redirect('login');
	}
}
