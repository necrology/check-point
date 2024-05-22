<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Add_data_paket extends CI_Controller
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
				redirect('scan_qr');
			} elseif ($_SESSION['pengguna_level'] == 'admin') {
				$this->load->view('admin/add_data_paket');
			}
		} else {
			$this->load->view('login');
		}
	}

	function add_data_paket()
	{	
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
		
		$data = array(
            array(
                'paket'     => $NamaPaket ,
                'sesi'      => 'sesi 1' ,
                'jam_awal'  => $sesi1_jam_awal ,
                'jam_akhir' => $sesi1_jam_akhir
			),
			array(
                'paket'     => $NamaPaket ,
                'sesi'      => 'sesi 2' ,
                'jam_awal'  => $sesi2_jam_awal ,
                'jam_akhir' => $sesi2_jam_akhir
			),
			array(
                'paket'     => $NamaPaket ,
                'sesi'      => 'sesi 3' ,
                'jam_awal'  => $sesi3_jam_awal ,
                'jam_akhir' => $sesi3_jam_akhir
			),
			array(
                'paket'     => $NamaPaket ,
                'sesi'      => 'sesi 4' ,
                'jam_awal'  => $sesi4_jam_awal ,
                'jam_akhir' => $sesi4_jam_akhir
			),
			array(
                'paket'     => $NamaPaket ,
                'sesi'      => 'sesi 5' ,
                'jam_awal'  => $sesi5_jam_awal ,
                'jam_akhir' => $sesi5_jam_akhir
			),
			array(
                'paket'     => $NamaPaket ,
                'sesi'      => 'sesi 6' ,
                'jam_awal'  => $sesi6_jam_awal ,
                'jam_akhir' => $sesi6_jam_akhir
			)
            );
		
		$this->m_check_point->add_data_paket($data);
		redirect('data_paket_jadwal');
	}

}

