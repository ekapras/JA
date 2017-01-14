				<div class="slider">
					<div class="fullwidthbanner-container">
						<div class="fullwidthbanner">
							<ul>
								<li class="first-slide" data-transition="fade" data-slotamount="10" data-masterspeed="300">
									<img src="<?php echo base_url(); ?>assets/files/images/01-slide.jpg" data-fullwidthcentering="on" alt="slide">
									<div class="tp-caption first-line lft tp-resizeme start" data-x="center" data-hoffset="0" data-y="250" data-speed="1000" data-start="200" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0">JSA | Tempat Kreativitas</div>
									<div class="tp-caption second-line lfb tp-resizeme start" data-x="center" data-hoffset="0" data-y="340" data-speed="1000" data-start="800" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0">Dapatkan semua informasi
									tentang Art Jepara</div>
									<div class="tp-caption slider-btn sfb tp-resizeme start" data-x="center" data-hoffset="0" data-y="510" data-speed="1000" data-start="2200" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0"><a href="#ow2-portfolio" class="btn btn-slider" style="background-color:darkgreen;">Lihat Katalog</a></div>
								</li>
								<li class="first-slide" data-transition="fade" data-slotamount="10" data-masterspeed="300">
									<img src="<?php echo base_url(); ?>assets/files/images/02-slide.jpg" data-fullwidthcentering="on" alt="slide">
									<div class="tp-caption first-line lft tp-resizeme start" data-x="center" data-hoffset="0" data-y="250" data-speed="1000" data-start="200" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0">JSA | Tempat Mencari Ide</div>
									<div class="tp-caption second-line lfb tp-resizeme start" data-x="center" data-hoffset="0" data-y="340" data-speed="1000" data-start="800" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0">Dapatkan Inspirasi dan ide cemerlang dari ART Jepara</div>
									<div class="tp-caption slider-btn sfb tp-resizeme start" data-x="center" data-hoffset="0" data-y="510" data-speed="1000" data-start="2200" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0"><a href="#ow2-portfolio" class="btn btn-slider" style="background-color:darkblue;">Lihat Katalog</a></div>
								</li>
								<li class="first-slide" data-transition="fade" data-slotamount="10" data-masterspeed="300">
									<img src="<?php echo base_url(); ?>assets/files/images/03-slide.jpg" data-fullwidthcentering="on" alt="slide">
									<div class="tp-caption first-line lft tp-resizeme start" data-x="center" data-hoffset="0" data-y="250" data-speed="1000" data-start="200" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0">JSA | Informasi Tentang ART</div>
									<div class="tp-caption second-line lfb tp-resizeme start" data-x="center" data-hoffset="0" data-y="340" data-speed="1000" data-start="800" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0">Semua yang berbau ART ada disini ... </div>
									<div class="tp-caption slider-btn sfb tp-resizeme start" data-x="center" data-hoffset="0" data-y="510" data-speed="1000" data-start="2200" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0"><a href="#ow2-portfolio" class="btn btn-slider" style="background-color:darkgreen;">Lihat Katalog</a></div>
								</li>
							</ul>
						</div>
					</div>
				</div>

				







				<section class="portfolio" id="ow2-portfolio">
					<div class="container">
					<div>
					<h3 style="color: white;">Tentang Jepara Art</h3><br>
					<p style="color: white;">
						Website ini berisi tentang semua hasil karya seni di jepara. 
					</p>
					</div><br><br>
						<div class="section-heading-white">
							<h2>Katalog</h2>
							<div class="section-dec"></div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div id="owl-portfolio" class="owl-carousel owl-theme">
									<?php foreach ($data_katalog as $key => $u) {
									?>
									<div class="item">
								  		<figure>
								  			<a href="<?php echo base_url();?>katalog/select/<?php echo $id_jenis=$u['id_jenis'];?>">
				        					<img alt="portfolio" height="280px" width="420px" src="<?php echo base_url(); ?>assets/images/jenis/<?php echo $u['image'] ?>">
				        					<figcaption>
				            					<h3><?php echo $u['jenis_katalog'] ?> Art</h3>
				            					<p><?php echo $u['deskripsi']?>.</p>
				        					</figcaption>
				        					</a>
				    					</figure>
				    												    
				    				</div>
								    <?php }?>	
				    			</div>
							</div>
						</div>
						<div class="owl-navigation">
						  <a class="btn prev fa fa-angle-left"></a>
						  <a class="btn next fa fa-angle-right"></a>
						</div>
					</div>
				</section>


