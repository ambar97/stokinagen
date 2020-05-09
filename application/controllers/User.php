<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('Core');
		$this->load->model('ModelSRC');
	}
	function index(){
		$data['user']=$this->ModelSRC->getUser();
			$this->load->view('v_user',$data);
	}
	function tambah(){
		$this->load->view('insert/user');
	}
	public function hapus($id){
		$where = array('kd_user'=>$id);
		$data=array('status_user'=>0);
		$hapus = $this -> M_model -> update('user',$data,$where);
		if ($hapus >= 0) {
			$this->session->set_flashdata("Pesan",$this->Core->alert_succes("User Berhasil di Nonaktifkan"));
			header('location:'.base_url('User'));
		} else {
			$this->session->set_flashdata("Pesan",$this->Core->alert_time("User Gagal di Nonaktifkan"));
			header('location:'.base_url('User'));
		}
	}
	public function active($id){
		$where = array('kd_user'=>$id);
		$data=array('status_user'=>1);
		$hapus = $this -> M_model -> update('user',$data,$where);
		if ($hapus >= 0) {
			$this->session->set_flashdata("Pesan",$this->Core->alert_succes("User Berhasil di Aktifkan"));
			header('location:'.base_url('User'));
		} else {
			$this->session->set_flashdata("Pesan",$this->Core->alert_time("User Gagal di Aktifkan"));
			header('location:'.base_url('User'));
		}
	}
	public function updateview(){
		$data['dataUser']=$this->M_model->selectwhere('user',array('kd_user'=>$this->uri->segment(3)));
		$this->load->view('update/u_user',$data);
	}

}
