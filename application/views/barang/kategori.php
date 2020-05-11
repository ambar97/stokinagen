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
              <h6 class="h2 text-white d-inline-block mb-0">Data Kategori</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Barang</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Kategori</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="" data-toggle="modal" data-target="#modal-default" class="btn btn-sm btn-neutral">Tambah</a>
              <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h6 class="modal-title" id="modal-title-default">Tambah Kategori Baru</h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                    <form class="" action="<?= base_url('Barang/tambah_kategori') ?>" enctype="multipart/form-data" method="post">

                      <div class="modal-body">
                        <div class="form-group">
                          <label for="">Nama</label>
                          <input type="text" required class="form-control" name="kat" value="">
                        </div>
                        <div class="form-group">
                          <label for="">Gambar</label>
                          <input type="file" required class="form-control" name="gbr_kat" value="">
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal"></button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
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
              <h3 class="mb-0">Data Kategori</h3>
              <p class="text-sm mb-0">
                <!-- Data Barang pada tabel ini khusus untuk mengetahui stok barang kurang dari 10. -->
              </p>
            </div>
            <div class="table-responsive py-4">
              <table class="table table-flush" id="datatable-buttons">
                <thead class="thead-light">
                  <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Gambar</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1; foreach ($kategori as $barang): ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $barang->nama_category ?></td>
                    <td> <img style="width:100px;" src="<?= base_url().$barang->gambar_category ?>" alt=""> </td>
                    <td>
                      <!-- <a href="" class="btn-sm btn-success" title="lihat detail"><i class="fa fa-eye"></i></a> -->
                      <a href="" data-toggle="modal" data-target="#modal-default<?= $barang->id_category?>" class="btn-sm btn-primary" title="Ubah Data"> <i class="fa fa-brush"></i> </a>
                      <a href="<?= base_url('barang/hapus_kategori/'.$barang->id_category) ?>" onclick="javascript: return confirm('Anda Yakin Akan Menghapus ?')" class="btn-sm btn-danger" title="Hapus"> <i class="fa fa-trash"></i> </a>
                      <div class="modal fade" id="modal-default<?= $barang->id_category?>" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                        <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h6 class="modal-title" id="modal-title-default">Tambah Kategori Baru</h6>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                              </button>
                            </div>
                            <form class="" action="<?= base_url('Barang/editkategori') ?>" enctype="multipart/form-data" method="post">

                              <div class="modal-body">
                                <div class="form-group">
                                  <label for="">Nama</label>
                                  <input type="hidden" name="id_kat" value="<?= $barang->id_category ?>">
                                  <input type="text" required class="form-control" name="kat" value="<?= $barang->nama_category ?>">
                                </div>
                                <div class="form-group">
                                  <label for="">Gambar</label>
                                  <input type="file" class="form-control" name="gbr_kat" value="">
                                  <small>update gambar akan menghapus data gambar sebelumnya</small>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal"></button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
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
