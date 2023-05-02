<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trans extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('login_user')!=true){
			redirect(base_url('index.php/login_user'),'refresh');	
		}
	}


	public function index()
	{
		$data['konten']="v_pesanan";
		$this->load->view('template_user',$data);
	}
	public function upload_bukti()
    {
        
        $config['upload_path'] = './assets/bukti';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']  = '100000';
        $config['max_width']  = '1024000';
        $config['max_height']  = '768000';
        
        $this->load->library('upload', $config);
        
        if ( ! $this->upload->do_upload('bukti')){
            $error = array('status' => 0,'error' => $this->upload->display_errors());
            echo json_encode($error);
        }
        else{
            $this->load->model('get_kamar_model','gt_kmr');
            $get_nota_semua = $this->gt_kmr->update_bukti();
            $data = array('status' => 1,'upload_data' => $this->upload->data());
            echo json_encode($data);
        }
                
    }
    public function hapus_semua()
	{
		$this->cart->destroy();
		$data['status']=1;
		echo json_encode($data);
	}
	public function hapus_cart($id='')
	{
		$data= array(
			'rowid' => $id,
			'qty' => 0
		);
		$update_cart=$this->cart->update($data);
		if($update_cart){
			$data['status']=1;
			echo json_encode($data);
		}else{
			$data['status']=0;
			echo json_encode($data);
		}
	}
	
	public function tambah_cart($id_kamar,$jumlah)
	{
		$this->load->model('get_kamar_model','gt_kmr');
		$dt_detail=$this->gt_kmr->get_detail($id_kamar);
		$data = array(
			'id'=> $dt_detail->id_kamar,
			'qty'=> $jumlah,
			'price'=> $dt_detail->harga,
			'name'=> $dt_detail->nama_kamar,
			'options'=> array('kategori' => $dt_detail->nama_kategori)
		);

		$tambah_cart=$this->cart->insert($data);
		if($tambah_cart){
			$dt['total_cart']=$this->cart->total_items();
			$dt['status']=1;
			echo json_encode($dt);
		}else{
			$dt['total_cart']=$this->cart->total_items();
			$dt['status']=0;
			echo json_encode($dt);
		}
	}
	public function tm_pesanan()
	{
		$data['total_seluruh']=$this->cart->total();
		$data['data_cart']=$this->cart->contents();
		echo json_encode($data);
	}
	public function show_cart_items()
	{
		$dt['total_cart']=$this->cart->total_items();
		echo json_encode($dt);
	}

public function simpan_bayar()
{
	$this->load->model('get_kamar_model','gt_kmr');
	$buat_nota=$this->gt_kmr->buat_nota();
	if ($buat_nota) {
		$dt_nota=$this->gt_kmr->get_last_nota();
		foreach ($this->cart->contents() as $item){
			$object[]=array(
				'id_nota'=>$dt_nota->id_nota,
				'id_kamar'=>$item['id'],
				'qty'=>$item['qty']
			);
		}
		$masuk_data=$this->db->insert_batch('transaksi', $object);
		if ($masuk_data) {
			$this->gt_kmr->update_total($dt_nota->id_nota);

			$data['status']=1;
			$data['id_nota']=$dt_nota->id_nota;
			$data['total']=$this->cart->total();
			$this->cart->destroy();
			echo json_encode($data);
		} else {
			$data['status']=0;
			echo json_encode($data);
		}
	}
}
}
