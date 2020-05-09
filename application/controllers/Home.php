<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('modelSRC');
    }
	public function index()
	{
        $data['user'] = $this->modelSRC->hitungJumlahAsset('user');
        $data['outlet'] = $this->modelSRC->hitungJumlahAsset('outlet');
        $data['transaksi'] = $this->modelSRC->hitungJumlahAsset('transaksi');
        $this->load->view('v_home',$data);
    }
}
