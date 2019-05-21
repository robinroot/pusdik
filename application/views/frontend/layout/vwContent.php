<!-- Header -->
<header id="home">
<!-- Nav -->
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
				<img class="logo" src="<?php echo base_url();?>assets/home/img/logo_pdhub1.png" alt="logo">
				<img class="logo-alt" src="<?php echo base_url();?>assets/home/img/logo_pdhub1.png" alt="logo"></a>
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
		<li><a href="#home">HOME</a></li>
		<li class="has-dropdown">
			<a>PROFIL</a>
				<ul class="dropdown">
					<li><a href="<?php echo site_url('id/home/profile')?>">PROFIL PUSDIKHUB</a></li>
					<li><a href="blog-single.html">ORGANISASI</a></li>
				</ul>
		</li>
		<li><a href="#blog">BERITA</a></li>
		<li class="has-dropdown"><a>TAUTAN</a>
		<ul class="dropdown">
			<li><a href="http://pusdikhub.kodiklat-tniad.mil.id/id/home/link">LINK SATUAN</a></li>
			<li><a href="http://rekrutmen-tni.mil.id/v2/index.php" target="_blank">REKRUTMEN TNI</a></li>
			<li><a href="http://elearning.pusdikhub.kodiklat-tniad.mil.id/" target="_blank">E-LEARNING</a></li>
			<li><a href="http://elibrary.pusdikhub.kodiklat-tniad.mil.id/" target="_blank">E-LIBRARY</a></li>
			<li><a href="http://labsiber.pusdikhub.kodiklat-tniad.mil.id/" target="_blank">LAB CYBER</a></li>
		</ul>
		</li>
		<li><a href="#contact">KONTAK</a></li>

		<li>
			<!-- Logo -->
		<div class="navbar-brand">
			<a href="<?php echo site_url('id/home');?>">
				<img class="logo" src="<?php echo base_url();?>assets/home/img/logo_pdhub1.png" alt="logo">
				<img class="logo-alt" src="<?php echo base_url();?>assets/home/img/logo_pdhub1.png" alt="logo"></a>
		</div>
		<!-- /Logo -->
		</li>
	</ul>
	<!-- /Main navigation -->
</div>
</nav>
<!-- /Nav -->
<!-- home wrapper -->
<div class="home-wrapper">
	<div class="container">
		<div class="row">
			<!-- home content -->
			<div class="col-md-10 col-md-offset-1">
				<div class="home-content">
					<h1 class="white-text"></h1>
					<!-- <p class="white-text"><?php echo $judul['namaweb'] ?></p> -->
				</div>
			</div>
			<!-- /home content -->
		</div>
	</div>
</div>
<!-- /home wrapper -->
</header>
<!-- /Header -->

<!--background-->
<!-- <img class="img-responsive" src="<?php echo base_url('assets/home/img/digitalpict.jpg')?>" style="min-width: 100%"> -->

<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">

        <!-- Carousel indicators -->

        <ol class="carousel-indicators">

            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>

            <li data-target="#myCarousel" data-slide-to="1"></li>

            <li data-target="#myCarousel" data-slide-to="2"></li>


        </ol>

        <!-- Wrapper for carousel items -->

        <div class="carousel-inner">

            <div class="item active">

                <img style="min-width: 100%" src="<?php echo base_url('assets/home/img/home1.jpg');?>" alt="First Slide">

            </div>

            <div class="item">

                <img style="min-width: 100%" src="<?php echo base_url('assets/home/img/home2.jpg');?>" alt="Second Slide">

            </div>

            <div class="item">

                <img style="min-width: 100%" src="<?php echo base_url('assets/home/img/homepic3.jpg');?>" alt="Third Slide">

            </div>


        </div>



    </div>


<!-- </div> -->
<div id="carousel-id" class="carousel slide" data-ride="carousel" data-interval="3000">
	<ol class="carousel-indicators">
		<li data-target="#carousel-id" data-slide-to="0" class=""></li>
		<li data-target="#carousel-id" data-slide-to="1" class=""></li>
		<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
	</ol>
	<div class="carousel-inner">
		<div class="item">
			<div class="container">
				<div class="text-center">

					<h2>Jenderal Soedirman</h2>
					<div style="display: flex; justify-content: space-between;">
					<img class="img-responsive" style="width:65px; height: 85px;" src="<?php echo base_url();?>assets/home/img/dan.jpeg" alt="logo">
					<p><?php echo $ambilquote->quote;?></p>
					<img class="img-responsive" style="width:65px; height: 85px;" src="<?php echo base_url();?>assets/home/img/kol.jpeg" alt="logo">
				</div>

				</div>
			</div>
		</div>
		<div class="item">
			<div class="container">
				<div class="text-center">

					<h2>Jenderal Soedirman</h2>
					<div style="display: flex; justify-content: space-between;">
					<img class="img-responsive" style="width:65px; height: 85px;" src="<?php echo base_url();?>assets/home/img/dan.jpeg" alt="logo">
					<p><?php echo $ambilquote->quote1;?></p>
					<img class="img-responsive" style="width:65px; height: 85px;" src="<?php echo base_url();?>assets/home/img/kol.jpeg" alt="logo">
				</div>
				</div>
			</div>
		</div>
		<div class="item active">
			<div class="container">
				<div class="text-center">

					<h2>Jenderal Soedirman</h2>
					<div style="display: flex; justify-content: space-between;">
					<img class="img-responsive" style="width:65px; height: 85px;" src="<?php echo base_url();?>assets/home/img/dan.jpeg" alt="logo">
					<p><?php echo $ambilquote->quote;?></p>
					<img class="img-responsive" style="width:65px; height: 85px;" src="<?php echo base_url();?>assets/home/img/kol.jpeg" alt="logo">
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="blog" class="section md-padding bg-grey">
	<!-- Container -->
	<div class="container">
		<!-- Row -->
		<div class="row">
			<!-- Section header -->
			<div class="section-header text-center">
				<h2 class="title">news</h2>
			</div>
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
									nama;?></li>
									<li><i class="fa fa-clock-o"></i><?php echo date('d-M-Y', strtotime($berita->
									tanggal_post));?></li>
									<li><i class="fa fa-tag"></i><?php echo $berita->
									nama_kategori_berita;?></li>
								</ul>
								<h4><a href="<?php echo base_url('berita/read_berita/'.$berita->slug_berita) ?>"><?php echo $berita->
								nama_berita ?></a></h4>
								<?php echo character_limiter($berita->
								keterangan,71) ?> <a href="<?php echo base_url('berita/read_berita/'.$berita->slug_berita);?>">Read more</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /blog -->
			<?php } ?>
		</div>
		<!-- /Row -->
	</div>
	<!-- /Container -->
</div>
<!-- /Blog -->
<!-- Contact -->
<div id="contact" class="section md-padding">
	<!-- Container -->
	<div class="container">
		<!-- Row -->
		<div class="row">
			<!-- Section-header -->
			<div class="section-header text-center">
				<h2 class="title">Contact</h2>
			</div>
			<!-- /Section-header -->
			<!-- contact -->
			<div class="col-sm-4">
				<div class="contact">
					<i class="fa fa-phone"></i>
					<h3>Phone</h3>
					<p><?php echo $sosmed['telepon'];?></p>
				</div>
			</div>
			<!-- /contact -->
			<!-- contact -->
			<div class="col-sm-4">
				<div class="contact">
					<i class="fa fa-envelope"></i>
					<h3>Email</h3>
					<p><?php echo $sosmed['email'];?></p>
				</div>
			</div>
			<!-- /contact -->
			<!-- contact -->
			<div class="col-sm-4">
				<div class="contact">
					<i class="fa fa-map-marker"></i>
					<h3>Address</h3>
					<p><?php echo $sosmed['alamat'];?></p>
				</div>
			</div>
			<!-- /contact -->
		</div>
		<!-- /Row -->
	</div>
	<!-- /Container -->
</div>
<!-- /Contact -->
