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
                <h6 class="h2 text-white d-inline-block mb-0">Datatables</h6>
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                  <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Tables</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Datatables</li>
                  </ol>
                </nav>
              </div>
              <div class="col-lg-6 col-5 text-right"><!--
                <a href="#" class="btn btn-sm btn-neutral">New</a>
                <a href="#" class="btn btn-sm btn-neutral">Filters</a> -->
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
                <h3 class="mb-0">Datatable</h3>
                <p class="text-sm mb-0">
                  This is an exmaple of datatable using the well known datatables.net plugin. This is a minimal setup in order to get started fast.
                </p>
              </div>
              <div class="table-responsive py-4">
                <table class="table table-flush" id="datatable-basic">
                  <thead class="thead-light">
                    <tr>
                      <th>No</th>
                      <th>Kd_User</th>
                      <th>Tanggal Bayar</th>
                      <th>Bukti Bayar</th>
                      <!-- <th>Nama Bank</th> -->
                      <!-- <th>Total Bayar</th> -->
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Kd_User</th>
                      <th>Tanggal Bayar</th>
                      <th>Bukti Bayar</th>
                      <!-- <th>Nama Bank</th> -->
                      <!-- <th>Total Bayar</th> -->
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php $no=1; foreach ($bayar as $bayar): ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><a href="" class="btn btn-sm btn-neutral"><?php echo $bayar->kd_user ?></a></td>
                      <td><?php echo $bayar->tgl_pembayaran ?></td>
                      <td> <a href="" data-toggle="modal" data-target="#exampleModal<?php echo $bayar->kd_pembayaran  ?>"> <i class="fa fa-eye"></i></a> </td>
                      <div class="modal fade" id="exampleModal<?php echo $bayar->kd_pembayaran  ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Foto Bukti Bayar</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <img src="http://64310715e142.sn.mynetname.net/tokason_api/<?php echo $bayar->bukti ?>" alt="">
                              <p><?php echo $bayar->kd_pembayaran    ?></p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- <td><?php echo $bayar->nama_bank ?></td> -->
                      <!-- <td><?php echo $bayar->total_pembayaran ?></td> -->
                      <td>
                        <a href="<?php echo base_url('Pembayaran/validasigagal/'.$bayar->kd_user) ?>" class="btn-sm btn-danger" title="tolak" onclick="javascript: return confirm('Anda Yakin Akan ingin batalkan validasi pembayaran ?')"><i class="fa fa-close"></i></a>
                        <a href="<?php echo base_url('Pembayaran/validasi/'.$bayar->kd_user) ?>" class="btn-sm btn-success" title="Validasi" onclick="javascript: return confirm('Anda Yakin Akan ingin memvalidasi pembayaran ?')"><i class="fa fa-check"></i></a>
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
