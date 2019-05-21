<!-- Blog -->

	<!-- Row -->
			<div class="row">


			<!-- Section header -->
			
				<!-- /Section header -->
				<?php foreach($list->result() as $berita) { ?>
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
									<li><i class="fa fa-user"></i><?php echo $berita->nama; ?></li>
									<li><i class="fa fa-clock-o"></i><?php echo date('d-M-Y', strtotime($berita->tanggal_post));?></li>
									<li><i class="fa fa-tag"></i>57</li>
								</ul>
								<h3><a href="<?php echo base_url('berita/read_berita/'.$berita->slug_berita) ?>"><?php echo $berita->nama_berita ?></a></h3>
								<p><?php echo character_limiter($berita->keterangan,150) ?></p>
								<a href="<?php echo base_url('berita/read_berita/'.$berita->slug_berita);?>">Read more</a>
							</div>
						</div>
					</div>
				</div>
				 
				<!-- /blog -->
 				
 				</div>
 				<?php } ?>
	</div>
	<!-- /Blog -->
