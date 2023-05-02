<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P_model extends CI_Model {


	public function get_pelanggan($value='')
	{
		return $this->db->get('pelanggan')->result();
	}
	

}

/* End of file Get_barang_model.php */
/* Location: ./application/models/Get_barang_model.php */