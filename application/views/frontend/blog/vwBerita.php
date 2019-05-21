<nav id="nav" class="navbar navbar-expand-md fixed-top nav-transparent navbar-success">
<div class="container-fluid">
  <div class="navbar-header">
    <!-- Logo -->
    <div class="navbar-brand">
      <a href="<?php echo site_url('id/home');?>"> <img class="logo" src="<?php echo base_url();?>assets/home/img/kodiklat.png" alt="logo"> <img class="logo-alt" src="<?php echo base_url();?>assets/home/img/kodiklat.png" alt="logo"> </a>
    </div>
    <!-- /Logo -->
    <!-- Logo -->
      <div class="navbar-brand sayap">
         <a href="<?php echo site_url('id/home');?>"> 
            <img class="logo" src="<?php echo base_url();?>assets/home/img/profile.png" alt="logo"> 
            <img class="logo-alt" src="<?php echo base_url();?>assets/home/img/profile.png" alt="logo"></a>
      </div>
      <!-- /Logo -->
    <!-- Collapse nav button -->
    <div class="nav-collapse">
      <span></span>
    </div>
    <!-- /Collapse nav button -->
  </div>
  <!--  Main navigation  -->
  <ul class="main-nav nav navbar-nav navbar-right">
    <li><a href="<?php echo base_url('id/home');?>">Home</a></li>
    <li class="has-dropdown">
    <a>Profil</a>
    <ul class="dropdown">
      <li><a href="<?php echo site_url('id/home/profile')?>">Profil Pusdikhub</a></li>
      <li><a href="blog-single.html">Organisasi</a></li>
    </ul>
    </li>
    <li class="active"><a href="<?php echo base_url('berita/listing');?>">Berita</a></li>
    <li class="has-dropdown">
    <a>Tautan</a>
    <ul class="dropdown">
      <li><a href="<?= base_url('id/home/link');?>">Link Satuan</a></li>
      <li><a href="http://rekrutmen-tni.mil.id/v2/index.php">Rekrutmen TNI</a></li>
      <li><a href="http://elearning.pusdikhub.kodiklat-tniad.mil.id/" target="_blank">E-Learning</a></li>
      <li><a href="http://elibrary.pusdikhub.kodiklat-tniad.mil.id/" target="_blank">E-Library</a></li>
      <li><a href="http://labsiber.pusdikhub.kodiklat-tniad.mil.id/" target="_blank">Lab Cyber</a></li>
    </ul>
    </li>
    <li><a href="#contact">Kontak</a></li>
    <li>
    <!-- Logo -->
    <div class="navbar-brand">
      <a href="<?php echo site_url('id/home');?>"> <img class="logo" src="<?php echo base_url();?>assets/home/img/profile.png" alt="logo"> <img class="logo-alt" src="<?php echo base_url();?>assets/home/img/profile.png" alt="logo"> </a>
    </div>
    <!-- /Logo -->
    </li>
  </ul>
  <!-- /Main navigation -->
</div>
</nav>
<div class="container">
  <div class="row">
    <!--jumbotron-->
    <div class="jumbotron">
      <div class="container">
        <h1>BERITA</h1>
        <p>
          Link Satuan
        </p>
        <p>
          <a class="btn btn-primary btn-lg">Learn more</a>
        </p>
      </div>
    </div>
    <!--end of jumbotron-->
    <!-- Blog -->
    <!-- Row -->
    <div class="row">
      <!-- Section header -->
      <!-- /Section header -->
      <?php foreach($berita as $berita) { ?>
      <!-- blog -->
      <div class="col-md-4">
        <div class="card-view">
          <div class="blog">
            <div class="blog-img">
              <img class="img-responsive setFixHeight" src="<?php echo base_url('assets/upload/image/'.$berita->gambar) ?>" alt="error">
            </div>
            <div class="container-card setFixHeight">
              <div class="blog-content">
                <ul class="blog-meta">
                  <li><i class="fa fa-user"></i><?php echo $berita->
                  nama; ?></li>
                  <li><i class="fa fa-clock-o"></i><?php echo date('d-M-Y', strtotime($berita->
                  tanggal_post));?></li>
                  <li><i class="fa fa-tag"></i><?php echo $berita->
                  nama_kategori_berita;?></li>
                </ul>
                <h3><a href="<?php echo base_url('berita/read_berita/'.$berita->slug_berita) ?>"><?php echo $berita->
                nama_berita ?></a></h3>
                <p>
<?php echo character_limiter($berita->
                  keterangan,60) ?>
                </p>
                <!-- <a href="<?php echo base_url('berita/read_berita/'.$berita->slug_berita);?>">Read more</a> -->
              </div>
            </div>
          </div>
        </div>
        <!-- /blog -->
      </div>
      <?php } ?>
    </div>
    <!-- /Blog -->
  </div>
</div>