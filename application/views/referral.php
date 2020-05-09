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
         <h6 class="h2 text-white d-inline-block mb-0">Referal</h6>
         <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
           <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
             <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
             <li class="breadcrumb-item"><a href="#">User</a></li>
             <li class="breadcrumb-item active" aria-current="page">Data Referal</li>
           </ol>
         </nav>
       </div>
       <div class="col-lg-6 col-5 text-right">
         <a href="<?php echo base_url('Referal/tambah') ?>" class="btn btn-sm btn-neutral">New</a>
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
         <h3 class="mb-0">Data Referal</h3>
         <p class="text-sm mb-0">

         </p>
       </div>
       <div class="table-responsive py-4">
         <table class="table table-flush" id="datatable-basic">
           <thead class="thead-light">
             <tr>
               <th>No</th>
               <th>Nama</th>
               <th>No Referral</th>
               <th>Lokasi</th>
               <th>Status</th>
               <th>Bagian</th>
               <th>Action</th>
             </tr>
           </thead>
           <tbody>
             <?php $no=1; foreach ($ref->result() as $var): ?>
             <tr>
               <td><?php echo $no++ ?></td>
               <td><a href="" data-toggle="modal" data-target="#modal-default<?php echo $var->id_referral ?>"><?php echo $var->nama_lengkap ?></a></td>
               <td><?php echo $var->kd_referal ?></td>
               <td><?php echo $var->Kecamatan ; echo $var->kabupaten; ?></td>
               <td></td>
               <td></td>
               <td></td>
                   <div class="modal fade" id="modal-default<?php echo $var->id_referral ?>" tabindex="-1" role="dialog" aria-labelledby="modal-default" style="display: none;" aria-hidden="true">
                     <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                       <div class="modal-content">
                         <div class="modal-header">
                           <h6 class="modal-title" id="modal-title-default">Detail User</h6>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">×</span>
                           </button>
                         </div>
                         <div class="modal-body">
                           <div class="form-group">
                             <label class="form-control-label" for="exampleFormControlInput1">Alamat</label>
                             <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="No Telp" name="noTelp" readonly="" value="<?php echo $var->alamat ?>">
                           </div>
                           <div class="form-group">
                             <label class="form-control-label" for="exampleFormControlInput1">Tanggal Daftar</label>
                             <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="No Telp" readonly="" name="noTelp" value="<?php echo $var->tgl_daftar ?>" >
                           </div>
                         </div>
                         <div class="modal-footer">
                           <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button>
                         </div>
                       </div>
                     </div>
                   </div>
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
