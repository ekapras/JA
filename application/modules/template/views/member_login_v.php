<?php
        $this->load->library('session');
        $username = ($this->session->userdata['logged_in']['username']);
        $id = ($this->session->userdata['logged_in']['id']);
        $nama = ($this->session->userdata['logged_in']['nama']);
        ?>
                <ul>

                  <li><a href="<?php echo base_url()?>member/profil" class="btn btn-link-1"><?php echo "$nama"?></a></li></li>
                 <li><a href="<?php echo base_url(); ?>home">Home</a></li>
                 <li><a href="<?php echo base_url(); ?>katalog">Katalog</a></li>
                  <li><a href="<?php echo base_url(); ?>about">About</a></li>
                 <li><a href="<?php echo base_url()?>login/logout" class="btn btn-link-1 btn-link-1-twitter">Log Out</a>
                </ul>
				