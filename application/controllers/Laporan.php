<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
     $this->load->library('Tpdf');
		 $this->load->library('Pdf');

	}

	
	public function index()
	{
		$data['title'] = 'Laporan';
		$data['user']=$this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$data['absen'] = $this->db->get('pengajuan_pekerjaan')->result_array();




		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('laporan/index', $data);
		$this->load->view('templates/footer');
		
	}

	public function cari()
	{

		$dari = $this->input->post('dari');
		$sampai = $this->input->post('sampai');
$status = $this->input->post('status');

if ($this->input->post('status') == 'semua') {

$query = "
	SELECT * FROM pengajuan_pekerjaan
	WHERE `pengajuan_pekerjaan`.`tanggal` BETWEEN '$dari' AND '$sampai' 
";
  

}else{
  $query = "
  SELECT * FROM pengajuan_pekerjaan
	WHERE `pengajuan_pekerjaan`.`tanggal` BETWEEN '$dari' AND '$sampai' 
  AND `pengajuan_pekerjaan`.`status` =  '$status'
";
}



$data['list'] = $this->db->query($query)->result();

$this->load->view('laporan/laporan_aja', $data);



	}


	public function cetakbulanini()
	{

		$bulan = date('m');
		$bulans = date('F');

		
	
$status = $this->input->post('status');

if ($this->input->post('status') == 'semua') {

$query = "
	SELECT * FROM pengajuan_pekerjaan
	
	WHERE month(`tanggal`) =  '$bulan'
";
}else{
$query = "
	SELECT * FROM pengajuan_pekerjaan
	WHERE month(`tanggal`) =  '$bulan' and status = '$status'
";
}

$data['list'] = $this->db->query($query)->result();

$this->load->view('laporan/laporan_bulanini', $data);

}



	public function cetaktahunini()
	{

		$tahun = date('Y');
	

	$status = $this->input->post('status');

if ($this->input->post('status') == 'semua') {

$query = "
 SELECT * FROM pengajuan_pekerjaan
	WHERE year(`tanggal`) =  '$tahun'
";
}else{
$query = "
	SELECT * FROM pengajuan_pekerjaan
	WHERE year(`tanggal`) =  '$tahun' and status = '$status'
";
}


$data['list'] = $this->db->query($query)->result();

$this->load->view('laporan/laporan_tahunini', $data);



	}

	


}