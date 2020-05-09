<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pembayaran extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('Core');
		$this->load->model('ModelSRC');
	}
	public function index()
	{
		$data['bayar']=$this->M_model->select('pembayaran')->result();
        $this->load->view('v_pay',$data);
    }
		public function validasi($kd){
			$ee = $this->db->update('user',array('status_user'=>1),array('kd_user'=>$kd));
			if ($ee >=0 ) {
				$this->session->set_flashdata("Pesan",$this->Core->alert_succes("Pembayaran Berhasil"));
				header('location:'.base_url('User'));
			} else {
				$this->session->set_flashdata("Pesan",$this->Core->alert_time("Error"));
				header('location:'.base_url('User'));
			}

		}
		public function validasigagal($kd){
			$rr = $this->db->update('user',array('status_user'=>2),array('kd_user'=>$kd));
			if ($rr >= 0) {
				$this->session->set_flashdata("Pesan",$this->Core->alert_succes("Pembayaran Gagal di terima !"));
				header('location:'.base_url('Pembayaran'));
			} else {
				$this->session->set_flashdata("Pesan",$this->Core->alert_time("Error"));
				header('location:'.base_url('Pembayaran'));
			}

		}

}
