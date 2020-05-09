<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Barang extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('Model_barang');
    }
	public function index()
	{
		$data['detBarang']=$this->Model_barang->select_barang('barang')->result();
        $this->load->view('v_barang',$data);
    }
		public function tambah_barang(){
			$this->load->view('barang/tambah_barang');
		}
}
