<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Get_barang_model extends CI_Model {

	public function get_barang($value='')
	{
		return $this->db->get('barang')->result();
	}
	

}

/* End of file Get_barang_model.php */
/* Location: ./application/models/Get_barang_model.php */