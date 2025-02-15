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
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <h3 class="mb-0">Data Barang</h3>
              <p class="text-sm mb-0">
                Data Barang pada tabel ini khusus untuk mengetahui stok barang kurang dari 10.
              </p>
            </div>
            <div class="table-responsive py-4">
              <table class="table table-flush" id="datatable-basic">
                <thead class="thead-light">
                  <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>harga</th>
                    <th>Kategori</th>
                    <th>Jenis</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1; foreach ($detBarang as $barang): ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $barang->nama_barang ?></td>
                    <td>
                      <?php if ($barang->harga_ecer != 0){
                          $harga = $barang->harga_ecer;
                      }else {
                        $harga = $barang->harga_produksi;
                      } ?>
                      Rp. <?= number_format($harga) ?></td>
                    <td><?= $barang->nama_category?></td>
                    <td>
                      <?php if ($barang->order_barang == 0){
                        $jenis = "Tidak Ada";
                      }elseif ($barang->order_barang == 1) {
                        $jenis = "Barang Baru";
                      }elseif ($barang->order_barang == 2) {
                        $jenis = "Discount ". $barang->diskon."%";
                      }else {
                        $jenis = "Baru dan Discount ". $barang->diskon."%";
                      }
                       ?>
                       <?= $jenis ?>
                    </td>
                    <td>
                      <a href="" class="btn-sm btn-success" title="lihat detail"><i class="fa fa-eye"></i></a>
                      <a href="<?= base_url('Barang/ubah_data/').$barang->id_barang."/".$barang->nama_barang ?>" class="btn-sm btn-primary" title="Ubah Data"> <i class="fa fa-brush"></i> </a>
                      <a href="<?= base_url('Barang/hapus_barang/'.$barang->id_barang)?>" onclick="javascript: return confirm('Anda Yakin Akan Menghapus ?')" class="btn-sm btn-danger" title="Hapus"> <i class="fa fa-trash"></i> </a>
                    </td>
                  </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
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
