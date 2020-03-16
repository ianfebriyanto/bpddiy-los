<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Deb_perusahaan extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Deb_perusahaan_model');
    }

    public function index()
    {
        $data['style']  = $this->load->view('style', '', true);
        $data['script']  = $this->load->view('script', '', true);
        $data['Deb_perusahaan'] = $this->Deb_perusahaan_model->readData();
        $data['namaMenu'] = readMenu();
        $this->template->load('master_dashboard', 'index', $data);
    }
    public function createAct()
    {
        $data = [
            "NO_DEB" => $this->input->post('NO_DEB'),
            "NO_AKTE_PENDIRIAN" => $this->input->post('NO_AKTE_PENDIRIAN'),
            "TGL_AKTE_PENDIRIAN" => $this->input->post('TGL_AKTE_PENDIRIAN'),
            "NO_AKTE_PERUBAHAN" => $this->input->post('NO_AKTE_PERUBAHAN'),
            "TGL_AKTE_PERUBAHAN" => $this->input->post('TGL_AKTE_PERUBAHAN'),
            "NO_AKTE_PENGESAHAN" => $this->input->post('NO_AKTE_PENGESAHAN'),
            "TGL_AKTE_PENGESAHAN" => $this->input->post('TGL_AKTE_PENGESAHAN'),
            "NAMA_NOTARIS" => $this->input->post('NAMA_NOTARIS'),
            "NO_ADPT" => $this->input->post('NO_ADPT'),
            "TGL_ADPT" => $this->input->post('TGL_ADPT'),
            "NO_SIUP" => $this->input->post('NO_SIUP'),
            "TGL_MULAI_SIUP" => $this->input->post('TGL_MULAI_SIUP'),
            "TGL_AKHIR_SIUP" => $this->input->post('TGL_AKHIR_SIUP'),
            "PENERBIT_SIUP" => $this->input->post('PENERBIT_SIUP'),
            "NO_HO" => $this->input->post('NO_HO'),
            "TGL_AWAL_HO" => $this->input->post('TGL_AWAL_HO'),
            "TGL_AKHIR_HO" => $this->input->post('TGL_AKHIR_HO'),
            "PENERBIT_HO" => $this->input->post('PENERBIT_HO'),
            "NO_TDP" => $this->input->post('NO_TDP'),
            "TGL_AWAL_TDP" => $this->input->post('TGL_AWAL_TDP'),
            "TGL_AKHIR_TDP" => $this->input->post('TGL_AKHIR_TDP'),
            "PENERBIT_TDP" => $this->input->post('PENERBIT_TDP'),
            "NO_TDR" => $this->input->post('NO_TDR'),
            "TGL_AWAL_TDR" => $this->input->post('TGL_AWAL_TDR'),
            "TGL_AKHIR_TDR" => $this->input->post('TGL_AKHIR_TDR'),
            "PENERBIT_TDR" => $this->input->post('PENERBIT_TDR'),
            "NO_SIUJK" => $this->input->post('NO_SIUJK'),
            "TGL_AWAL_SIUJK" => $this->input->post('TGL_AWAL_SIUJK'),
            "TGL_AKHIR_SIUJK" => $this->input->post('TGL_AKHIR_SIUJK'),
            "PENERBIT_SIUJK" => $this->input->post('PENERBIT_SIUJK'),
            "KD_STS_HUKUM" => $this->input->post('KD_STS_HUKUM'),
            "NAMA_PIMPINAN" => $this->input->post('NAMA_PIMPINAN'),
            "ALMT_SITUS_PERUSAHAAN" => $this->input->post('ALMT_SITUS_PERUSAHAAN'),
            "EMAIL_PERUSAHAAN" => $this->input->post('EMAIL_PERUSAHAAN'),
            "KD_BID_USAHA" => $this->input->post('KD_BID_USAHA'),
        ];
        $this->Deb_perusahaan_model->createData($data);
        redirect('deb_perusahaan');
    }

    public function updateAct()
    {
        $id = $this->input->post('NO_DEB');
        $data = [
            "NO_AKTE_PERUBAHAN" => $this->input->post('NO_AKTE_PERUBAHANu'),
            "TGL_AKTE_PERUBAHAN" => $this->input->post('TGL_AKTE_PERUBAHANu'),
            "NO_AKTE_PENDIRIAN" => $this->input->post('NO_AKTE_PENDIRIANu'),
            "TGL_AKTE_PENDIRIAN" => $this->input->post('TGL_AKTE_PENDIRIANu'),
            "NO_AKTE_PENGESAHAN" => $this->input->post('NO_AKTE_PENGESAHANu'),
            "TGL_AKTE_PENGESAHAN" => $this->input->post('TGL_AKTE_PENGESAHANu'),
            "NAMA_NOTARIS" => $this->input->post('NAMA_NOTARISu'),
            "NO_ADPT" => $this->input->post('NO_ADPTu'),
            "TGL_ADPT" => $this->input->post('TGL_ADPTu'),
            "NO_SIUP" => $this->input->post('NO_SIUPu'),
            "TGL_MULAI_SIUP" => $this->input->post('TGL_MULAI_SIUPu'),
            "TGL_AKHIR_SIUP" => $this->input->post('TGL_AKHIR_SIUPu'),
            "PENERBIT_SIUP" => $this->input->post('PENERBIT_SIUPu'),
            "NO_HO" => $this->input->post('NO_HOu'),
            "TGL_AWAL_HO" => $this->input->post('TGL_AWAL_HOu'),
            "TGL_AKHIR_HO" => $this->input->post('TGL_AKHIR_HOu'),
            "PENERBIT_HO" => $this->input->post('PENERBIT_HOu'),
            "NO_TDP" => $this->input->post('NO_TDPu'),
            "TGL_AWAL_TDP" => $this->input->post('TGL_AWAL_TDPu'),
            "TGL_AKHIR_TDP" => $this->input->post('TGL_AKHIR_TDPu'),
            "PENERBIT_TDP" => $this->input->post('PENERBIT_TDPu'),
            "NO_TDR" => $this->input->post('NO_TDRu'),
            "TGL_AWAL_TDR" => $this->input->post('TGL_AWAL_TDRu'),
            "TGL_AKHIR_TDR" => $this->input->post('TGL_AKHIR_TDRu'),
            "PENERBIT_TDR" => $this->input->post('PENERBIT_TDRu'),
            "NO_SIUJK" => $this->input->post('NO_SIUJKu'),
            "TGL_AWAL_SIUJK" => $this->input->post('TGL_AWAL_SIUJKu'),
            "TGL_AKHIR_SIUJK" => $this->input->post('TGL_AKHIR_SIUJKu'),
            "PENERBIT_SIUJK" => $this->input->post('PENERBIT_SIUJKu'),
            "KD_STS_HUKUM" => $this->input->post('KD_STS_HUKUMu'),
            "NAMA_PIMPINAN" => $this->input->post('NAMA_PIMPINANu'),
            "ALMT_SITUS_PERUSAHAAN" => $this->input->post('ALMT_SITUS_PERUSAHAANu'),
            "EMAIL_PERUSAHAAN" => $this->input->post('EMAIL_PERUSAHAANu'),
            "KD_BID_USAHA" => $this->input->post('KD_BID_USAHAu'),
        ];
        $this->Deb_perusahaan_model->updateData($id, $data);
        redirect('deb_perusahaan');
    }
    public function deleteAct()
    {
        $id = $this->input->post('NO_DEB');
        $data['Kantor'] = $this->Deb_perusahaan_model->deleteData($id);
        redirect('deb_perusahaan');
    }
    function get_ajax()
    {
        $list = $this->Deb_perusahaan_model->get_datatables();
        $data = array();
        $no = @$_POST['start'];
        foreach ($list as $item) {
            $no++;
            $row = array();
            $row[] = $no . ".";
            $row[] = $item->NO_DEB;
            $row[] = $item->NAMA_PIMPINAN;
            $row[] = $item->ALMT_SITUS_PERUSAHAAN;
            $row[] = $item->EMAIL_PERUSAHAAN;
            $row[] = '<button type="button" id="updateBtn" name="updateBtn" class="btn btn-warning text-white" data-toggle="modal" data-target="#update' . $item->NO_DEB . '"><i class="fas fa-edit"></i></button>
			<button type="button" id="deleteBtn" name="deleteBtn" class="btn btn-danger" data-toggle="modal" data-target="#delete' . $item->NO_DEB . '"><i class="fas fa-trash"></button>';
            $data[] = $row;
        }
        $output = array(
            "recordsTotal" => $this->Deb_perusahaan_model->count_all(),
            "recordsFiltered" => $this->Deb_perusahaan_model->count_filtered(),
            "data" => $data,
        );
        echo json_encode($output);
    }
}
