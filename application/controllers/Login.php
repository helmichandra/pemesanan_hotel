<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('v_login');
	}

	public function proses_login()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required',array('required'=>'Username harus diisi lur'));
		$this->form_validation->set_rules('password', 'Password', 'trim|required',array('required'=>'Password harus diisi lur'));
		if ($this->form_validation->run()==FALSE) {
			$this->session->set_flashdata('pesan', validation_errors());
			redirect(base_url('index.php/login'));
		}
		else{
			$this->load->model('login_model');
			$cek_login=$this->login_model->get_login();
			if($cek_login->num_rows()>0){
				$data_login=$cek_login->row();

				$array = array(
					'id_admin' => $data_login->id_admin,
					'login'=>true,
					'username' => $data_login->username,
					'password' => $data_login->password
				);
				
				$this->session->set_userdata( $array );
				redirect(base_url('index.php/Dashboard'));
			}
			else{
				$this->session->set_flashdata('pesan', 'username dan password ga cocok lur');
				redirect(base_url('index.php/login'));

			}
		}
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */