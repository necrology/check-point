<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hasil_scan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('m_user');
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
				$x['data'] = $this->m_check_point->get_all_data();
				$this->load->view('security/hasil_scan', $x);
			} elseif ($_SESSION['pengguna_level'] == 'admin') {
				redirect('dashboard');
			}
		} else {
			redirect('login');
		}
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


	function lihat_data()
	{
		$waktu1 = $this->input->post('data_awal');
		$waktu2 = $this->input->post('data_akhir');

		$x['data'] = $this->m_check_point->get_data_by_date($waktu1, $waktu2);
		$this->load->view('security/hasil_scan', $x);
	}

	function hapus($id_user)
	{
		$where = array('id_user' => $id_user);
		$this->m_user->hapus_data($where, 'users');
		redirect('user');
	}
}
