<?php
        $this->load->library('session');
        $username = ($this->session->userdata['logged_in']['username']);
        $id = ($this->session->userdata['logged_in']['id']);
        $nama = ($this->session->userdata['logged_in']['nama']);
        ?>
        <ul>
            <li><i class="fa fa-key" style="color: gold;" > Admin </i></li>
            <li><a href="<?php echo base_url(); ?>home">Home</a></li>
            <li><a href="<?php echo base_url(); ?>admin/member">Member</a></li>
            <li><a href="#" class="has-submenu">Katalog</a>
            <ul class="sub-menu">
                <li><a href="<?php echo base_url();?>katalog/street">Street Art</a></li>
                <li><a href="<?php echo base_url();?>katalog/wood">Wood Art</a></li>
                <li><a href="<?php echo base_url();?>katalog/fabric">Fabric Art</a></li>
                <li><a href="<?php echo base_url();?>katalog/clay">Clay Art</a></li>
                <li><a href="<?php echo base_url();?>katalog/metal">Metal Art</a></li>
                <li><a href="<?php echo base_url();?>admin/tambah_katalog">[+] Add Katalog</a></li>
            </ul></li>
            <li><a href="<?php echo base_url(); ?>about">About</a></li>
            <li><a href="#" class="has-submenu"><?php echo "$nama"?></a>
            <ul class="sub-menu" style=" background-color: transparent; ">
                <li><a class="btn btn-slider" style=" background-color: red;" href="<?php echo base_url()?>login/logout"><strong> Log Out</strong></a>
            </ul>
            </li>
            
        </ul>
				