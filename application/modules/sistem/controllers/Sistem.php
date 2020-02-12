<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sistem extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Sistem_model');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['sistem'] = $this->Sistem_model->readData();
		$this->load->view('templates/header');
		$this->load->view('sistem', $data);
	}
}
