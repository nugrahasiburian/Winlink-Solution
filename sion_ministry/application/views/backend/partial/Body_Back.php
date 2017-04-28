<style>
	#body #left_side .panel .panel-heading a{
		color:white;
	}
	#body #right_side .panel .title h2{
		padding-left:10px;
		padding-bottom:10px;
	}
</style>

<div class="container" id="body"><?php
	$category = $this->uri->segment(2);
	if($category == '' ) {?>
		<?php
	}else{?>
		<div class="panel-group">
			<div class="panel panel-default">
				<div class="panel-heading"><?php
					foreach($name_of_submenu_parent as $name_of_submenu_parent){?>
						<h2><span class="glyphicon glyphicon-pushpin">&emsp;<?php echo $name_of_submenu_parent->menu_name;?></span></h2>
						
						<div><?php
						if($category == 'profil'){?>
							<ul class="nav nav-tabs"><?php
								foreach($submenu_detail as $submenu_detail){?>
									<li><a href="<?php echo base_url()."wp_admin/".$category."/".$submenu_detail->id;?>"><?php echo $submenu_detail->name;?></a></li><?php
								}?>
							</ul><?php
						}?>
						</div><?php
					}?>
				</div>
				<div class="panel-body"><?php
					$sub_category = $this->uri->segment(3);
					if($category == 'profil'){
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
									<textarea name="isi" id="isi_textarea_profil" rows="20"><?php echo $selected_submenu_detail->content;?></textarea>
								</div>
							</div>
							<input type="submit" name="Submit" />
						</form><?php
						}
					}elseif($category == 'pengajaran'){
						$arr_thead = ["Cover Image","Judul","Isi","Author"];?>
						<table class="table table-striped">
							<thead><tr><?php
								for($i=0;$i<sizeof($arr_thead);$i++){?>
									<th><?php echo $arr_thead[$i];?></th><?php
								}?>
							</tr></thead>
							<tbody><tr>
							</tr></tbody>
						</table><?php
					}?>
				</div>
			</div>
		</div><?php
	}?>
</div>