<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Scan_qr extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->set_timezone();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('m_check_point');
		if (!isset($_SESSION['logged_in'])) {
			$url = base_url('login');
			redirect($url);
		};
	}

	public function set_timezone()
	{
		if ($this->session->userdata('user_id')) {
			$this->db->select('timezone');
			$this->db->from($this->db->dbprefix . 'user');
			$this->db->where('user_id', $this->session->userdata('user_id'));
			$query = $this->db->get();
			if ($query->num_rows() > 0) {
				date_default_timezone_set($query->row()->timezone);
			} else {
				return false;
			}
		}
	}

	public function index()
	{
		if($this->session->userdata('logged_in'))
        {
          if($_SESSION['pengguna_level'] == 'pemeriksa'){
            $this->load->view('security/scan_qr');
          }elseif($_SESSION['pengguna_level'] == 'admin'){
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
		$photo_bukti = $fileName;

		$jam = date("H:i:s");
		$nama_pemeriksa = $_SESSION['nama_user'];
		$sesi_check_point = $this->input->post('sesi_check_point');
		$area = $this->input->post('area');
		$keterangan = $this->input->post('keterangan');
		$waktu = $this->m_check_point->get_data($sesi_check_point)->result();
		foreach ($waktu as $data) {
			if ($sesi_check_point == 'sesi 1' && $jam > $data->jam_awal && $jam < $data->jam_akhir) {
				$this->m_check_point->simpan_data($nama_pemeriksa, $sesi_check_point, $area, $photo_bukti, $keterangan);
				$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert"></span></button> Data Check-Point Berhasil Disimpan.</div>');
				redirect('scan_qr');
			}
			if ($sesi_check_point == 'sesi 2' && $jam > $data->jam_awal && $jam < $data->jam_akhir) {
				$this->m_check_point->simpan_data($nama_pemeriksa, $sesi_check_point, $area, $keterangan);
				$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert"></span></button> Data Check-Point Berhasil Disimpan.</div>');
				redirect('scan_qr');
			}
			if ($sesi_check_point == 'sesi 3' && $jam > $data->jam_awal && $jam < $data->jam_akhir) {
				$this->m_check_point->simpan_data($nama_pemeriksa, $sesi_check_point, $area, $keterangan);
				$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert"></span></button> Data Check-Point Berhasil Disimpan.</div>');
				redirect('scan_qr');
			}
			if ($sesi_check_point == 'sesi 3' && $jam > $data->jam_awal && $jam < $data->jam_akhir) {
				$this->m_check_point->simpan_data($nama_pemeriksa, $sesi_check_point, $area, $keterangan);
				$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert"></span></button> Data Check-Point Berhasil Disimpan.</div>');
				redirect('scan_qr');
			}
			if ($sesi_check_point == 'sesi 3' && $jam > $data->jam_awal && $jam < $data->jam_akhir) {
				$this->m_check_point->simpan_data($nama_pemeriksa, $sesi_check_point, $area, $keterangan);
				$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert"></span></button> Data Check-Point Berhasil Disimpan.</div>');
				redirect('scan_qr');
			}
			if ($sesi_check_point == 'sesi 3' && $jam > $data->jam_awal && $jam < $data->jam_akhir) {
				$this->m_check_point->simpan_data($nama_pemeriksa, $sesi_check_point, $area, $keterangan);
				$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert"></span></button> Data Check-Point Berhasil Disimpan.</div>');
				redirect('scan_qr');
			} else {
				$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"></span></button> Data Check-Point Gagal Disimpan.</div>');
				redirect('scan_qr');
			}
		}
	}
}
