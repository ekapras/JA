                                    <li><a href="<?php echo base_url(); ?>login" class="btn btn-link-1">Sign In</a></li>
                                    
                                    
                                </ul>
                            </nav>
                        </div>
                    </div>
                </header>
				<section class="testimonials" style="background-image: url(<?php echo base_url(); ?>assets/files/images/01-heading.jpg)">
                    <div class="container">
                        <div class="three spacing">
                        </div>

                        <div class="row">
                        	<div class="col-sm-6 col-sm-offset-3 form-box">
                            	<div class="form-top">
                                	<div class="form-top-left">
                                    	<h1><strong>Sign In</strong></h1>
                                    	<p>Enter your username and password to log on:</p>
                                	</div>
                                	<div class="form-top-right">
                                    	<i class="fa fa-lock"></i>
                                	</div>
                            	</div>
                            	<div class="form-bottom">
                            	<div class="form-group">
									<?php 
										echo form_open('register/submit');
					        			echo validation_errors();

			                  			$id 		=  array(
			                  							'name'			=> 'id');

			                  			$level 		=  array(
			                  							'name'			=> 'level',
			                  							'level'			=> 'user');

			                  			$nama 		=  array(
			                  							'name'			=> 'nama',
				                        	        	'type'          => 'text',
				                            	    	'placeholder'   => 'name',
				                                		'minlength'     => '3',
				                                		'class'			=> 'form-control',
				                                		'maxlength'     => '30');
			                  			$email 		=  array(
				                    	            	'name'          => 'email',
				                        	        	'type'          => 'email',
				                            	    	'placeholder'   => 'e-mail',
				                            	    	'class'			=> 'form-control',
				                                		'minlength'     => '3',
				                                		'maxlength'     => '50');
			                  			$tgl_lhr 	=  array(
				                    	            	'name'          => 'tgl_lhr',
				                        	        	'type'          => 'date_time_set()',
				                            	    	'class'			=> 'form-control',
				                                		'minlength'     => '3',
				                                		'maxlength'     => '50');
			                  			$jkelamin 	= array(
						                  				'L'				=> 'Male',
						                  				'P'				=> 'Female');

					                  	$user 		=  array(
				                    	            	'name'          => 'username',
				                        	        	'type'          => 'text',
				                            	    	'placeholder'   => 'u s e r n a m e',
				                            	    	'class'			=> 'form-control',
				                                		'minlength'     => '3',
				                                		'maxlength'     => '10');

					                  	$password 	=  array(
			                    	              		'name'        	=> 'password',
								           		        'type'        	=> 'Password',
								                        'placeholder' 	=> 'p a s s w o r d',
								                        'class'		  	=> 'form-control',
								                        'maxlenght'   	=> '10',
								                        'minlength'   	=> '5');
								        $daftar 	=  array(
								                   		'class'			=> 'btn btn-green');
								        echo form_hidden($id);
								        echo form_hidden($level);
								        echo "<p style='color:green'>Name";
								        echo form_input($nama)."</p><p style='color:green'>Your sex";
								        echo form_dropdown('jkelamin',$jkelamin,set_value('someValue'),'class="form-control"')."</p><p style='color:green'>Date Of Birth";             
								        echo form_input($tgl_lhr)."</p><p style='color:green'>E-Mail";             
								        echo form_input($email)."</p><p style='color:green'>Username";
								        echo form_input($user)."</p><p style='color:green'>Password";
								        echo form_input($password)."</p>";
								    ?> 
						        </div>
									<?php
									echo form_submit('submit', ' Sign Up ',$daftar);
									echo form_close();
									?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
