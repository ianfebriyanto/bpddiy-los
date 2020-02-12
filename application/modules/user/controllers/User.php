<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['user'] = $this->User_model->readData();
		$this->load->view('templates/header');
		$this->load->view('user', $data);
	}
}
