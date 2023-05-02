<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_user extends CI_Controller {

	public function index()
	{
		$this->load->view('v_login_user');
	}
	public function simpan($value='')
	{
		$this->load->model('login_user_model','l_user');
		$cek_data=$this->l_user->tambah_user();
		if ($cek_data) {
			$data['status']=true;
			$data['keterangan']="Anda sukses menambah data";
			echo json_encode($data);
		}else{
			$data['status']=false;
			$data['keterangan']="Anda gagal menambah data";
			echo json_encode($data);
		}
	}
	public function proses($value='')
	{
		$this->load->model('login_user_model','l_user');
		$login=$this->l_user->cek_user();
		if ($login->num_rows()>false) {
			$dt_user=$login->row();
			$array=array(
				'id_pelanggan'=> $dt_user->id_pelanggan,
				'nama'=> $dt_user->nama_pelanggan,
				'username'=> $dt_user->username,
				'password'=> $dt_user->password,
				'login_user'=>true
			);
			$this->session->set_userdata($array);
			$data['status']=true;
			echo json_encode($data);
		}else{
			$data['status']=false;
			echo json_encode($data);
		}
	}


}

/* End of file Login_user.php */
/* Location: ./application/controllers/Login_user.php */