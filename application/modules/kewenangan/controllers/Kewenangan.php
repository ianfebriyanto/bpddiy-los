<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kewenangan extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kewenangan_model');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['kewenangan'] = $this->Kewenangan_model->readData();
		$this->load->view('templates/header');
		$this->load->view('kewenangan', $data);
	}
}
