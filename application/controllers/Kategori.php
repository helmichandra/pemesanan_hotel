<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('login')!=true){
			redirect(base_url('index.php/login'),'refresh');	
		}
	}


	public function index()
	{
		$data['konten']="v_kategori";
		$this->load->model('kategori_model');
		$data['data_kategori']=$this->kategori_model->get_kategori();
		$this->load->view('index', $data, FALSE);
	}
	public function simpan_kategori()
	{
		$this->form_validation->set_rules('nama_kategori', 'Nama_Kategori', 'trim|required',
		array('required' => 'nama kategori harus diisi'));
		if ($this->form_validation->run() == TRUE ) {
			$this->load->model('kategori_model','kat');
			$masuk=$this->kat->masuk_db();
			if($masuk==true){
				$this->session->set_flashdata('pesan','sukses masuk');
			} else{
				$this->session->set_flashdata('pesan', 'gagal masuk');
			}
			redirect(base_url('index.php/kategori'),'refresh');
		} else {
			$this->session->set_flashdata('pesan', validation_errors());
			redirect(base_url('index.php/kategori'), 'refresh');
		}
	}
	public function update_kategori(){
		$this->form_validation->set_rules('nama_kategori','Nama Kategori ', 'trim|required');
		$this->form_validation->set_rules('harga','Harga', 'trim|required');
		if ($this->form_validation->run()==FALSE) {
			$this->session->set_flashdata('pesan', validation_errors());
			redirect(base_url('index.php/kategori'),'refresh');
		}else{
			$this->load->model('kategori_model');
			$proses_update=$this->kategori_model->update_kategori();
			if($proses_update){
				$this->session->set_flashdata('pesan', 'sukses update');
			}
			else{
				$this->session->$this->session->set_flashdata('pesan', 'gagal update');
			}
			redirect(base_url('index.php/kategori'),'refresh');
		}
	}
	public function detail_kategori($id_kategori='')
	{
		$this->load->model('kategori_model');
		$data_detail=$this->kategori_model->detail_kategori($id_kategori);
		echo json_encode($data_detail);
	}
	public function deleteKategori($id_kategori)
	{
		$this->load->model('kategori_model');
		$prosesDelete = $this->kategori_model->delete_kategori($id_kategori);

		if ($prosesDelete == TRUE) {
			$this->session->flashdata('pesan', 'Sukses Hapus Data');
		}else{
			$this->session->flashdata('pesan','Gagal Hapus Data');
		}
		redirect(base_url('index.php/kategori'),'refresh');
	}

}

/* End of file Kategori.php */
/* Location: ./application/controllers/Kategori.php */