<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Add_data_user extends CI_Controller
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
				$this->load->view('admin/add_data_user');
			}
		} else {
			$this->load->view('login');
		}
	}

	function add_data_user()
	{
		$nama       = $this->input->post('nama');
		$username   = $this->input->post('username');
		$password   = $this->input->post('password');
		$level      = $this->input->post('level');

		$this->m_user->add_data_user($nama,$username,$password,$level);
		$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert"></span></button> Data User Berhasil Ditambahkan</div>');
		redirect('user');
	}

}

