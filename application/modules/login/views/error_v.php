									<li><a href="<?php echo base_url(); ?>register" class="btn btn-link-1">Sign Up</a></li>
									
									
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
                                    <p style="color:red;"  >Sign in Failed !! wrong Username or Password</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-lock"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                            	<div class="form-group">

                            	<?php
					                    echo form_open('login/user_login_process');
					                    echo validation_errors();               
							                $user 		=  array(
								                            'name'          => 'username',
								                            'type'          => 'text',
								                            'placeholder'   => 'U s e r n a m e',
								                            'minlength'     => '3',
								                            'class'			=> 'form-control',
								                            'maxlength'     => '20');

							                $password 	=  array(
								                            'name'        => 'password',
								                            'type'        => 'Password',
								                            'placeholder' => 'P a s s w o r d',
								                            'maxlenght'   => '10',
								                            'class'		  => 'form-control',
								                            'minlength'   => '5');

							                $login 		=  array(
							                   				'class'	=> 'btn btn-green' );

							            echo "<p style='color:green'>Username";                      
							            echo form_input($user)."<p><p style='color:green'>Password";
							            echo form_input($password)."</p>";
							             ?>
						        	</div>
						        	
								        <?php
								            echo form_submit('submit', 'Log In',$login);
								            echo form_close();
								        ?>
                           </div>
                        </div>
                    </div>
                    </div>

				</section>