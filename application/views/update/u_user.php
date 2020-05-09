 <?php $this->load->view("side/head"); ?>
 <?php $this->load->view("side/navbar"); ?>
 <div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h6 class="h2 text-white d-inline-block mb-0">Data User</h6>
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="#">User</a></li>
              <li class="breadcrumb-item active" aria-current="page">Data User</li>
            </ol>
          </nav>
        </div>
        <div class="col-lg-6 col-5 text-right">
          <!-- <a href="#" class="btn btn-sm btn-neutral">New</a> -->
          <!-- <a href="#" class="btn btn-sm btn-neutral">Filters</a> -->
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid mt--6">
 <div class="row">
  <div class="col-lg-12">
    <div class="card-wrapper">
      <div class="card">
        <div class="card-header">
          <h3 class="mb-0">Tambah Data User</h3>
        </div>
        <div class="card-body">
          <form>
            <?php foreach ($dataUser->result() as $var): ?>
            <h2 class="">Data Pengguna</h2>
            <div class="form-group">
              <div class="row">
                <div class="col-lg-6">
                  <label class="form-control-label" for="exampleFormControlInput1">Nama Depan</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Depan" name="nmDepan" value="<?php echo $var->nama_depan?>">
                </div>  
                <div class="col-lg-6">
                  <label class="form-control-label" for="exampleFormControlInput1">Nama Belakang</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Belakang" name="nmBelakang" value="<?php echo $var->nama_belakang?>">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="form-control-label" for="exampleFormControlInput1">No Telp</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="No Telp" name="noTelp" value="<?php echo $var->no_telp?>">
            </div>
            <div class="form-group">
              <label class="form-control-label" for="exampleFormControlInput1">Alamat</label>
              <textarea class="form-control" placeholder="Alamat Lengkap" rows="3" name="alamat"><?php echo $var->alamat?></textarea>
            </div>
            <label class="form-control-label" for="exampleFormControlInput1">Foto</label>
            <div class="dropzone dropzone-single mb-3" data-toggle="dropzone" data-dropzone-url="http://">
              <div class="fallback">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="projectCoverUploads" name="photo">
                  <label class="custom-file-label" for="projectCoverUploads">Choose file</label>
                </div>
              </div>
              <div class="dz-preview dz-preview-single">
                <div class="dz-preview-cover">
                  <img class="dz-preview-img" src="...html" alt="..." data-dz-thumbnail>
                </div>
              </div>
            </div>
            <hr>
            <div>
              <button class="btn btn-icon btn-primary float-right" type="button">
                <span class="btn-inner--icon"><i class="ni ni-check-bold"></i></span>
                <span class="btn-inner--text">Simpan</span>
              </button>
            </div>
            <?php endforeach ?>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<?php $this->load->view('side/footer') ?>    
<?php $this->load->view('side/js') ?>
<script src="<?php echo base_url()?>master/assets/vendor/dropzone/dist/min/dropzone.min.js"></script>
<script src="<?php echo base_url()?>master/assets/js/argon.min9f1e.js?v=1.1.0"></script>
<?php if ($this->session->flashdata()) { ?>
  <?php echo $this->session->flashdata('Pesan'); ?>                   
<?php } ?>
</body>
</html>