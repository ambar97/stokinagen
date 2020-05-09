<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_barang extends CI_Model {
 function select_barang(){
    $this->db->select('barang.*,category.*');
          $this->db->join('category', 'barang.id_category = category.id_category');
          $this->db->from('barang');
          $this->db->order_by('barang.inset_timestamp','DESC');
          $data=$this->db->get();
          return $data;
  }
  public function hitungJumlahAsset($data)
{
    $query = $this->db->get($data);
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}
function getUser(){
    $this->db->join('outlet', 'outlet.kd_outlet = user.kd_outlet', 'left');
    // $this->db->join('tarif', '0_user.ID_USER = member_menu.MEMBER_ID');
    // $this->db->where($this->kd, $user);
    // $this->db->where('0_user.ID_USER',$this->session->userdata('id'));
    // $this->db->from();
    $this->db->order_by('tgl_jatuh_tempo','ASC');
    return $this->db->get('user');
  }
  function getReferal(){
    return $this->db->get('referral');
  }
}
