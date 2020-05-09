<?php $this->load->view("side/head"); ?>
 <!-- Page plugins -->
  <link rel="stylesheet" href="<?php echo base_url()?>master/assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>master/assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>master/assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css">
 <?php $this->load->view("side/navbar"); ?>
<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Data Barang</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Barang</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Data Barang</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="<?= base_url('Barang/tambah_barang')?>" class="btn btn-sm btn-neutral">Tambah</a>
              <!-- <a href="#" class="btn btn-sm btn-neutral">Filters</a> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="card mb-4">
        <!-- Card header -->
        <div class="card-header">
          <h3 class="mb-0">Form group in grid</h3>
        </div>
        <!-- Card body -->
        <div class="card-body">
          <!-- Form groups used in grid -->
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label class="form-control-label" for="example3cols1Input">One of three cols</label>
                <input type="text" class="form-control" id="example3cols1Input" placeholder="One of three cols">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label class="form-control-label" for="example3cols2Input">One of three cols</label>
                <input type="text" class="form-control" id="example3cols2Input" placeholder="One of three cols">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label class="form-control-label" for="example3cols3Input">One of three cols</label>
                <input type="text" class="form-control" id="example3cols3Input" placeholder="One of three cols">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="example4cols1Input">One of four cols</label>
                <input type="text" class="form-control" id="example4cols1Input" placeholder="One of four cols">
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="example4cols2Input">One of four cols</label>
                <input type="text" class="form-control" id="example4cols2Input" placeholder="One of four cols">
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="example4cols3Input">One of four cols</label>
                <input type="text" class="form-control" id="example4cols3Input" placeholder="One of four cols">
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="example4cols3Input">One of four cols</label>
                <input type="text" class="form-control" id="example4cols3Input" placeholder="One of four cols">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="example2cols1Input">One of two cols</label>
                <input type="text" class="form-control" id="example2cols1Input" placeholder="One of two cols">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="example2cols2Input">One of two cols</label>
                <input type="text" class="form-control" id="example2cols2Input" placeholder="One of two cols">
              </div>
            </div>
          </div>
        </div>
      </div>
      

    <?php $this->load->view('side/footer') ?>

<?php $this->load->view('side/js') ?>
<!-- Optional JS -->
  <script src="<?php echo base_url()?>master/assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url()?>master/assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo base_url()?>master/assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?php echo base_url()?>master/assets/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
  <script src="<?php echo base_url()?>master/assets/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="<?php echo base_url()?>master/assets/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
  <script src="<?php echo base_url()?>master/assets/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="<?php echo base_url()?>master/assets/vendor/datatables.net-select/js/dataTables.select.min.js"></script>
  <!-- Argon JS -->
<script src="<?php echo base_url()?>master/assets/js/argon.min9f1e.js?v=1.1.0"></script>
<?php if ($this->session->flashdata()) { ?>
<?php echo $this->session->flashdata('Pesan'); ?>
<?php } ?>
</body>
</html>
