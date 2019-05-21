<nav id="nav" class="navbar nav-transparent navbar-success">
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
      <li class="has-dropdown active">
      <a>Profil</a>
      <ul class="dropdown">
         <li><a href="<?php echo site_url('id/home/profile')?>">Profil Pusdikhub</a></li>
         <li><a href="blog-single.html">Organisasi</a></li>
      </ul>
      </li>
      <li><a href="<?php echo base_url('berita/listing');?>">Berita</a></li>
      <li class="has-dropdown">
      <a>Tautan</a>
      <ul class="dropdown">
         <li><a href="<?= base_url('id/home/link');?>">Link Satuan</a></li>
         <li><a href="http://rekrutmen-tni.mil.id/v2/index.php">Rekrutmen TNI</a>
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
      <div class="showcase">
         <img class="img-responsive center-block" src="<?php echo base_url();?>assets/home/img/profile.png" height="300" width="500">
      </div>
      <div class="headInfo">
         <h1 class="likeGreen">
         Profil Pusdikhub </h1>
      </div>
      <!-- START THE FEATURETTES -->
      <hr class="featurette-divider">
      <!-- Accordion -->
      <div class="panel-group" id="accordion">
         <div class="panel panel-default">
            <div class="panel-heading">
               <h4 class="panel-title">
               <a data-toggle="collapse" class="fa fa-plus-square-o" data-parent="#accordion" href="#collapse1">
               Sejarah</a>
               </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse in">
               <div class="panel-body">
<?php echo $isi_profile->
                  sejarah;?>
               </div>
            </div>
         </div>
         <div class="panel panel-default">
            <div class="panel-heading">
               <h4 class="panel-title">
               <a data-toggle="collapse" class="fa fa-plus-square-o" data-parent="#accordion" href="#collapse2">
               Visi & Misi</a>
               </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse ">
               <div class="panel-body ">
<?php echo $isi_profile->
                  visimisi;?>
               </div>
            </div>
         </div>
         <div class="panel panel-default">
            <div class="panel-heading">
               <h4 class="panel-title">
               <a data-toggle="collapse" class="fa fa-plus-square-o" data-parent="#accordion" href="#collapse3">
               Tugas</a>
               </h4>
            </div>
            <div id="collapse3" class="panel-collapse collapse">
               <div class="panel-body">
<?php echo $isi_profile->
                  tugaspokok;?>
               </div>
            </div>
         </div>
      </div>
      <hr class="featurette-divider">
   </div>
</div>