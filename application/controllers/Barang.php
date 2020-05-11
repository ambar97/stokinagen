<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");
class Barang extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_barang');
		$this->load->helper(array('form'));
	}
	public function index()
	{
		$data['detBarang']=$this->Model_barang->select_barang('barang')->result();
		$this->load->view('v_barang',$data);
	}
	public function tambah_barang(){
		$data['kategori'] = $this->M_model->select('category')->result();
		$this->load->view('barang/tambah_barang',$data);
	}
	public function add_barang(){
		$ukuran = array();

		if ($this->input->post('ukuran') != null) {
			$count = count($this->input->post('ukuran'));
			for ($i=0; $i < $count; $i++) {
				array_push($ukuran,$this->input->post('ukuran')[$i]);
			}
		}
		if (count($ukuran)) {
			$kir_ukuran = implode(",",$ukuran);
		}else {
			$kir_ukuran = NULL;
		}
		$data = array('nama_barang'=>$this->input->post('nm_barang')
		,'bahan_barang'=>$this->input->post('bhn_barang'),
		'harga_produksi'=>$this->input->post('harga'),
		'order_barang'=>$this->input->post('jenis'),
		'insert_id'=>2,

		'id_category'=>$this->input->post('kategori'),
		'discount'=>$this->input->post('discount'),
		'harga_ecer'=>$this->input->post('hrg_disc'),
		'deskripsi'=>$this->input->post('deskripsi'),
		'warna'=>$this->input->post('warna'),
		'ukuran'=> $kir_ukuran,
		'diskon'=>$this->input->post('discount')
	);
	$this->db->insert('barang',$data);
	$id_ = $this->db->insert_id();
	// die(var_dump($this->input->post('gambar_galery')));

	$config = array();
	$config['upload_path'] = 'gambar/barang/';
	$config['allowed_types'] = 'gif|jpg|png';
	$config['max_size']      = '0';
	$config['overwrite']     = FALSE;

	$this->load->library('upload');

	$files = $_FILES;

	for($i=0; $i< count($_FILES['berkas']['name']); $i++)
	{
		$_FILES['userfile']['name']= $files['berkas']['name'][$i];
		$_FILES['userfile']['type']= $files['berkas']['type'][$i];
		$_FILES['userfile']['tmp_name']= $files['berkas']['tmp_name'][$i];
		$_FILES['userfile']['error']= $files['berkas']['error'][$i];
		$_FILES['userfile']['size']= $files['berkas']['size'][$i];

		$this->upload->initialize($config);

		if (!$this->upload->do_upload()) {
			$error = array('error' => $this->upload->display_errors());
		}else {
			$upload_data = $this -> upload -> data ();
			$foto = "gambar/barang/".$upload_data['file_name'];
			$data = array('nama_gbr'=>$foto,
			'id_brg'=>$id_);
			$this->db->insert('gallery_barang',$data);
		}
	}
	redirect($_SERVER['HTTP_REFERER']);
}
public function hapus_barang($id){
	$select_pict = $this->db->where('id_brg',$id)->get('gallery_barang')->result();
	// die(var_dump(count($select_pict)));
	for ($i=0; $i < count($select_pict); $i++) {
		unlink($select_pict[$i]->nama_gbr);
	}
	$where = array('id_barang'=>$id);
	$gambar = array('id_brg'=>$id);
	$this->M_model->delete($where,'barang');
	$this->M_model->delete($gambar,'gallery_barang');
	redirect($_SERVER['HTTP_REFERER']);
}
public function hapus_gambar($id){
	$select_pict = $this->db->where('id_gbr',$id)->get('gallery_barang')->row();
	// die(var_dump($select_pict));
		unlink($select_pict->nama_gbr);
	$gambar = array('id_gbr'=>$id);
	$this->M_model->delete($gambar,'gallery_barang');
	redirect($_SERVER['HTTP_REFERER']);
}
public function ubah_data(){
	$uri = $this->uri->segment(3);
	$data['gambar'] = $this->M_model->selectwhere('gallery_barang',array('id_brg'=>$uri))->result();
	$data['barang'] = $this->M_model->selectwhere('barang',array('id_barang'=>$uri))->row_array();
	$data['kategori'] = $this->M_model->select('category')->result();
	// die(var_dump($data['gambar']));
	$this->load->view('barang/edit_barang',$data);
}
public function update_data(){
	$ukuran = array();
	if ($this->input->post('ukuran') != null) {
		$count = count($this->input->post('ukuran'));
		for ($i=0; $i < $count; $i++) {
			array_push($ukuran,$this->input->post('ukuran')[$i]);
		}
	}
	if (count($ukuran)) {
		$kir_ukuran = implode(",",$ukuran);
	}else {
		$kir_ukuran = NULL;
	}
	$data = array('nama_barang'=>$this->input->post('nm_barang')
	,'bahan_barang'=>$this->input->post('bhn_barang'),
	'harga_produksi'=>$this->input->post('harga'),
	'order_barang'=>$this->input->post('jenis'),
	'insert_id'=>2,

	'id_category'=>$this->input->post('kategori'),
	'discount'=>$this->input->post('discount'),
	'harga_ecer'=>$this->input->post('hrg_disc'),
	'deskripsi'=>$this->input->post('deskripsi'),
	'warna'=>$this->input->post('warna'),
	'ukuran'=> $kir_ukuran,
	'diskon'=>$this->input->post('discount')
);
$id_ = $this->input->post('id_brg');
$this->db->update('barang',$data,array('id_barang'=>$id_));
// die(var_dump($this->input->post('gambar_galery')));

$config = array();
$config['upload_path'] = 'gambar/barang/';
$config['allowed_types'] = 'gif|jpg|png';
$config['max_size']      = '0';
$config['overwrite']     = FALSE;

$this->load->library('upload');

$files = $_FILES;

for($i=0; $i< count($_FILES['berkas']['name']); $i++)
{
	$_FILES['userfile']['name']= $files['berkas']['name'][$i];
	$_FILES['userfile']['type']= $files['berkas']['type'][$i];
	$_FILES['userfile']['tmp_name']= $files['berkas']['tmp_name'][$i];
	$_FILES['userfile']['error']= $files['berkas']['error'][$i];
	$_FILES['userfile']['size']= $files['berkas']['size'][$i];

	$this->upload->initialize($config);

	if (!$this->upload->do_upload()) {
		$error = array('error' => $this->upload->display_errors());
	}else {
		$upload_data = $this -> upload -> data ();
		$foto = "gambar/barang/".$upload_data['file_name'];
		$data = array('nama_gbr'=>$foto,
		'id_brg'=>$id_);
		$this->db->insert('gallery_barang',$data);
	}
}
redirect($_SERVER['HTTP_REFERER']);
}
public function kategori(){
	$data['kategori'] = $this->db->get('category')->result()	;
	$this->load->view('barang/kategori',$data);
}
public function tambah_kategori(){
	$config = array();
	$config['upload_path'] = 'gambar/barang/';
	$config['allowed_types'] = 'gif|jpg|png';
	$config['max_size']      = '0';
	$config['overwrite']     = FALSE;
	$this->load->library('upload');
	$this->upload->initialize($config);
	if (!$this->upload->do_upload('gbr_kat')) {
		$error = array('error' => $this->upload->display_errors());
	}else {
		$upload_data = $this -> upload -> data ();
		$foto = "gambar/barang/".$upload_data['file_name'];
		$data = array('gambar_category'=>$foto,
		'nama_category'=>$this->input->post('kat'));
		$this->db->insert('category',$data);
	}
	redirect($_SERVER['HTTP_REFERER']);
}
public function editkategori(){
	$where=array('id_category'=>$this->input->post('id_kat'));


		$config = array();
		$config['upload_path'] = 'gambar/barang/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']      = '0';
		$config['overwrite']     = FALSE;
		$this->load->library('upload');
		$this->upload->initialize($config);

		if (!$this->upload->do_upload('gbr_kat')) {
			$data = array('nama_category'=>$this->input->post('kat'));
			$this->db->update('category',$data,$where);
		}else {
			$select = $this->M_model->selectwhere('category',array('id_category'=>$this->input->post('id_kat')))->row();
			unlink($select->gambar_category);
			$upload_data = $this -> upload -> data ();
			$foto = "gambar/barang/".$upload_data['file_name'];
			$data = array('gambar_category'=>$foto,
			'nama_category'=>$this->input->post('kat'));
			$this->db->update('category',$data,$where);
		}



	redirect($_SERVER['HTTP_REFERER']);
}
public function hapus_kategori($id){
	$select = $this->M_model->selectwhere('category',array('id_category'=>$id))->row();
	// die(var_dump($select));
	unlink($select->gambar_category);
	$this->M_model->delete(array('id_category'=>$id),'category');
	redirect($_SERVER['HTTP_REFERER']);
}


}
