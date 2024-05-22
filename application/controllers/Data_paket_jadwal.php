<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_paket_jadwal extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('m_check_point');
		if (!isset($_SESSION['logged_in'])) {
			$url = base_url('login');
			redirect($url);
		};
	}

	public function index()
	{
		if ($this->session->userdata('logged_in')) {
			if ($_SESSION['pengguna_level'] == 'pemeriksa') {
				redirect('scan_qr');
			} elseif ($_SESSION['pengguna_level'] == 'admin') {
				$x['table'] = $this->m_check_point->get_all_data_paket_table();
				$x['paket'] = $this->m_check_point->get_all_data_paket();
				$this->load->view('admin/data_paket_jadwal',$x);
			}
		} else {
			$this->load->view('login');
		}
	}

	function tampilkan(){
		$paket = $this->input->post('tampilkan_sesi');
		$x['paket'] = $this->m_check_point->get_all_data_paket();
		$x['table'] = $this->m_check_point->get_data_by_paket($paket);
		$this->load->view('admin/data_paket_jadwal', $x);
	}

	function simpan_data()
	{
		$img = $_POST['image'];
		$folderPath = "upload/";

		$image_parts = explode(";base64,", $img);
		$image_type_aux = explode("image/", $image_parts[0]);
		$image_type = $image_type_aux[1];

		$image_base64 = base64_decode($image_parts[1]);
		$fileName = uniqid() . '.png';

		$file = $folderPath . $fileName;
		file_put_contents($file, $image_base64);

		// $tanggal = new DateTime("today");
		$nama_pemeriksa = $_SESSION['nama_user'];
		$sesi_check_point = $this->input->post('sesi_check_point');
		$area = $this->input->post('area');
		$photo_bukti = $fileName;

		$this->m_check_point->simpan_data($nama_pemeriksa, $sesi_check_point, $area, $photo_bukti);
		$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert"></span></button>Data Check-point Berhasil Disimpan</div>');
		redirect('scan_qr');
	}

	function hapus_paket()
	{	
		$paket = urldecode($this->uri->segment(3));
		$this->m_check_point->hapus_paket($paket);
		redirect('data_paket_jadwal');
	}

	function edit_data_paket()
	{
		$id_paket = $this->uri->segment(3);
		$data_paket = $this->m_check_point->get_data_by_paket_id($id_paket)->result();
		foreach ($data_paket as $paket2){
			$where = $paket2->paket;
		}
		$sesi1 ='sesi 1';
		$sesi2 ='sesi 2';
		$sesi3 ='sesi 3';
		$sesi4 ='sesi 4';
		$sesi5 ='sesi 5';
		$sesi6 ='sesi 6';
		$data['sesi1'] = $this->m_check_point->get_data_by_paket_sesi1($where,$sesi1)->result();
		$data['sesi2'] = $this->m_check_point->get_data_by_paket_sesi2($where,$sesi2)->result();
		$data['sesi3'] = $this->m_check_point->get_data_by_paket_sesi3($where,$sesi3)->result();
		$data['sesi4'] = $this->m_check_point->get_data_by_paket_sesi4($where,$sesi4)->result();
		$data['sesi5'] = $this->m_check_point->get_data_by_paket_sesi5($where,$sesi5)->result();
		$data['sesi6'] = $this->m_check_point->get_data_by_paket_sesi6($where,$sesi6)->result();
		$this->load->view('admin/edit_data_paket', $data);
	}

	public function update_paket(){
		$NamaPaket = $this->input->post('NamaPaket');
		$sesi1_jam_awal = $this->input->post('sesi1_jam_awal');
		$sesi1_jam_akhir = $this->input->post('sesi1_jam_akhir');
		$sesi2_jam_awal = $this->input->post('sesi2_jam_awal');
		$sesi2_jam_akhir = $this->input->post('sesi2_jam_akhir');
		$sesi3_jam_awal = $this->input->post('sesi3_jam_awal');
		$sesi3_jam_akhir = $this->input->post('sesi3_jam_akhir');
		$sesi4_jam_awal = $this->input->post('sesi4_jam_awal');
		$sesi4_jam_akhir = $this->input->post('sesi4_jam_akhir');
		$sesi5_jam_awal = $this->input->post('sesi5_jam_awal');
		$sesi5_jam_akhir = $this->input->post('sesi5_jam_akhir');
		$sesi6_jam_awal = $this->input->post('sesi6_jam_awal');
		$sesi6_jam_akhir = $this->input->post('sesi6_jam_akhir');

		$this->m_check_point->update_paket($NamaPaket,$sesi1_jam_awal,$sesi1_jam_akhir,$sesi2_jam_awal,$sesi2_jam_akhir,$sesi3_jam_awal,$sesi3_jam_akhir,$sesi4_jam_awal,$sesi4_jam_akhir,$sesi5_jam_awal,$sesi5_jam_akhir,$sesi6_jam_awal,$sesi6_jam_akhir);
		redirect('data_paket_jadwal');
	}

	function update_data_jadwal()
	{
		$id_jadwal = $this->input->post('id_jadwal');
		$sesi 	   = $this->input->post('sesi');
		$jam_awal  = $this->input->post('jam_awal');
		$jam_akhir  = $this->input->post('jam_akhir');

		$this->m_check_point->update_data($id_jadwal, $sesi, $jam_awal, $jam_akhir);
		redirect('data_jadwal');
	}

	function paket_jadwal1(){
		$this->m_check_point->update_jadwal_paket1();
		redirect('data_jadwal');
	}

	function paket_jadwal2(){
		$id_jadwal = $this->input->post('id_jadwal');
		$sesi 	   = $this->input->post('sesi');
		$jam_awal  = $this->input->post('jam_awal');
		$jam_akhir  = $this->input->post('jam_akhir');
	}
}
