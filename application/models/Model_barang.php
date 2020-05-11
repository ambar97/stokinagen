<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_barang extends CI_Model {
 function select_barang(){
    $this->db->select('barang.*,category.*');
          $this->db->join('category', 'barang.id_category = category.id_category');
          $this->db->from('barang');
          $this->db->order_by('barang.id_barang','DESC');
          $data=$this->db->get();
          return $data;
  }
}
