<section class="col-lg-7 connectedSortable">
  <?php 
    $jmlpesan = $this->model_app->view_where('hubungi', array('dibaca'=>'N'))->num_rows(); 
  ?>
  <div class='box'>
    <div class='box-header'>
      <h3 class='box-title'>Application Buttons</h3>
    </div>
    <div class='box-body'>
      <p>Silahkan klik menu pilihan yang berada di sebelah kiri untuk mengelola konten website anda 
          atau pilih ikon-ikon pada Control Panel di bawah ini : </p>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/listberita" class='btn btn-app'><i class='fa fa-television'></i> Berita</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/gallery" class='btn btn-app'><i class='fa fa-camera'></i> Gallery</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/album" class='btn btn-app'><i class='fa fa-camera'></i> Album</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/edit_manajemenuser/admin" class='btn btn-app'><i class='fa fa-users'></i> Users</a>
      <br><br><br><br>
    </div>
  </div>
</section><!-- /.Left col -->

<section class="col-lg-5 connectedSortable">
    <?php include "grafik.php"; ?>
</section><!-- right col -->
