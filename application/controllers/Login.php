<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
function __construct()
    {
        parent::__construct();
    }
	public function index()
	{
		$this->load->view('v_login');
	}
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$paasmd = md5($this->input->post('password'));
		$where = array(
			'username' => $username,
			'password' => $paasmd,
		);
		// die(var_dump($where));
		$cek = $this->M_model->cek_login("admin_agen",$where)->num_rows();
		$cek1 = $this->M_model->cek_login("admin_agen",$where)->row();
		if($cek > 0){
			$data_session = array(
				'id' => $cek1->id_admin,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);
			redirect(base_url("Barang?"));
		}else{
			redirect(base_url("Login"));
		}
	}
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('Login'));
	}
}
