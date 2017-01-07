				<section class="testimonials" style=" background-color: white; ">
					<div class="container">
						<h4>Tambah Katalog</h4>
						<div class="col-md-6 col-md-offset-3">
							<div class="col-md-10 col-md-offset-1">
						<?php 
										$this->load->library('upload');
										echo form_open('admin/submit_katalog');
					        			echo validation_errors();

			                  			$id 		=  array(
			                  							'name'			=> 'id');

			                  			$jenis_katalog =  array(
			                  							'street' 	=> 'street Art',
			                  							'clay'			=> 'clay Art',
			                  							'wood'		=> 'wood Art',
			                  							'fabric'			=> 'fabric Art',
			                  							'metal'			=> 'metal Art');

			                  			$nama_katalog 	=  array(
				                    	            	'name'          => 'nama_katalog',
				                        	        	'type'          => 'text',
				                            	    	'placeholder'   => 'nama katalog',
				                            	    	'class'			=> 'form-control',
				                                		'maxlength'     => '100');
			                  			$deskripsi 	=  array(
				                    	            	'name'          => 'deskripsi',
				                        	        	'type'          => 'text-area',
				                            	    	'class'			=> 'form-control',
				                            	    	'placeholder'	=> 'deskripsi katalog',
				                                		'maxlength'     => '500');
					                  	$image 		=  array(
				                    	            	'allowed_types'          => 'gif|jpg|png',
				                        	        	'upload_path'          => './assets/');

					                  	$alamat 	=  array(
			                    	              		'name'        	=> 'alamat',
								           		        'type'        	=> 'text',
								                        'placeholder' 	=> 'alamat pengrajin',
								                        'class'		  	=> 'form-control');
								        $daftar 	=  array(
								                   		'class'			=> 'btn btn-green');
								        echo form_hidden($id);
								        echo "<p style='color:green'>Jenis Katalog";
								        echo form_dropdown('jenis_katalog',$jenis_katalog,set_value('someValue'),'class="form-control"')."</p><p style='color:green'>Nama Katalog";            
								        echo form_input($nama_katalog)."</p><p style='color:green'>Deskripsi Katalog";             
								        echo form_textarea($deskripsi)."</p><p style='color:green'>Images : ";
								        echo form_upload('image',$image)."</p>";
								    ?>
						</div>
						<?php
									echo form_submit('submit', 'Tambah Katalog',$daftar);
									echo form_close();
									?>
									</div>
					</div>	
				</section>