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
    <li><a href="<?php echo base_url('berita/listing');?>">Berita</a></li>
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
    <li class="active"><a href="#contact">Kontak</a></li>
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

    <!--end of jumbotron-->




    <div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    Contact us</h1>
            </div>
        </div>
    </div>
</div>
<div id="jumbotron-bottom"></div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="service">General Customer Service</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">Product Support</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend>Our office</legend>
            <address>
                <strong>PUSDIKHUB TNI-AD.</strong><br>
                <?php echo $sosmed['alamat'];?><br>

                <abbr title="Phone">
                    Phone:</abbr>
                    <?php echo $sosmed['telepon'];?>
            </address>
            <address>
                <strong>e-mail</strong><br>
                <a href="mailto:#"><?php echo $sosmed['email'];?></a>
            </address>
            </form>
        </div>
    </div>
</div>
