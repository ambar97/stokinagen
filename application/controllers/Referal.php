<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Referal extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('Core');
		$this->load->model('ModelSRC');
	}
	function index(){
		$data['ref']=$this->ModelSRC->getReferal();
			$this->load->view('referral',$data);
	}
	function tambah(){
		$this->load->view('insert/referal');
	}

	function addReferal(){
		$data = array('nama_lengkap' =>$this->input->post('nmlengkap'),
	 								'bagian' =>$this->input->post(''),
									'no_KTP' =>$this->input->post(''),
									'alamat' =>$this->input->post('alamat'),
									'Kecamatan' =>$this->input->post('kecamatan'),
									'kabupaten' =>$this->input->post('kabupaten'),
									'provinsi' =>$this->input->post('provinsi'),
									'kd_referal' =>,);
	}
}
