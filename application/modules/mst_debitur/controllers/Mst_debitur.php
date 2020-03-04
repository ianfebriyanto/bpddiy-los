<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mst_debitur extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mst_debitur_model');
	}
	public function index()
	{
		$data['style']  = $this->load->view('style', '', true);
		$data['script']  = $this->load->view('script', '', true);
		$data['mst_debitur'] = $this->Mst_debitur_model->readData();
		$GRUP_ID = $this->session->userdata('GRUP_ID');
		$data['namaMenu'] = $this->Mst_debitur_model->readMenu($GRUP_ID);
		$this->template->load('master_dashboard', 'index', $data);
		$kewenangan = in_array(12, array_column($data['namaMenu'], 'MENU_ID'));
		if (!$kewenangan) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Anda tidak memiliki kewenangan untuk mengakses menu tersebut. </div>');
			redirect('dashboard');
		}
	}
	public function createAct()
	{
		$this->form_validation->set_rules('NAMA_DEB', 'NAMA_DEB', 'required|trim');
		$this->form_validation->set_rules('KD_JNS_DEB', 'KD_JNS_DEB', 'required|trim');
		$this->form_validation->set_rules('ALAMAT', 'ALAMAT', 'required|trim');
		$this->form_validation->set_rules('KELURAHAN', 'KELURAHAN', 'required|trim');
		$this->form_validation->set_rules('KECAMATAN', 'KECAMATAN', 'required|trim');
		$this->form_validation->set_rules('KOTA', 'KOTA', 'required|trim');
		$this->form_validation->set_rules('KD_DATI_II', 'KD_DATI_II', 'required|trim');
		$this->form_validation->set_rules('RT', 'RT', 'required|trim');
		$this->form_validation->set_rules('RW', 'RW', 'required|trim');
		$this->form_validation->set_rules('KD_POS', 'KD_POS', 'required|trim');
		$this->form_validation->set_rules('NO_TELP', 'NO_TELP', 'required|trim');
		$this->form_validation->set_rules('NO_SELULAR', 'NO_SELULAR', 'required|trim');
		$this->form_validation->set_rules('EMAIL', 'EMAIL', 'required|trim');
		$this->form_validation->set_rules('NPWP', 'NPWP', 'required|trim');
		$this->form_validation->set_rules('STS_NSB', 'STS_NSB', 'required|trim');
		$this->form_validation->set_rules('KD_GOL_PML', 'KD_GOL_PML', 'required|trim');
		$this->form_validation->set_rules('KD_GRUP', 'KD_GRUP', 'required|trim');
		$this->form_validation->set_rules('FLG_AKTIF', 'FLG_AKTIF', 'required|trim');
		$this->form_validation->set_rules('KD_STS_DEB', 'KD_STS_DEB', 'required|trim');
		$this->form_validation->set_rules('TGL_DIBUAT', 'TGL_DIBUAT', 'required|trim');
		$this->form_validation->set_rules('TGL_DIUBAH', 'TGL_DIUBAH', 'required|trim');
		$this->form_validation->set_rules('TGL_DIHAPUS', 'TGL_DIHAPUS', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->index();
		} else {
			$data = [
				"NAMA_DEB" => $this->input->post('NAMA_DEB'),
				"KD_JNS_DEB" => $this->input->post('KD_JNS_DEB'),
				"ALAMAT" => $this->input->post('ALAMAT'),
				"KELURAHAN" => $this->input->post('KELURAHAN'),
				"KECAMATAN" => $this->input->post('KECAMATAN'),
				"KOTA" => $this->input->post('KOTA'),
				"KD_DATI_II" => $this->input->post('KD_DATI_II'),
				"RT" => $this->input->post('RT'),
				"RW" => $this->input->post('RW'),
				"KD_POS" => $this->input->post('KD_POS'),
				"NO_TELP" => $this->input->post('NO_TELP'),
				"NO_SELULAR" => $this->input->post('NO_SELULAR'),
				"EMAIL" => $this->input->post('EMAIL'),
				"NPWP" => $this->input->post('NPWP'),
				"STS_NSB" => $this->input->post('STS_NSB'),
				"KD_GOL_PML" => $this->input->post('KD_GOL_PML'),
				"KD_GRUP" => $this->input->post('KD_GRUP'),
				"FLG_AKTIF" => $this->input->post('FLG_AKTIF'),
				"KD_STS_DEB" => $this->input->post('KD_STS_DEB'),
				"TGL_DIBUAT" => $this->input->post('TGL_DIBUAT'),
				"TGL_DIUBAH" => $this->input->post('TGL_DIUBAH'),
				"TGL_DIHAPUS" => $this->input->post('TGL_DIHAPUS'),
			];
			$this->Mst_debitur_model->createData($data);
			redirect('mst_debitur');
		}
	}

	public function updateAct()
	{
		$this->form_validation->set_rules('NAMA_DEBu', 'NAMA_DEB', 'required|trim');
		$this->form_validation->set_rules('KD_JNS_DEBu', 'KD_JNS_DEB', 'required|trim');
		$this->form_validation->set_rules('ALAMATu', 'ALAMAT', 'required|trim');
		$this->form_validation->set_rules('KELURAHANu', 'KELURAHAN', 'required|trim');
		$this->form_validation->set_rules('KECAMATANu', 'KECAMATAN', 'required|trim');
		$this->form_validation->set_rules('KOTAu', 'KOTA', 'required|trim');
		$this->form_validation->set_rules('KD_DATI_IIu', 'KD_DATI_II', 'required|trim');
		$this->form_validation->set_rules('RTu', 'RT', 'required|trim');
		$this->form_validation->set_rules('RWu', 'RW', 'required|trim');
		$this->form_validation->set_rules('KD_POSu', 'KD_POS', 'required|trim');
		$this->form_validation->set_rules('NO_TELPu', 'NO_TELP', 'required|trim');
		$this->form_validation->set_rules('NO_SELULARu', 'NO_SELULAR', 'required|trim');
		$this->form_validation->set_rules('EMAILu', 'EMAIL', 'required|trim');
		$this->form_validation->set_rules('NPWPu', 'NPWP', 'required|trim');
		$this->form_validation->set_rules('STS_NSBu', 'STS_NSB', 'required|trim');
		$this->form_validation->set_rules('KD_GOL_PMLu', 'KD_GOL_PML', 'required|trim');
		$this->form_validation->set_rules('KD_GRUPu', 'KD_GRUP', 'required|trim');
		$this->form_validation->set_rules('FLG_AKTIFu', 'FLG_AKTIF', 'required|trim');
		$this->form_validation->set_rules('KD_STS_DEBu', 'KD_STS_DEB', 'required|trim');
		$this->form_validation->set_rules('TGL_DIBUATu', 'TGL_DIBUAT', 'required|trim');
		$this->form_validation->set_rules('TGL_DIUBAHu', 'TGL_DIUBAH', 'required|trim');
		$this->form_validation->set_rules('TGL_DIHAPUSu', 'TGL_DIHAPUS', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->index();
		} else {
			$id = $this->input->post('NO_DEB');
			$data = [
				"NAMA_DEB" => $this->input->post('NAMA_DEBu'),
				"KD_JNS_DEB" => $this->input->post('KD_JNS_DEBu'),
				"ALAMAT" => $this->input->post('ALAMATu'),
				"KELURAHAN" => $this->input->post('KELURAHANu'),
				"KECAMATAN" => $this->input->post('KECAMATANu'),
				"KOTA" => $this->input->post('KOTAu'),
				"KD_DATI_II" => $this->input->post('KD_DATI_IIu'),
				"RT" => $this->input->post('RTu'),
				"RW" => $this->input->post('RWu'),
				"KD_POS" => $this->input->post('KD_POSu'),
				"NO_TELP" => $this->input->post('NO_TELPu'),
				"NO_SELULAR" => $this->input->post('NO_SELULARu'),
				"EMAIL" => $this->input->post('EMAILu'),
				"NPWP" => $this->input->post('NPWPu'),
				"STS_NSB" => $this->input->post('STS_NSBu'),
				"KD_GOL_PML" => $this->input->post('KD_GOL_PMLu'),
				"KD_GRUP" => $this->input->post('KD_GRUPu'),
				"FLG_AKTIF" => $this->input->post('FLG_AKTIFu'),
				"KD_STS_DEB" => $this->input->post('KD_STS_DEBu'),
				"TGL_DIBUAT" => $this->input->post('TGL_DIBUATu'),
				"TGL_DIUBAH" => $this->input->post('TGL_DIUBAHu'),
				"TGL_DIHAPUS" => $this->input->post('TGL_DIHAPUSu'),
			];
			$this->Mst_debitur_model->updateData($id, $data);
			redirect('mst_debitur');
		}
	}
	public function deleteAct()
	{
		$id = $this->input->post('NO_DEB');
		$data['Mst_debitur'] = $this->Mst_debitur_model->deleteData($id);
		redirect('mst_debitur');
	}
	function get_ajax()
	{

		$list = $this->Mst_debitur_model->get_datatables();
		$data = array();
		$no = @$_POST['start'];
		foreach ($list as $item) {
			$no++;
			$row = array();
			$row[] = $no . ".";
			$row[] = $item->NAMA_DEB;
			$row[] = $item->KD_JNS_DEB;
			$row[] = $item->ALAMAT;
			$row[] = $item->KELURAHAN;
			$row[] = $item->KECAMATAN;
			$row[] = $item->KOTA;
			$row[] = $item->KD_DATI_II;
			$row[] = $item->RT;
			$row[] = $item->RW;
			$row[] = $item->KD_POS;
			$row[] = $item->NO_TELP;
			$row[] = $item->NO_SELULAR;
			$row[] = $item->EMAIL;
			$row[] = $item->NPWP;
			$row[] = $item->STS_NSB;
			$row[] = $item->KD_GOL_PML;
			$row[] = $item->KD_GRUP;
			$row[] = $item->FLG_AKTIF;
			$row[] = $item->KD_STS_DEB;
			$row[] = $item->TGL_DIBUAT;
			$row[] = $item->TGL_DIUBAH;
			$row[] = $item->TGL_DIHAPUS;

			$row[] = '<button type="button" id="updateBtn" name="updateBtn" class="btn btn-outline-warning" data-toggle="modal" data-target="#update' . $item->NO_DEB . '">Update</button>
			<button type="button" id="deleteBtn" name="deleteBtn" class="btn btn-outline-danger" data-toggle="modal" data-target="#delete' . $item->NO_DEB . '">Delete</button>';
			$data[] = $row;
		}
		$output = array(
			"recordsTotal" => $this->Mst_debitur_model->count_all(),
			"recordsFiltered" => $this->Mst_debitur_model->count_filtered(),
			"data" => $data,
		);
		echo json_encode($output);
	}
}
