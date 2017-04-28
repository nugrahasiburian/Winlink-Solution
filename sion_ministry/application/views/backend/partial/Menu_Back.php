<style>
	.panel .panel-heading a{
		color:white;
	}
</style>
<div class="panel panel-primary">
    <div class="panel-heading"><a href="<?php echo base_url()."wp_admin";?>">MENU</a></div>
    <div class="panel-body">
        <ul><?php
            foreach ($list_of_menu_parent as $list_of_menu_parent){?>
                <li><a href=<?php echo base_url()."wp_admin/".$list_of_menu_parent->menu_link."/1";?>><?php echo $list_of_menu_parent->menu_name;?></a></li><?php
            }?>
        </ul>
    </div>
</div>