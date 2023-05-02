<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Get_kamar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('get_kamar_model','gt_kam');
	}
	public function index()
	{
		$dt_kamar=$this->gt_kam->get_kamar();
		echo json_encode($dt_kamar);
			
	}
	public function cari($nama_kamar='')
	{
		$dt_kamar = $this->gt_kam->cari_get_kamar('nama_kamar');
       echo json_encode($dt_kamar);
	}
	public function detail($id_kamar)
	{
		$dt_kamar=$this->gt_kam->get_detail($id_kamar);
		echo json_encode($dt_kamar);
	}

}

/* End of file Get_barang.php */
/* Location: ./application/controllers/Get_barang.php */