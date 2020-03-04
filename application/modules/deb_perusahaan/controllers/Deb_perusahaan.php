<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Deb_perusahaan extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Q');
	}

	public function index()
	{
		$data['style']  = $this->load->view('style', '', true);
		$data['script']  = $this->load->view('script', '', true);
		$data['Deb_perusahaan'] = $this->Q->readData();
		$GRUP_ID = $this->session->userdata('GRUP_ID');
		$data['namaMenu'] = $this->Q->readMenu($GRUP_ID);
		$this->template->load('master_dashboard', 'index', $data);
		$kewenangan = in_array(14, array_column($data['namaMenu'], 'MENU_ID'));
		if (!$kewenangan) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Anda tidak memiliki kewenangan untuk mengakses menu tersebut. </div>');
			redirect('dashboard');
		}
	}
	public function createAct()
	{
		$this->form_validation->set_rules('NO_AKTE_PENDIRIAN', 'NO_AKTE_PENDIRIAN', 'required|trim');
        $this->form_validation->set_rules('TGL_AKTE_PENDIRIAN', 'TGL_AKTE_PENDIRIAN', 'required|trim');
        $this->form_validation->set_rules('NO_AKTE_PERUBAHAN', 'NO_AKTE_PERUBAHAN', 'required|trim');
        $this->form_validation->set_rules('TGL_AKTE_PERUBAHAN', 'TGL_AKTE_PERUBAHAN', 'required|trim');
        $this->form_validation->set_rules('NO_AKTE_PENGESAHAN', 'NO_AKTE_PENGESAHAN', 'required|trim');
        $this->form_validation->set_rules('TGL_AKTE_PENGESAHAN', 'TGL_AKTE_PENGESAHAN', 'required|trim');
        $this->form_validation->set_rules('NAMA_NOTARIS', 'NAMA_NOTARIS', 'required|trim');
        $this->form_validation->set_rules('NO_ADPT', 'NO_ADPT' , 'required|trim');
        $this->form_validation->set_rules('TGL_ADPT', 'TGL_ADPT', 'required|trim');
        $this->form_validation->set_rules('NO_SIUP', 'NO_SIUP', 'required|trim');
        $this->form_validation->set_rules('TGL_MULAI_SIUP', 'TGL_MULAI_SIUP', 'required|trim');
        $this->form_validation->set_rules('TGL_AKHIR_SIUP', 'TGL_AKHIR_SIUP', 'required|trim');
        $this->form_validation->set_rules('PENERBIT_SIUP', 'PENERBIT_SIUP', 'required|trim');
        $this->form_validation->set_rules('NO_HO', 'NO_HO', 'required|trim');
        $this->form_validation->set_rules('TGL_AWAL_HO', 'TGL_AWAL_HO', 'required|trim');
        $this->form_validation->set_rules('TGL_AKHIR_HO', 'TGL_AKHIR_HO', 'required|trim');
        $this->form_validation->set_rules('PENERBIT_HO', 'PENERBIT_HO', 'required|trim');
        $this->form_validation->set_rules('NO_TDP', 'NO_TDP', 'required|trim');
        $this->form_validation->set_rules('TGL_AWAL_TDP', 'TGL_AWAL_TDP', 'required|trim');
        $this->form_validation->set_rules('TGL_AKHIR_TDP', 'TGL_AKHIR_TDP', 'required|trim');
        $this->form_validation->set_rules('PENERBIT_TDP' , 'PENERBIT_TDP', 'required|trim');
        $this->form_validation->set_rules('NO_TDR', 'NO_TDR', 'required|trim');
        $this->form_validation->set_rules('TGL_AWAL_TDR' , 'TGL_AWAL_TDR', 'required|trim');
        $this->form_validation->set_rules('TGL_AKHIR_TDR', 'TGL_AKHIR_TDR', 'required|trim');
        $this->form_validation->set_rules('PENERBIT_TDR', 'PENERBIT_TDR', 'required|trim');
        $this->form_validation->set_rules('NO_SIUJK', 'NO_SIUJK', 'required|trim');
        $this->form_validation->set_rules('TGL_AWAL_SIUJK', 'TGL_AWAL_SIUJK', 'required|trim');
        $this->form_validation->set_rules('TGL_AKHIR_SIUJK', 'TGL_AKHIR_SIUJK', 'required|trim');
        $this->form_validation->set_rules('PENERBIT_SIUJK', 'PENERBIT_SIUJK', 'required|trim');
        $this->form_validation->set_rules('KD_STS_HUKUM', 'KD_STS_HUKUM', 'required|trim');
        $this->form_validation->set_rules('NAMA_PIMPINAN', 'NAMA_PIMPINAN', 'required|trim');
        $this->form_validation->set_rules('ALMT_SITUS_PERUSAHAAN', 'ALMT_SITUS_PERUSAHAAN', 'required|trim');
        $this->form_validation->set_rules('EMAIL_PERUSAHAAN', 'EMAIL_PERUSAHAAN', 'required|trim');
        $this->form_validation->set_rules('KD_BID_USAHA','KD_BID_USAHA', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->index();
		} else {
			$data = [
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
			$this->Q->createData($data);
			redirect('deb_perusahaan');
		}
	}

	public function updateAct()
	{
			$this->form_validation->set_rules('NO_AKTE_PENDIRIANu', 'NO_AKTE_PENDIRIAN', 'required|trim');
            $this->form_validation->set_rules('TGL_AKTE_PENDIRIANu', 'TGL_AKTE_PENDIRIAN', 'required|trim');
            $this->form_validation->set_rules('NO_AKTE_PERUBAHANu', 'NO_AKTE_PERUBAHAN', 'required|trim');
            $this->form_validation->set_rules('TGL_AKTE_PERUBAHANu', 'TGL_AKTE_PERUBAHAN', 'required|trim');
            $this->form_validation->set_rules('NO_AKTE_PENGESAHANu', 'NO_AKTE_PENGESAHAN', 'required|trim');
            $this->form_validation->set_rules('TGL_AKTE_PENGESAHANu', 'TGL_AKTE_PENGESAHAN', 'required|trim');
            $this->form_validation->set_rules('NAMA_NOTARISu', 'NAMA_NOTARIS', 'required|trim');
            $this->form_validation->set_rules('NO_ADPTu', 'NO_ADPT', 'required|trim');
            $this->form_validation->set_rules('TGL_ADPTu', 'TGL_ADPT', 'required|trim');
            $this->form_validation->set_rules('NO_SIUPu', 'NO_SIUP', 'required|trim');
            $this->form_validation->set_rules('TGL_MULAI_SIUPu', 'TGL_MULAI_SIUP', 'required|trim');
            $this->form_validation->set_rules('TGL_AKHIR_SIUPu', 'TGL_AKHIR_SIUP', 'required|trim');
            $this->form_validation->set_rules('PENERBIT_SIUPu', 'PENERBIT_SIUP', 'required|trim');
            $this->form_validation->set_rules('NO_HOu', 'NO_HO', 'required|trim');
            $this->form_validation->set_rules('TGL_AWAL_HOu', 'TGL_AWAL_HO', 'required|trim');
            $this->form_validation->set_rules('TGL_AKHIR_HOu', 'TGL_AKHIR_SIUP', 'required|trim');
            $this->form_validation->set_rules('PENERBIT_HOu', 'PENERBIT_HO', 'required|trim');
            $this->form_validation->set_rules('NO_TDPu', 'NO_TDP', 'required|trim');
            $this->form_validation->set_rules('TGL_AWAL_TDPu', 'TGL_AWAL_TDP', 'required|trim');
            $this->form_validation->set_rules('TGL_AKHIR_TDPu', 'TGL_AKHIR_TDP', 'required|trim');
            $this->form_validation->set_rules('PENERBIT_TDPu', 'PENERBIT_TDP', 'required|trim');
            $this->form_validation->set_rules('NO_TDRu', 'NO_TDR', 'required|trim');
            $this->form_validation->set_rules('TGL_AWAL_TDRu', 'TGL_AWAL_TDR', 'required|trim');
            $this->form_validation->set_rules('TGL_AKHIR_TDRu', 'TGL_AKHIR_TDR', 'required|trim');
            $this->form_validation->set_rules('PENERBIT_TDRu', 'PENERBIT_TDR', 'required|trim');
            $this->form_validation->set_rules('NO_SIUJKu', 'NO_SIUJK', 'required|trim');
            $this->form_validation->set_rules('TGL_AWAL_SIUJKu', 'TGL_AWAL_SIUJK', 'required|trim');
            $this->form_validation->set_rules('TGL_AKHIR_SIUJKu', 'TGL_AKHIR_SIUJK', 'required|trim');
            $this->form_validation->set_rules('PENERBIT_SIUJKu', 'PENERBIT_SIUJK', 'required|trim');
            $this->form_validation->set_rules('KD_STS_HUKUMu', 'KD_STS_HUKUM', 'required|trim');
            $this->form_validation->set_rules('NAMA_PIMPINANu', 'NAMA_PIMPINAN', 'required|trim');
            $this->form_validation->set_rules('ALMT_SITUS_PERUSAHAANPu', 'ALMT_SITUS_PERUSAHAANP', 'required|trim');
            $this->form_validation->set_rules('EMAIL_PERUSAHAANu', 'EMAIL_PERUSAHAAN', 'required|trim');
            $this->form_validation->set_rules('KD_BID_USAHAu', 'KD_BID_USAHA', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->index();
		} else {
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
			$this->Q->updateData($id, $data);
			redirect('Q');
		}
	}
	public function deleteAct()
	{
		$id = $this->input->post('NO_DEB');
		$data['Kantor'] = $this->Q->deleteData($id);
		redirect('deb_perusahaan');
	}
	function get_ajax()
	{

		$list = $this->Q->get_datatables();
		$data = array();
		$no = @$_POST['start'];
		foreach ($list as $item) {
			$no++;
			$row = array();
			$row[] = $no . ".";
			$row[] = $item->NO_AKTE_PENDIRIAN;
			$row[] = $item->TGL_AKTE_PENDIRIAN;
			$row[] = $item->NO_AKTE_PERUBAHAN;
			$row[] = $item->TGL_AKTE_PERUBAHAN;
			$row[] = $item->NO_AKTE_PENGESAHAN;
			$row[] = $item->TGL_AKTE_PENGESAHAN;
			$row[] = $item->NAMA_NOTARIS;
			$row[] = $item->NO_ADPT;
			$row[] = $item->TGL_ADPT;
			$row[] = $item->NO_SIUP;
			$row[] = $item->TGL_MULAI_SIUP;
			$row[] = $item->TGL_AKHIR_SIUP;
			$row[] = $item->PENERBIT_SIUP;
			$row[] = $item->NO_HO;
			$row[] = $item->TGL_AWAL_HO;
			$row[] = $item->TGL_AKHIR_HO;
			$row[] = $item->PENERBIT_HO;
			$row[] = $item->NO_TDP;
			$row[] = $item->TGL_AWAL_TDP;
			$row[] = $item->TGL_AKHIR_TDP;
			$row[] = $item->PENERBIT_TDP;
			$row[] = $item->NO_TDR;
			$row[] = $item->TGL_AWAL_TDR;
			$row[] = $item->TGL_AKHIR_TDR;
			$row[] = $item->PENERBIT_TDR;
			$row[] = $item->NO_SIUJK;
			$row[] = $item->TGL_AWAL_SIUJK;
			$row[] = $item->TGL_AKHIR_SIUJK;
			$row[] = $item->PENERBIT_SIUJK;
			$row[] = $item->KD_STS_HUKUM;
			$row[] = $item->NAMA_PIMPINAN;
			$row[] = $item->ALMT_SITUS_PERUSAHAAN;
			$row[] = $item->EMAIL_PERUSAHAAN;
			$row[] = $item->KD_BID_USAHA;
			$row[] = '
			<button type="button" id="updateBtn" name="updateBtn" class="btn btn-outline-warning" data-toggle="modal" data-target="#update' . $item->NO_DEB . '">Update</button>
			<button type="button" id="deleteBtn" name="deleteBtn" class="btn btn-outline-danger" data-toggle="modal" data-target="#delete' . $item->NO_DEB . '">Delete</button>';
			$data[] = $row;
		}
		$output = array(
			"recordsTotal" => $this->Q->count_all(),
			"recordsFiltered" => $this->Q->count_filtered(),
			"data" => $data,
		);
		echo json_encode($output);
	}
}
