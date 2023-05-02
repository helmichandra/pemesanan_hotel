<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar_model extends CI_Model {

    public function get_kamar()
    {
        $data_kamar= $this->db->join('kategori','kategori.id_kategori=kamar.id_kategori')
        ->get('kamar')->result();
        return $data_kamar;
    }
public function insert_kamar()
{
    
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
        $data_kamar=array(
            'nama_kamar'=>$this->input->post('nama_kamar'),
            'id_kategori'=>$this->input->post('id_kategori'),
            'gambar' => $this->upload->data('file_name'),
            'harga'=>$this->input->post('harga'),
            'stok'=>$this->input->post('stok'),
        );
        $sql_masuk=$this->db->insert('kamar', $data_kamar);
        return $sql_masuk;
    }
 
}
public function detail_kamar($id_kamar){
    return $this->db->where('id_kamar', $id_kamar)->get('kamar')->row();
}

public function update_kamar()
{
        $nama_gambar= @$_FILES['gambar']['name'];
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
                $db_up_kamar=array(
                    'nama_kamar'=>$this->input->post('nama_kamar'),
                    'id_kategori'=>$this->input->post('id_kategori'),
                    'gambar' => $this->upload->data('file_name'),
                    'harga'=>$this->input->post('harga'),
                    'stok'=>$this->input->post('stok')
                );
                return $this->db->where('id_kamar', $this->input->post('id_kamar'))->update('kamar',$db_up_kamar);
            }   
        } else {
            $db_up_kamar=array(
                'nama_kamar'=>$this->input->post('nama_kamar'),
                'harga'=>$this->input->post('harga'),
                'stok'=>$this->input->post('stok'),
            );
            return $this->db->where('id_kamar', $this->input->post('id_kamar'))->update('kamar',$db_up_kamar);
        }
    }
public function delete_kamar($id_kamar)
{
    $delete = $this->db->where('id_kamar',$id_kamar)->delete('kamar');
    return $delete;
}
}

