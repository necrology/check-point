<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Test extends CI_Controller
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
        $waktu = date("H:i:s");
        $sesi1 = "sesi 1";
        $jam = $this->m_check_point->get_data($sesi1)->result();
        foreach ($jam as $data){
            if($waktu > $data->jam_awal && $waktu < $data->jam_akhir){
                echo "Bisa Scan Sekarang";
            }
            else {
                echo "Bisa Scan Nanti";
            }
        }
	}
}
