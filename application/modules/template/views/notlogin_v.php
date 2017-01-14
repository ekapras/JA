	<ul>
        <li><a href="<?php echo base_url(); ?>home">Home</a></li>
        <li><a href="#" class="has-submenu">Katalog</a>
			<ul class="sub-menu">
                <?php foreach ($data as $key => $mm) { ?>
            <li><a href="<?php echo base_url();?>katalog/select/<?php echo $id_jenis=$mm['id_jenis'];?>"><?php echo $mm['jenis_katalog'];?> Art</a></li>
            <?php } ?>
            </ul></li>
        <li><a href="<?php echo base_url(); ?>about">About team</a></li>
    </ul>