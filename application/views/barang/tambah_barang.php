<?php $this->load->view("side/head"); ?>
 <!-- Page plugins -->
 <link rel="stylesheet" href="<?php echo base_url()?>master/assets/vendor/select2/dist/css/select2.min.css">
 <link rel="stylesheet" href="<?php echo base_url()?>master/assets/vendor/quill/dist/quill.core.css">

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
                  <li class="breadcrumb-item active" aria-current="page">Tambah Barang</li>
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
          <h3 class="mb-0">Form Tambah Barang</h3>
        </div>
        <!-- Card body -->
        <div class="card-body">
          <!-- <form class="" method="post" enctype="multipart/form-data" action="<?php echo base_url('Barang/add_barang'); ?>"> -->
          <?php echo form_open_multipart('Barang/add_barang'); ?>
          <!-- Form groups used in grid -->
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="example3cols1Input">Nama Barang</label>
                <input type="text" class="form-control" required id="" placeholder="" name="nm_barang">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="example3cols2Input">Bahan Barang</label>
                <input type="text" class="form-control" required id="" name="bhn_barang" placeholder="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="example3cols3Input">Harga</label>
                <input type="number" required class="form-control" id="harga" name="harga" placeholder="">
              </div>
            </div>
            <div class="col-sm-6 col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="example4cols1Input">Jenis</label>
                <select class="form-control" name="jenis" id="jenis" required onchange="price()">
                  <option value="">pilih Jenis</option>
                  <option value="0">-</option>
                  <option value="1">Barang Baru</option>
                  <option value="2">Discount</option>
                  <option value="3">Baru dan Discount</option>
                </select>
              </div>
            </div>
            <div class="col-sm-6 col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="example4cols2Input">Kategori</label>
                <select class="form-control" name="kategori" required>
                  <option value=""></option>
                  <?php foreach ($kategori as $katego): ?>
                    <option value="<?=$katego->id_category?>"><?= $katego->nama_category?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
            <div class="col-sm-6 col-md-3" id="diskon" display="none">
              <div class="form-group">
                <label class="form-control-label" for="example4cols3Input">Discount <small>dalam persen(%)</small> </label>
                <input type="number" name="discount" class="form-control"min="1" max="100" id="disc" placeholder="">
              </div>
            </div>
            <div class="col-sm-6 col-md-3" id="hasil" display="none">
              <div class="form-group">
                <label class="form-control-label" for="example4cols3Input">Hasil Discount</label>
                <input type="text" name="hrg_disc" class="form-control" id="totBayar" placeholder="" readonly>
                <small id="isi_harga"></small>
              </div>
            </div>
          </div>
          <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="example2cols1Input">Ukuran <small>(Kosongi Jika Tidak Perlu)</small> </label>
                <div class="row" style="padding-right:20px">
                  <div class="custom-control custom-checkbox mb-3 col-md-3">
                    <input class="custom-control-input" name="ukuran[]" value="S" id="customCheck1" type="checkbox">
                    <label class="custom-control-label" for="customCheck1">S</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-3 col-md-3">
                    <input class="custom-control-input" id="customCheck2" name="ukuran[]" value="M" type="checkbox">
                    <label class="custom-control-label" for="customCheck2">M</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-3 col-md-3">
                    <input class="custom-control-input" id="customCheck3" name="ukuran[]" value="L" type="checkbox">
                    <label class="custom-control-label" for="customCheck3">L</label>
                  </div>

                  <div class="custom-control custom-checkbox mb-3 col-md-3">
                    <input class="custom-control-input" id="customCheck4" name="ukuran[]" value="XL" type="checkbox">
                    <label class="custom-control-label" for="customCheck4">XL</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-3 col-md-3">
                    <input class="custom-control-input" id="customCheck5" name="ukuran[]" value="XXL" type="checkbox">
                    <label class="custom-control-label" for="customCheck5">XXL</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="example2cols2Input">Warna <small>(Kosongi Jika Tidak Perlu)</small> </label>
              <textarea name="name" class="form-control"rows="4" name="warna" placeholder="Putih, biru dll"></textarea>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label class="form-control-label" for="" >Gambar <small>(Bisa lebih dari 1 gambar, Max 1mb)</small> </label>
                <div class="row ">
                  <div class="col-md-8">
                    <input type="file" required name="berkas[]" value="" class="form-control " multiple="multiple">
                  </div>
                  <div class="col-md-2 ">
                    <button type="button" class="btn btn-primary add-more"> <i class="fa fa-plus"></i> </button>
                  </div>

                </div>
                <br class="after-add-more">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label class="form-control-label" for="example2cols2Input">Deskripsi Barang <small>(Kosongi Jika Tidak Perlu)</small> </label>
              <textarea class="form-control"rows="6" name="deskripsi" placeholder=""></textarea>
              </div>
            </div>
          </div>
          <div class="text-left">
            <button type="submit" class="btn btn-primary"  name="upload" value="upload" float="left">Simpan</button>
          </div>
          <?php echo form_close() ?>
          <div class="copy " hidden>
            <div class="row control-group">
              <div class="col-md-8 col-sm-6">
                <input type="file" name="berkas[]" value="" class="form-control " multiple="multiple">
              </div>
              <div class="col-md-2">
                <button type="button" class="btn btn-danger remove"> <i class="fa fa-minus"></i> </button>
              </div>
              <br>
            </div>
          </div>
        <!-- </form> -->
        </div>
      </div>


    <?php $this->load->view('side/footer') ?>

<?php $this->load->view('side/js') ?>
<!-- Optional JS -->
<script type="text/javascript">
document.getElementById("diskon").style.display = "none";
document.getElementById("hasil").style.display = "none";
 function price() {
   var tes = document.getElementById("jenis").value;

  if (tes == 2 || tes == 3) {
    document.getElementById("diskon").style.display = "block";
    document.getElementById("hasil").style.display = "block";
  }else {
    document.getElementById("diskon").style.display = "none";
    document.getElementById("hasil").style.display = "none";
  }
      // document.getElementById("harga").value=tes;
}
$(document).ready(function(){
$("#disc").keyup(function(){
var harga = parseInt($("#harga").val());
if (harga != null) {
  var diskon = parseInt($("#disc").val());
  var total = harga - (harga*(diskon/100));
  $("#totBayar").val(total);
}else {
$("#isi_harga").val("Harap isi Harga");
}

});
});
$(document).ready(function() {
  $(".add-more").click(function(){
      var html = $(".copy").html();
      $(".after-add-more").after(html);
  });
  $("body").on("click",".remove",function(){
      $(this).parents(".control-group").remove();
  });
});


</script>
<script src="<?php echo base_url()?>master/assets/vendor/select2/dist/js/select2.min.js"></script>
<script src="<?php echo base_url()?>master/assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url()?>master/assets/vendor/nouislider/distribute/nouislider.min.js"></script>
<script src="<?php echo base_url()?>master/assets/vendor/quill/dist/quill.min.js"></script>
<script src="<?php echo base_url()?>master/assets/vendor/dropzone/dist/min/dropzone.min.js"></script>
<script src="<?php echo base_url()?>master/assets/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
  <!-- Argon JS -->
<script src="<?php echo base_url()?>master/assets/js/argon.min9f1e.js?v=1.1.0"></script>
<?php if ($this->session->flashdata()) { ?>
<?php echo $this->session->flashdata('Pesan'); ?>
<?php } ?>
</body>
</html>
