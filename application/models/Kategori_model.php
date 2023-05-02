<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model {

	public function get_kategori()
	{
		$data_kategori= $this->db->get('kategori')->result();
		return $data_kategori;	
	}
	public function masuk_db()
	{
    $config['upload_path'] = './assets/img';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size']  = '10000';
    $config['max_width']  = '102400';
    $config['max_height']  = '76800';
    
    $this->load->library('upload', $config);
    
    if ( ! $this->upload->do_upload('gambar')){
        $this->session->set_flashdata('pesan', $this->upload->display_errors());
        return false;
    }
    else{
		$data_kategori=array(
			'nama_kategori'=>$this->input->post('nama_kategori'),
			'gambar' => $this->upload->data('file_name'),
			'harga'=>$this->input->post('harga'),
		);
		$sql_masuk=$this->db->insert('kategori', $data_kategori);
		return $sql_masuk;
    }
 
}
public function detail_kategori($id_kategori){
	return $this->db->where('id_kategori', $id_kategori)->get('kategori')->row();
}

public function update_kategori()
{
        $nama_gambar=@$_FILES['gambar']['name'];
        if($nama_gambar!=""){
            
            $config['upload_path'] = './assets/gambar';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']  = '10000';
            $config['max_width']  = '102400';
            $config['max_height']  = '76800';
            
            $this->load->library('upload', $config);
            
            if ( ! $this->upload->do_upload('gambar')){
               $this->session->set_flashdata('pesan', $this->upload->display_errors());
               return false;
            }
            else{
                $db_up_kategori=array(
                    'nama_kategori'=>$this->input->post('nama_kategori'),
                    'gambar' => $this->upload->data('file_name'),
                    'harga'=>$this->input->post('harga'),
                );
                return $this->db->where('id_kategori', $this->input->post('id_kategori'))->update('kategori',$db_up_kategori);
            }   
        } else {
            $db_up_kategori=array(
				'nama_kategori'=>$this->input->post('nama_kategori'),
				'harga'=>$this->input->post('harga'),
            );
            return $this->db->where('id_kategori', $this->input->post('id_kategori'))->update('kategori',$db_up_kategori);
        }
    }
	public function delete_kategori($id_kategori)
	{
		$delete = $this->db->where('id_kategori',$id_kategori)->delete('kategori');
		return $delete;
	}
}

/* End of file kategori_model.php */
/* Location: ./application/models/kategori_model.php */