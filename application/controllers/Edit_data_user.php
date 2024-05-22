<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Edit_data_user extends CI_Controller
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
				$this->load->view('admin/edit_data_user');
			}
		} else {
			$this->load->view('login');
		}
	}

	public function edit_data_user()
	{
		$id_user = $this->uri->segment(3);
		$where = array('id_user' => $id_user);
		$data['user'] = $this->m_user->getById($where, 'users')->result();
		$this->load->view('admin/edit_data_user', $data);
	}
}
