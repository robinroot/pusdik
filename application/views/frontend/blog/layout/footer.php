<!-- Footer -->
	<footer id="footer" class="sm-padding bg-dark">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<div class="col-md-12">

					<!-- footer logo -->
					<div class="footer-logo">
						<a href="index.html"><img src="<?php echo base_url();?>assets/home/img/logo.png" alt="logo"></a>
					</div>
					<!-- /footer logo -->

					<!-- footer follow -->
					<ul class="footer-follow">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube"></i></a></li>
					</ul>
					<!-- /footer follow -->

					<!-- footer copyright -->
					<div class="footer-copyright">
						<p>Copyright © 2019. PUSDIKHUB KODIKLAT TNI-AD</p>
					</div>
					<!-- /footer copyright -->

				</div>

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</footer>
	<!-- /Footer -->

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- Preloader -->
</div> <!-- end wrapCore -->
	<div id="circle-loader">
  <div class="loader">
    <div class="loader">
        <div class="loader">
           <div class="loader"></div>
        </div>
    </div>
  </div>
</div>
	<!-- /Preloader -->

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="<?= base_url('assets/home/');?>js/jquery.min.js"></script>
	<script type="text/javascript" src="<?= base_url('assets/home/');?>js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?= base_url('assets/home/');?>js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="<?= base_url('assets/home/');?>js/jquery.magnific-popup.js"></script>
	<script type="text/javascript" src="<?= base_url('assets/home/');?>js/main.js"></script>

</body>

</html>
<script>
	$(document).ready(function(){
		$.get('<?php echo base_url(); ?>komentar/ajaxcaptcha/<?php echo $read->id_berita;?>',function(data){
			$("#AjaxCaptcha").html(data)
		});
		$("#formcomment").submit(function(){
			$.post('<?php echo base_url(); ?>komentar/validasicaptcha',$("#formcomment").serialize(),function(data){
				if(data == 0){
					alert("character captcha tidak valid !!!");
					$.get('<?php echo base_url(); ?>komentar/ajaxcaptcha/<?php echo $read->id_berita;?>',function(data){
						$("#AjaxCaptcha").html(data)
					});
				}else{
					$.post("<?php echo base_url(); ?>komentar/savecomment",$("#formcomment").serialize(),function(data){
						if(data == 1){
							alert("komentar anda sudah disimpan :) ... ");
							$('#formcomment')[0].reset();
						}else{
							alert("gagal simpan komentar !!\ntolong ulangi lagi ... ");
						}
					});
				}
			});
			return false;
		});
	});
</script>