<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Deb_personal extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Deb_personal_model');
	}
	public function index()
	{
		$data['style']  = $this->load->view('style', '', true);
		$data['script']  = $this->load->view('script', '', true);
		$data['deb_personal'] = $this->Deb_personal_model->readData();
		$data['namaMenu'] = readMenu();
		$this->template->load('master_dashboard', 'index', $data);
	}
	public function createAct()
	{
		$data = [
			"NO_DEB" => $this->input->post('NO_DEB'),
			"NO_IDENTITAS" => $this->input->post('NO_IDENTITAS'),
			"TGL_IDENTITAS" => $this->input->post('TGL_IDENTITAS'),
			"KD_NEGARA" => $this->input->post('KD_NEGARA'),
			"TEMPAT_LAHIR" => $this->input->post('TEMPAT_LAHIR'),
			"TGL_LAHIR" => $this->input->post('TGL_LAHIR'),
			"KD_KELAMIN" => $this->input->post('KD_KELAMIN'),
			"KD_AGAMA" => $this->input->post('KD_AGAMA'),
			"KET_AGAMA" => $this->input->post('KET_AGAMA'),
			"KD_STS_KAWIN" => $this->input->post('KD_STS_KAWIN'),
			"KD_PENDIDIKAN" => $this->input->post('KD_PENDIDIKAN'),
			"KET_PENDIDIKAN" => $this->input->post('KET_PENDIDIKAN'),
			"KD_PENDUDUK" => $this->input->post('KD_PENDUDUK'),
			"KD_PEKERJAAN" => $this->input->post('KD_PEKERJAAN'),
			"KET_PEKERJAAN" => $this->input->post('KET_PEKERJAAN'),
			"ALMT_IDENTITAS" => $this->input->post('ALMT_IDENTITAS'),
			"KELURAHAN_IDENTITAS" => $this->input->post('KELURAHAN_IDENTITAS'),
			"KECAMATAN_IDENTITAS" => $this->input->post('KECAMATAN_IDENTITAS'),
			"KOTA_IDENTITAS" => $this->input->post('KOTA_IDENTITAS'),
			"PROVINSI_IDENTITAS" => $this->input->post('PROVINSI_IDENTITAS'),
			"NO_TELP_IDENTITAS" => $this->input->post('NO_TELP_IDENTITAS'),
			"RT_IDENTITAS" => $this->input->post('RT_IDENTITAS'),
			"RW_IDENTITAS" => $this->input->post('RW_IDENTITAS'),
			"KD_POS_IDENTITAS" => $this->input->post('KD_POS_IDENTITAS'),
			"ALMT_TINGGAL" => $this->input->post('ALMT_TINGGAL'),
			"KELURAHAN_TINGGAL" => $this->input->post('KELURAHAN_TINGGAL'),
			"KECAMATAN_TINGGAL" => $this->input->post('KECAMATAN_TINGGAL'),
			"KOTA_TINGGAL" => $this->input->post('KOTA_TINGGAL'),
			"PROVINSI_TINGGAL" => $this->input->post('PROVINSI_TINGGAL'),
			"RT_TINGGAL" => $this->input->post('RT_TINGGAL'),
			"RW_TINGGAL" => $this->input->post('RW_TINGGAL'),
			"KD_POS_TINGGAL" => $this->input->post('KD_POS_TINGGAL'),
			"NO_TELP_TINGGAL" => $this->input->post('NO_TELP_TINGGAL'),
			"TGL_MULAI_TINGGAL" => $this->input->post('TGL_MULAI_TINGGAL'),
			"KD_STS_TINGGAL" => $this->input->post('KD_STS_TINGGAL'),
			"KD_PENGHASILAN" => $this->input->post('KD_PENGHASILAN'),
			"KD_PENGHASILAN_LAIN" => $this->input->post('KD_PENGHASILAN_LAIN'),
			"NAMA_PASUTRI" => $this->input->post('NAMA_PASUTRI'),
			"KD_PEKERJAAN_PASUTRI" => $this->input->post('KD_PEKERJAAN_PASUTRI'),
			"KET_PEKERJAAN_PASUTRI" => $this->input->post('KET_PEKERJAAN_PASUTRI'),
			"KD_PENGHASILAN_PASUTRI" => $this->input->post('KD_PENGHASILAN_PASUTRI'),
			"NAMA_IBU_KANDUNG" => $this->input->post('NAMA_IBU_KANDUNG')
		];
		$this->Deb_personal_model->createData($data);
		redirect('deb_personal');
	}

	public function updateAct()
	{

		$id = $this->input->post('NO_DEB');
		$data = [
			"NO_DEB" => $this->input->post('NO_DEB'),
			"NO_IDENTITAS" => $this->input->post('NO_IDENTITASu'),
			"TGL_IDENTITAS" => $this->input->post('TGL_IDENTITASu'),
			"KD_NEGARA" => $this->input->post('KD_NEGARAu'),
			"TEMPAT_LAHIR" => $this->input->post('TEMPAT_LAHIRu'),
			"TGL_LAHIR" => $this->input->post('TGL_LAHIRu'),
			"KD_KELAMIN" => $this->input->post('KD_KELAMINu'),
			"KD_AGAMA" => $this->input->post('KD_AGAMAu'),
			"KET_AGAMA" => $this->input->post('KET_AGAMAu'),
			"KD_STS_KAWIN" => $this->input->post('KD_STS_KAWINu'),
			"KD_PENDIDIKAN" => $this->input->post('KD_PENDIDIKANu'),
			"KET_PENDIDIKAN" => $this->input->post('KET_PENDIDIKANu'),
			"KD_PENDUDUK" => $this->input->post('KD_PENDUDUKu'),
			"KD_PEKERJAAN" => $this->input->post('KD_PEKERJAANu'),
			"KET_PEKERJAAN" => $this->input->post('KET_PEKERJAANu'),
			"ALMT_IDENTITAS" => $this->input->post('ALMT_IDENTITASu'),
			"KELURAHAN_IDENTITAS" => $this->input->post('KELURAHAN_IDENTITASu'),
			"KECAMATAN_IDENTITAS" => $this->input->post('KECAMATAN_IDENTITASu'),
			"KOTA_IDENTITAS" => $this->input->post('KOTA_IDENTITASu'),
			"PROVINSI_IDENTITAS" => $this->input->post('PROVINSI_IDENTITASu'),
			"NO_TELP_IDENTITAS" => $this->input->post('NO_TELP_IDENTITASu'),
			"RT_IDENTITAS" => $this->input->post('RT_IDENTITASu'),
			"RW_IDENTITAS" => $this->input->post('RW_IDENTITASu'),
			"KD_POS_IDENTITAS" => $this->input->post('KD_POS_IDENTITASu'),
			"ALMT_TINGGAL" => $this->input->post('ALMT_TINGGALu'),
			"KELURAHAN_TINGGAL" => $this->input->post('KELURAHAN_TINGGALu'),
			"KECAMATAN_TINGGAL" => $this->input->post('KECAMATAN_TINGGALu'),
			"KOTA_TINGGAL" => $this->input->post('KOTA_TINGGALu'),
			"PROVINSI_TINGGAL" => $this->input->post('PROVINSI_TINGGALu'),
			"RT_TINGGAL" => $this->input->post('RT_TINGGALu'),
			"RW_TINGGAL" => $this->input->post('RW_TINGGALu'),
			"KD_POS_TINGGAL" => $this->input->post('KD_POS_TINGGALu'),
			"NO_TELP_TINGGAL" => $this->input->post('NO_TELP_TINGGALu'),
			"TGL_MULAI_TINGGAL" => $this->input->post('TGL_MULAI_TINGGALu'),
			"KD_STS_TINGGAL" => $this->input->post('KD_STS_TINGGALu'),
			"KD_PENGHASILAN" => $this->input->post('KD_PENGHASILANu'),
			"KD_PENGHASILAN_LAIN" => $this->input->post('KD_PENGHASILAN_LAINu'),
			"NAMA_PASUTRI" => $this->input->post('NAMA_PASUTRIu'),
			"KD_PEKERJAAN_PASUTRI" => $this->input->post('KD_PEKERJAAN_PASUTRIu'),
			"KET_PEKERJAAN_PASUTRI" => $this->input->post('KET_PEKERJAAN_PASUTRIu'),
			"KD_PENGHASILAN_PASUTRI" => $this->input->post('KD_PENGHASILAN_PASUTRIu'),
			"NAMA_IBU_KANDUNG" => $this->input->post('NAMA_IBU_KANDUNGu')
		];
		$this->Deb_personal_model->updateData($id, $data);
		redirect('deb_personal');
	}
	public function deleteAct()
	{
		$id = $this->input->post('NO_DEB');
		$data['Deb_personal'] = $this->Deb_personal_model->deleteData($id);
		redirect('deb_personal');
	}
	function get_ajax()
	{

		$list = $this->Deb_personal_model->get_datatables();
		$data = array();
		$no = @$_POST['start'];
		foreach ($list as $item) {
			$no++;
			$row = array();
			$row[] = $no . ".";
			$row[] = $item->NO_DEB;
			$row[] = $item->NO_IDENTITAS;
			$row[] = $item->TEMPAT_LAHIR;
			$row[] = $item->TGL_LAHIR;
			$row[] = $item->ALMT_IDENTITAS;
			$row[] = '<button type="button" id="updateBtn" name="updateBtn" class="btn btn-warning text-white" data-toggle="modal" data-target="#update' . $item->NO_DEB . '"><i class="fas fa-edit"></i></button>
			<button type="button" id="deleteBtn" name="deleteBtn" class="btn btn-danger" data-toggle="modal" data-target="#delete' . $item->NO_DEB . '"><i class="fas fa-trash"></button>';
			$data[] = $row;
		}
		$output = array(
			"recordsTotal" => $this->Deb_personal_model->count_all(),
			"recordsFiltered" => $this->Deb_personal_model->count_filtered(),
			"data" => $data,
		);
		echo json_encode($output);
	}
}
