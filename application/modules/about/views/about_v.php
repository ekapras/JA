				<section class="team">
					<div class="container">
						<div class="section-heading">
						<div class="three spacing"></div>
							<h2 style="color:black;" >Team Pengembang <strong style=" font-family: 'Audiowide',sans-serif; " >JSA</strong></h2>
							<div class="section-dec"></div>
						</div>
						<?php
						foreach($data_pengembang as $m =>$u){
							?>

						<div class="col-md-4">
							<div class="team-member">
								<img  width="420px" height="420px" src="<?php echo base_url(); ?>assets/files/images/pengembang/<?php echo $u['id']; ?>.png">
								<div class="team-content">
									<h3 style="color: white;" style=" font-family: 'bitsumishi'; "><?php echo $u['nama'] ?></h3>
									<span><?php echo $u['lahir'] ?></span>
									<p><?php echo $u['catatan'] ?>.</p>
								</div>
								<div class="social-icons">
									<ul>
										<li><a target="_blank" href="<?php echo $u['fb'] ?>"><i class="fa fa-facebook"></i></a></li>
										<li><a target="_blank" href="<?php echo $u['twitter'] ?>"><i class="fa fa-twitter"></i></a></li>
										<li><a target="_blank" href="<?php echo $u['google'] ?>"><i class="fa fa-google-plus"></i></a></li>
										<li><a target="_blank" href="<?php echo $u['instagram'] ?>"><i class="fa fa-instagram"></i></a></li>
										<li><a target="_blank" href="<?php echo $u['blog'] ?>"><i class="fa fa-rss"></i></a></li>
									</ul>
								</div>
							</div><div class="three spacing"></div>
						</div>
						

					<?php } ?>
					</div>
			</section>