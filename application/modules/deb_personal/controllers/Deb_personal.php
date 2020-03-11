<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Deb_personal extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Z');
	}
	public function index()
	{
		$data['style']  = $this->load->view('style', '', true);
		$data['script']  = $this->load->view('script', '', true);
		$data['deb_personal'] = $this->Z->readData();
		$GRUP_ID = $this->session->userdata('GRUP_ID');
		$data['namaMenu'] = $this->Z->readMenu($GRUP_ID);
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
			$this->Z->createData($data);
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
			$this->Z->updateData($id, $data);
			redirect('deb_personal');
		
	}
	public function deleteAct()
	{
		$id = $this->input->post('NO_DEB');
		$data['Deb_personal'] = $this->Z->deleteData($id);
		redirect('deb_personal');
	}
	function get_ajax()
	{

		$list = $this->Z->get_datatables();
		$data = array();
		$no = @$_POST['start'];
		foreach ($list as $item) {
			$no++;
			$row = array();
			$row[] = $no . ".";
			$row[] = $item->NO_DEB;
			$row[] = $item->NO_IDENTITAS;
			$row[] = $item->TGL_IDENTITAS;
			$row[] = $item->KD_NEGARA;
			$row[] = $item->TEMPAT_LAHIR;
			$row[] = $item->TGL_LAHIR;
			$row[] = $item->KD_KELAMIN;
			$row[] = $item->KD_AGAMA;
			$row[] = $item->KET_AGAMA;
			$row[] = $item->KD_STS_KAWIN;
			$row[] = $item->KD_PENDIDIKAN;
			$row[] = $item->KET_PENDIDIKAN;
			$row[] = $item->KD_PENDUDUK;
			$row[] = $item->KD_PEKERJAAN;
			$row[] = $item->KET_PEKERJAAN;
			$row[] = $item->ALMT_IDENTITAS;
			$row[] = $item->KELURAHAN_IDENTITAS;
			$row[] = $item->KECAMATAN_IDENTITAS;
			$row[] = $item->KOTA_IDENTITAS;
			$row[] = $item->PROVINSI_IDENTITAS;
			$row[] = $item->NO_TELP_IDENTITAS;
			$row[] = $item->RT_IDENTITAS;
			$row[] = $item->RW_IDENTITAS;
			$row[] = $item->KD_POS_IDENTITAS;
			$row[] = $item->ALMT_TINGGAL;
			$row[] = $item->KELURAHAN_TINGGAL;
			$row[] = $item->KECAMATAN_TINGGAL;
			$row[] = $item->KOTA_TINGGAL;
			$row[] = $item->PROVINSI_TINGGAL;
			$row[] = $item->RT_TINGGAL;
			$row[] = $item->RW_TINGGAL;
			$row[] = $item->KD_POS_TINGGAL;
			$row[] = $item->NO_TELP_TINGGAL;
			$row[] = $item->TGL_MULAI_TINGGAL;
			$row[] = $item->KD_STS_TINGGAL;
			$row[] = $item->KD_PENGHASILAN;
			$row[] = $item->KD_PENGHASILAN_LAIN;
			$row[] = $item->NAMA_PASUTRI;
			$row[] = $item->KD_PEKERJAAN_PASUTRI;
			$row[] = $item->KET_PEKERJAAN_PASUTRI;
			$row[] = $item->KD_PENGHASILAN_PASUTRI;
			$row[] = $item->NAMA_IBU_KANDUNG;
			$row[] = '<button type="button" id="updateBtn" name="update" class="btn btn-outline-warning" data-toggle="modal" data-target="#update' . $item->NO_DEB . '">Update</button>
			<button type="button" id="deleteBtn" name="delete" class="btn btn-outline-danger" data-toggle="modal" data-target="#delete' . $item->NO_DEB . '">Delete</button>';
			$data[] = $row;
		}
		$output = array(
			"recordsTotal" => $this->Z->count_all(),
			"recordsFiltered" => $this->Z->count_filtered(),
			"data" => $data,
		);
		echo json_encode($output);
	}
}
