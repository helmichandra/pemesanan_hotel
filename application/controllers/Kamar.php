<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('login')!=true){
			redirect(base_url('index.php/login'),'refresh');	
		}
	}


	public function index()
	{
        $data['konten']="v_kamar";
        $this->load->model('kategori_model');
        $data['data_kategori']= $this->kategori_model->get_kategori();
        $this->load->model("kamar_model");
        $data{'data_kamar'}=$this->kamar_model->get_kamar();
        $this->load->view("template",$data);
	}
	public function simpan_kamar()
	{
		$this->form_validation->set_rules('nama_kamar', 'Nama Kamar',
		'trim|required', array('required' => 'nama kategori harus diisi'));
		$this->form_validation->set_rules('id_kategori', 'ID Kategori',
        'trim|required', array('required' => 'ID Kategori harus diisi'));
        $this->form_validation->set_rules('harga', 'Harga',
		'trim|required', array('required' => 'Harga harus diisi'));
		$this->form_validation->set_rules('stok', 'stok',
		'trim|required', array('required' => 'Stok harus diisi'));
		
		if ($this->form_validation->run() == TRUE ) 
		{
			$this->load->model('kamar_model','kam');
			$masuk=$this->kam->insert_kamar();
			if($masuk==true){
				$this->session->set_flashdata('pesan','sukses masuk');
			} else{
				$this->session->set_flashdata('pesan', 'gagal masuk');
			}
			redirect(base_url('index.php/kamar'),'refresh');
		} else {
			$this->session->set_flashdata('pesan', validation_errors());
			redirect(base_url('index.php/kamar'), 'refresh');
		}
	}

	public function detail_kamar($id_kamar='')
	{
		$this->load->model('kamar_model');
		$data_detail=$this->kamar_model->detail_kamar($id_kamar);
		echo json_encode($data_detail);
	}
    public function update_kamar(){
        $this->form_validation->set_rules('nama_kamar','Nama_Kamar', 'trim|required');
        $this->form_validation->set_rules('id_kategori','Id Kategori', 'trim|required');
		$this->form_validation->set_rules('harga','harga', 'trim|required');
		$this->form_validation->set_rules('stok','stok', 'trim|required');
		if ($this->form_validation->run()==FALSE) {
			$this->session->set_flashdata('pesan', validation_errors());
			redirect(base_url('index.php/kamar'),'refresh');
		}else{
			$this->load->model('kamar_model');
			$proses_update=$this->kamar_model->update_kamar();
			if($proses_update){
				$this->session->set_flashdata('pesan', 'sukses update');
			}
			else{
				$this->session->set_flashdata('pesan', 'gagal update');
			}
			redirect(base_url('index.php/kamar'),'refresh');
		}
	}
    public function deleteKamar($id_kamar)
	{
		$this->load->model('kamar_model');
		$prosesDelete = $this->kamar_model->delete_kamar($id_kamar);

		if ($prosesDelete == TRUE) {
			$this->session->flashdata('pesan', 'Sukses Hapus Data');
		}else{
			$this->session->flashdata('pesan','Gagal Hapus Data');
		}
		redirect(base_url('index.php/kamar'),'refresh');
	}
}
