<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_jadwal extends CI_Controller
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
				$x['data'] 	= $this->m_check_point->get_all_data_jadwal();
				$x['paket'] = $this->m_check_point->get_all_data_paket();
				$this->load->view('admin/data_jadwal', $x);
			}
		} else {
			$this->load->view('login');
		}
	}

	public function implementasi()
	{
		$paket = $this->input->post('paket');

		$data1 = $this->m_check_point->get_data_paket_sesi1($paket)->result();
		$data2 = $this->m_check_point->get_data_paket_sesi2($paket)->result();
		$data3 = $this->m_check_point->get_data_paket_sesi3($paket)->result();
		$data4 = $this->m_check_point->get_data_paket_sesi4($paket)->result();
		$data5 = $this->m_check_point->get_data_paket_sesi5($paket)->result();
		$data6 = $this->m_check_point->get_data_paket_sesi6($paket)->result();

		foreach($data1 as $datasesi1){	
			$sesi1 = $datasesi1->sesi;
			$jamawalsesi1 = $datasesi1->jam_awal;
			$jamakhirsesi1 = $datasesi1->jam_akhir;
		}

		foreach($data2 as $datasesi2){	
			$sesi2 = $datasesi2->sesi;
			$jamawalsesi2 = $datasesi2->jam_awal;
			$jamakhirsesi2 = $datasesi2->jam_akhir;
		}

		foreach($data3 as $datasesi3){	
			$sesi3 = $datasesi3->sesi;
			$jamawalsesi3 = $datasesi3->jam_awal;
			$jamakhirsesi3 = $datasesi3->jam_akhir;
		}

		foreach($data4 as $datasesi4){	
			$sesi4 = $datasesi4->sesi;
			$jamawalsesi4 = $datasesi4->jam_awal;
			$jamakhirsesi4 = $datasesi4->jam_akhir;
		}

		foreach($data5 as $datasesi5){	
			$sesi5 = $datasesi5->sesi;
			$jamawalsesi5 = $datasesi5->jam_awal;
			$jamakhirsesi5 = $datasesi5->jam_akhir;
		}

		foreach($data6 as $datasesi6){	
			$sesi6 = $datasesi6->sesi;
			$jamawalsesi6 = $datasesi6->jam_awal;
			$jamakhirsesi6 = $datasesi6->jam_akhir;
		}

		$this->m_check_point->update_jadwal($sesi1,$jamawalsesi1,$jamakhirsesi1,$sesi2,$jamawalsesi2,$jamakhirsesi2,$sesi3,$jamawalsesi3,$jamakhirsesi3,$sesi4,$jamawalsesi4,$jamakhirsesi4,$sesi5,$jamawalsesi5,$jamakhirsesi5,$sesi6,$jamawalsesi6,$jamakhirsesi6);
		redirect('data_jadwal');

	}

	function hapus($id_user)
	{
		$where = array('id_user' => $id_user);
		$this->m_user->hapus_data($where, 'users');
		redirect('user');
	}

	function edit_data_jadwal()
	{
		$id_jadwal = $this->uri->segment(3);
		$where = array('id_jadwal' => $id_jadwal);
		$data['jadwal'] = $this->m_check_point->getById($where, 'data_jadwal_sesi')->result();
		$this->load->view('admin/edit_data_jadwal', $data);
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
