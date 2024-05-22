<?php
defined('BASEPATH') or exit('No direct script access allowed');

require('./application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Dashboard extends CI_Controller
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
		$this->load->model('m_check_point');
	}

	public function index()
	{
		if ($this->session->userdata('logged_in')) {
			if ($_SESSION['pengguna_level'] == 'pemeriksa') {
				redirect('scan_qr');
			} elseif ($_SESSION['pengguna_level'] == 'admin') {
				$x['data'] = $this->m_check_point->get_all_data();
				$this->load->view('admin/dashboard', $x);
			}
		} else {
			$this->load->view('login');
		}
	}

	public function export_excel()
	{
		$waktu1 = $this->input->post('data_awal');
		$waktu2 = $this->input->post('data_akhir');

		$data_check_point = $this->m_check_point->get_data_excel($waktu1, $waktu2)->result();

		$spreadsheet = new Spreadsheet;

		$spreadsheet->setActiveSheetIndex(0)
			->setCellValue('A1', 'NO')
			->setCellValue('B1', 'NO ID')
			->setCellValue('C1', 'Tanggal & Waktu')
			->setCellValue('D1', 'Nama Pemeriksa')
			->setCellValue('E1', 'SESI')
			->setCellValue('F1', 'AREA')
			->setCellValue('G1', 'KETERANGAN');

		$kolom = 2;
		$nomor = 1;
		foreach ($data_check_point as $data) {
			$spreadsheet->setActiveSheetIndex(0)
				->setCellValue('A' . $kolom, $nomor)
				->setCellValue('B' . $kolom, $data->id_check_point)
				->setCellValue('C' . $kolom, $data->tanggal_waktu)
				->setCellValue('D' . $kolom, $data->nama_pemeriksa)
				->setCellValue('E' . $kolom, $data->sesi_check_point)
				->setCellValue('F' . $kolom, $data->area)
				->setCellValue('G' . $kolom, $data->keterangan);

			$kolom++;
			$nomor++;
		}

		$writer = new Xlsx($spreadsheet);

		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="Laporan Data Check Point ' . $waktu1 . '---' . $waktu2 . '.xlsx"');
		header('Cache-Control: max-age=0');

		$writer->save('php://output');
	}
}
