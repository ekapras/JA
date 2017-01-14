				<section class="portfolio on-portfolio">
					<div class="container">
						<div class="col-sm-12 text-center">
							<div id="projects-filter">
							<?php foreach ($nama as $isie) {?>
								<a href="#" class="active"><?php echo $isie->nama_katalog;?> <br></a>
								<br> <br>
							</div>


							<?php
							$this->load->library('session');
							if (isset($this->session->userdata['logged_in'])=='admin'){ 

								echo anchor('admin/tambah_galeri/'.$isie->id_nama,'tambah galeri');
							}

							else { ?>
							<span>  </span>

							<?php
							}} ?>
						</div>
						<div class="row">
							<div class="row" id="portfolio-grid">
							<?php foreach ($galeri as $u) {?>
								<div class="item col-md-4 col-sm-6 col-xs-12 furniture">
							  		<figure>
			        					<img src="<?php echo base_url();?>assets/images/galeri/<?php echo $u ->gambar;?>.jpg" width="350" height="350">
			    					</figure>	
							    </div>
							    <?php } ?>
							</div>
						</div>
					</div>
				</section>