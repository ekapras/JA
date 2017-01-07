<section id="ngisi" >
	<div class="inner" align="center">
		<header class="major narrow" >
			<h3>K A T A L O G</h3>
		</header>	
		<div class="frame-image" align="center" style=" padding-left: 30px; padding-right: 30px; ">	
			<?php $no=1;
			foreach ($katalog as $u) { 
				
				?>	
			<div class="frame-about">								
				<div class="lingkaran">
						<img src="<?php echo base_url(); ?>assets/images/katalog/<?php echo $u->jenis_katalog;?>/<?php echo $u->id;?>/<?php echo $no++;?>.jpg"> <br><br>




			
				</div> 
			</div> 	<?php } ?>		
		</div>
		<ul class="actions">
			<li><a href="<?php echo base_url(); ?>katalog" class="button big alt" title="lihat lebih banyak Katalog">lihat lainnya</a></li>
		</ul>
	</div>
</section>

<!-- 	<img src="<?php echo base_url(); ?>assets/images/katalog/<?php echo $u->jenis_katalog;?>/<?php echo $u->id;?>/<?php echo $no++;?>.jpg"> <br><br> -->