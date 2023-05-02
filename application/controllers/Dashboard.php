<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('login')!=true) {
			redirect(base_url('index.php/login'),'refresh');
		}
		
	}
	public function index()
	{
		$data['konten']='home';
		$this->load->view('index', $data);
	}
	public function v_pelanggan()
	{
		$data['konten']='v_pelanggan';
		$this->load->view('index', $data, FALSE);
	}
	

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */