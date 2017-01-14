				<section class="portfolio on-portfolio">
					<div class="container">
						<div class="col-sm-12 text-center">
							<?php foreach ($nama as $isi) {}?>
							<div id="projects-filter">
							<?php foreach ($jenis as $isie) {?>
								<a href="#" class="active"><?php echo $isie->jenis_katalog;?> <br></a>
								<br> <br>
							</div>


							<?php
							$this->load->library('session');
							if (isset($this->session->userdata['logged_in'])=='admin'){ 

								echo anchor('admin/tambah_subkatalog/'.$isie->id_jenis,'tambah Subkatalog');
							}

							else { ?>
							<span></span>

							<?php
							}} ?>
						</div>
						<div class="row">
							<div class="row" id="portfolio-grid">
							<?php foreach ($nama as $u) {?>
								<div class="item col-md-4 col-sm-6 col-xs-12 furniture">
								<a href="<?php echo base_url();?>katalog/galeri/<?php echo $u->id_nama;?>">
							  		<figure>
			        					<img src="<?php echo base_url();?>assets/images/nama/<?php echo $u ->gambar;?>.jpg" width="350" height="350">
			        					<figcaption>
			            					<h3><?php echo $u ->nama_katalog; ?></h3>
			            					<p><?php echo $u ->deskripsi; ?></p>
			        					</figcaption>
			    					</figure>
			    				</a>	
							    </div>
							    <?php } ?>
							</div>
						</div>
					</div>
				</section>