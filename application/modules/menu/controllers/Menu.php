<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Menu_model');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['menu'] = $this->Menu_model->readData();
		$this->load->view('templates/header');
		$this->load->view('menu', $data);
	}
}
