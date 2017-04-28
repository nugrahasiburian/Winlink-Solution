<style>
	#profil .nav li a{
		color:black;
	}
</style>
<?php
	$category = $this->uri->segment(2);
	$sub_category = $this->uri->segment(3);
	
	//Fungsi Bantuan utk Menampilkan Alert Success Operation to SQL
	$myVar = $this->session->flashdata('is_success_operation_to_sql');
	if($myVar == "success_save"){
		echo "<div class='alert alert-success'>Data <strong>berhasil</strong> disimpan.</div>";
	}
?>
<div id="profil">
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2><span. class="glyphicon glyphicon-pushpin">&emsp;<?php echo $name_of_submenu_parent->menu_name;?></span></h2>
               	<div id="submenu"><?php
					if($category == 'profil'){?>
						<ul class="nav nav-tabs"><?php
							foreach($submenu_detail as $submenu_detail){?>
								<li><a href="<?php echo base_url()."wp_admin/".$category."/".$submenu_detail->id;?>"><?php echo $submenu_detail->name;?></a></li><?php
							}?>
						</ul><?php
					}?>
                </div>
            </div>
            <div class="panel-body"><?php
                foreach($selected_submenu_detail as $selected_submenu_detail){?>
                    <form action="profil_controller_back/save" method="post" >
                        <input type="hidden" name="id" value="<?php echo $selected_submenu_detail->id;?>" />
                        <div class="form-group row">
                            <label for="judul" class="col-md-2">Judul : </label>
                            <div class="col-md-3">
                                <input type="text" class="form-control " name="judul" value="<?php echo $selected_submenu_detail->name;?>"/>
                            </div>                           
                        </div>
                        <div class="form-group row">
                            <label for="isi" class="col-md-12">Isi : </label>
                            <div>
                                <textarea name="isi" id="textarea_ckeditor"><?php echo $selected_submenu_detail->content;?></textarea>
                            </div>
                        </div>
                        <input type="submit" name="Submit" />
                    </form><?php
                }?>
            </div>
        </div>
    </div>
</div>