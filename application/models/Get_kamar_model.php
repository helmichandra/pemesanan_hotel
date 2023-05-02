<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Get_kamar_model extends CI_Model {

	public function get_kamar()
	{
		return $this->db->get('kamar')->result();
	}
	public function cari_get_kamar($nama_kamar)
	{
		return $this->db->like('nama_kamar', $nama_kamar)->get('kamar')->result();
	}

	public function get_detail($id_kamar)
	{
		return $this->db
		->join('kategori','kategori.id_kategori=kamar.id_kategori')->where('id_kamar',$id_kamar)->get('kamar')->row();
	}
	public function buat_nota()
	{
		$data=array(
			'id_pelanggan'=>$this->session->userdata('id_pelanggan'),
			'tgl_date'=>date('Y-m-d')
		);
		return $this->db->insert('nota',$data);
	}
	public function get_last_nota()
	{
		return $this->db
			->where('id_pelanggan',$this->session->userdata('id_pelanggan'))
			->order_by('id_nota','desc')
			->limit('1')
			->get('nota')->row();
	}
	public function update_bukti()
	{
		$data=array(
			'bukti'=>$this->upload->data('file_name')
		);
		return $this->db->where('id_nota',$this->input->post('id_nota'))->update('nota',$data);
	}
	public function update_total($id_nota)
	{
		$data = array("grandtotal" => $this->cart->total());
		return $this->db->where('id_nota',$id_nota)->update('nota',$data);
	}
}

/* End of file Get_barang_model.php */
/* Location: ./application/models/Get_barang_model.php */