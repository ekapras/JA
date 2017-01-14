				<section class="testimonials" style=" background-color: white; ">
					<div class="container">
						<h4 align="center">Tambah Katalog</h4>
						<div class="col-md-6 col-md-offset-3">
						<h3 style="color:blue;"> katalog Berhasil Ditambahkan </h3>
							<div class="col-md-10 col-md-offset-1">
						<?php 
										echo form_open_multipart('admin/submit_jenis_katalog');
					        			echo validation_errors();

			                  			$id_jenis 		=  array(
			                  							'name'			=> 'id_jenis');

			                  			$jenis_katalog =  array(
			                  							'name' 	=> 'jenis_katalog',
			                  							'class'			=> 'form-control',
			                  							'type'		=> 'text',
			                  							'fabric'			=> 'fabric Art',
			                  							'metal'			=> 'metal Art');

			                  			$deskripsi 	=  array(
				                    	            	'name'          => 'deskripsi',
				                        	        	'type'          => 'text-area',
				                            	    	'class'			=> 'form-control',
				                            	    	'placeholder'	=> 'deskripsi katalog',
				                                		'maxlength'     => '500');
								        $daftar 	=  array(
								                   		'class'			=> 'btn btn-green',
								                   		'style'			=> 'background-color:green; color:white;');
								        echo form_hidden($id_jenis);
								        echo "<p style='color:green'>Jenis Katalog <span style='color:blue' title='tolong di isi'> *? </span>";
								        echo form_input($jenis_katalog)."</p><p style='color:green'>Deskripsi Katalog <span style='color:blue' title='tolong di isi'> *? </span>";             
								        echo form_textarea($deskripsi)."</p><p style='color:green'>Images : <span style='color:blue' title='tolong di isi'> *? </span>";
								        echo form_upload('image')."</p>";
								    ?>
						</div>
									<?php
									echo form_submit('submit', 'Tambah Katalog',$daftar);
									echo form_close();
									?>
									</div>
					</div>	
				</section>