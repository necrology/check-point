<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('m_user');
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
				$x['data'] = $this->m_user->get_all_data();
				$this->load->view('admin/user', $x);
			}
		} else {
			$this->load->view('login');
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

	function hapus($id_user)
	{
		$where = array('id_user' => $id_user);
		$this->m_user->hapus_data($where, 'users');
		redirect('user');
	}
}
