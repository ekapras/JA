				<section class="testimonials" style=" background-color: white; ">
					<div class="container">
						<h4>Tambah sub Katalog</h4>
						<div class="col-md-6 col-md-offset-3">
							<div class="col-md-10 col-md-offset-1">
						<?php 
						foreach ($subkatalog as $ww) {

										echo form_open_multipart('admin/submit_subkatalog');
					        			echo validation_errors();

			                  			$id_nama 		=  array(
			                  							'name'			=> 'id_nama');
			                  			$id_jenis 		=  array(
			                  							'name'			=> 'id_jenis',
			                  							'value'			=> $ww->id_jenis);

			                  			$nama_katalog =  array(
			                  							'name' 		=> 'nama_katalog',
			                  							'class'		=> 'form-control');

			                  			$deskripsi 	=  array(
				                    	            	'name'          => 'deskripsi',
				                        	        	'type'          => 'text-area',
				                            	    	'class'			=> 'form-control',
				                            	    	'placeholder'	=> 'deskripsi katalog',
				                                		'maxlength'     => '500');
								        $submit 	=  array(
								                   		'class'			=> 'btn btn-green');
								        echo form_hidden($id_nama);
								        echo form_hidden($id_jenis);
								        echo "<p style='color:green'>Nama Katalog";
								        echo form_input($nama_katalog);
								        echo "</p><p style='color:green'>Deskripsi";            
								        echo form_textarea($deskripsi);
								        echo "</p><p style='color:green'>Images : ";
								        echo form_upload('gambar')."</p>"; }
								    ?>
						</div>
						<?php
									echo form_submit('submit', 'Tambah subKatalog',$submit);
									echo form_close();
								
									?>
									</div>
					</div>	
				</section>