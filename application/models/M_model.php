<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_model extends CI_Model {

    public function select($table){
    return $this->db->get($table);
  }
  public function selectlimit($table){
      $this->db->order_by('id_berita','DESC') ;
     $this->db->limit(6) ;
     return $this->db->get($table) ;
  }

  public function selectwhere($table,$data){
    return $this->db->get_where($table, $data);
  }
  public function selectwhereliimit($table,$data){
    $this->db->limit(4) ;
    return $this->db->get_where($table, $data);
  }

  function delete($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
  }

  public function update($table,$data,$where){
    $this->db->update($table,$data,$where);
  }

  public function insert($table,$data){
    $this->db->insert($table,$data);
  }
  function cek_login($table,$where){
    return $this->db->get_where($table,$where);
  }

    function get_model(){
    $query = $this->db->query('SELECT * FROM automobil ORDER BY id_automobile ASC');
    return $query->result();
  }
}
