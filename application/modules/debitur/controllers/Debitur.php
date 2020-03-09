<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Debitur extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Debitur_model');
    }
    public function index()
    {
        $data['style']  = $this->load->view('style', '', true);
        $data['script']  = $this->load->view('script', '', true);
        $GRUP_ID = $this->session->userdata('GRUP_ID');
        $data['namaMenu'] = $this->Debitur_model->readMenu($GRUP_ID);
        $this->template->load('master_dashboard', 'index', $data);
        $kewenangan = in_array('/debitur', array_column($data['namaMenu'], 'MENU_LINK'));
        $menuStatus = $this->db->get_where('TBL_MENU', ['MENU_LINK' => '/debitur'])->row_array();
        if (!$kewenangan || $menuStatus['MENU_STATUS'] == 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Anda tidak memiliki kewenangan untuk mengakses menu tersebut. <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button> </div>');
            redirect('dashboard');
        }
    }
    public function personal()
    {
        $data['style']  = $this->load->view('style', '', true);
        $data['script']  = $this->load->view('script', '', true);
        $GRUP_ID = $this->session->userdata('GRUP_ID');
        $data['namaMenu'] = $this->Debitur_model->readMenu($GRUP_ID);
        $this->template->load('master_dashboard', 'personal', $data);
    }
    public function perusahaan()
    {
        $data['style']  = $this->load->view('style', '', true);
        $data['script']  = $this->load->view('script', '', true);
        $GRUP_ID = $this->session->userdata('GRUP_ID');
        $data['namaMenu'] = $this->Debitur_model->readMenu($GRUP_ID);
        $this->template->load('master_dashboard', 'perusahaan', $data);
    }
}
