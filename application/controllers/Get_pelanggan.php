<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Get_pelanggan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('get_pelanggan_model','gt_pelg');
	}
	public function index()
	{
		$dt_pelanggan=$this->gt_pelg->get_pelanggan();
		echo json_encode($dt_pelanggan);
			
	}
	public function get()
	{
		$data = $this->db->get('pelanggan')->result();
       return $data;
	}

}

/* End of file Get_barang.php */
/* Location: ./application/controllers/Get_barang.php */