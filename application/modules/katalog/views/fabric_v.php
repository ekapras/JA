<section class="portfolio on-portfolio">
					<div class="container">
						<div class="col-sm-12 text-center">
							<div id="projects-filter">
								<a href="<?php echo base_url(); ?>katalog/wood" class="active">fabric art</a>
							</div>
						</div>
						<div class="row">
							<div class="row" id="portfolio-grid">
							<?php foreach ($katalog as $u) {
								# code...
							 ?>
								<div class="item col-md-4 col-sm-6 col-xs-12 furniture">
							  		<figure>
			        					<img src="<?php echo base_url();?>assets/files/images/katalog/fabric/<?php echo $u ->id;?>.jpg" width="350" height="350">
			        					<figcaption>
			            					<h3><?php echo $u ->nama_katalog; ?></h3>
			            					<p><?php echo $u ->deskripsi; ?></p>
			        					</figcaption>
			    					</figure>	
							    </div>
							    <?php } ?>
							</div>
						</div>
					</div>
				</section>