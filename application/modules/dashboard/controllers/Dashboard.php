<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dashboard_model');
    }

    public function index()
    {
        $data['style']  = $this->load->view('style', '', true);
        $data['script']  = $this->load->view('script', '', true);
        $GRUP_ID = $this->session->userdata('GRUP_ID');
        $data['namaMenu'] = $this->Dashboard_model->readMenu($GRUP_ID);
        $this->template->load('master_dashboard', 'index', $data);
    }
}
