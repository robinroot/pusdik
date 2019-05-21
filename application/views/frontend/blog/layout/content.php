<!-- Blog -->
	<div id="blog" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Main -->
				<main id="main" class="col-md-9">
					<div class="card-view">
					<div class="blog">
						<div class="blog-img">
							<img class="img-responsive img-responsive-c" src="<?php echo base_url('assets/upload/image/'.$read->gambar) ?>" alt="">
						</div>
						<div class="container-card">
						<div class="blog-content">
							<ul class="blog-meta">

								<li><i class="fa fa-user"></i><?php echo $read->nama;?></li>
								<li><i class="fa fa-clock-o"></i><?php echo date('d-M-Y', strtotime($read->tanggal_post));?></li>
								<li><i class="fa fa-tag"></i><?php echo $read->nama_kategori_berita;?></li>
							</ul>
							<h3><?php echo $title;?></h3>
							<p><?php echo $read->keterangan;?>
							</p>
						</div>
						</div>


						
					</div>
					</div>
					<!-- reply form -->

			<!-- blog comments -->
						<div class="blog-comments">
							<h3 class="title">Komentar</h3>

							<?php foreach($komentar as $comment){ ?>
							
							<!-- comment -->
							<div class="media">
								<div class="media-left">
									<img class="media-object" src="<?= base_url('assets/home/img/medium_content_comments_avatar.png');?>" alt="">
								</div>
								<div class="media-body">
									<h6 class="media-heading"><?php echo $comment['pengirim'];?><span class="time"><?php echo $comment['tanggal'];?></span></h6>
									<p><?php echo $comment['isi']; ?></p>
								</div>
							</div>
								<?php }?>
							<!-- /comment -->
						</div>
				

						<!-- /blog comments -->		

						<div class="reply-form">
							<h3 class="title">Tinggalkan pesan</h3>
							<form method="post" id="formcomment">
							
								<input type="hidden" name="id_berita" value="<?php echo $read->id_berita;?>">
								<input class="form-control"  type="text" name="pengirim" placeholder="Name">
								<br>
								<input class="form-control" type="email" name="email" placeholder="Email">
								<br/>
								<textarea class="form-control" rows="10px" placeholder="Add Your Commment" name="isi"></textarea> <br>
								<div id="AjaxCaptcha"></div>
								<button type="submit" href="javascript:void(0)"
					 			class="main-btn">Submit</button>
								
							</form>
						</div>
						<!-- /reply form -->
				</main>
				<!-- /Main -->


				<!-- Aside -->
				<aside id="aside" class="col-md-3">

				

					<!-- Category -->
					<div class="widget">
						<h3 class="title">Kategori Berita</h3>
						<div class="widget-category">
							<?php foreach($kategori as $cat){ ?>
							<a href="<?php echo base_url('berita/kategoriberita/'.$cat->id_kategori_berita)?>"><?= $cat->nama_kategori_berita;?><!-- <span>(7)</span></a> -->
							
						<?php }?>
						</div>
					</div>
					<!-- /Category -->

					<!-- Posts sidebar -->
					<div class="widget">
						<h3 class="title">Berita Populer</h3>

						<?php foreach($popular_post as $populer){?>
						<!-- single post -->
						<div class="widget-post">
							<a href="<?php echo base_url('berita/read_berita/'.$populer->slug_berita);?>">
								<?php echo character_limiter($populer->nama_berita,50);?>
							</a>
							<ul class="blog-meta">
								<li><?php echo date('d-M-Y', strtotime($populer->tanggal_post));?></li>
							</ul>
						</div>
					<?php  }?>
						<!-- /single post -->

					</div>
					<!-- /Posts sidebar -->

					

				</aside>
				<!-- /Aside -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Blog -->

