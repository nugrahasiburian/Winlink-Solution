<style>
	#pengajaran_edit .cover_image {
		width: 350px;
		height: 250px;
		overflow: hidden;
		cursor: pointer;
		background: #000;
		color: #fff;
	}
	#pengajaran_edit .cover_image img {
		width:100%;
		height:100%;
	}
</style>

<?php 
	$type_new_or_edit = $this->uri->segment(3);
	
	//Fungsi Bantuan utk Menampilkan Alert Success Operation to SQL
	$myVar = $this->session->flashdata('is_success_operation_to_sql');
	if($myVar == "success_update"){
		echo "<div class='alert alert-success'>Data <strong>berhasil</strong> diedit.</div>";
	}
?>

<div id="pengajaran_edit">
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2><div class="glyphicon glyphicon-pushpin"></div><span>&emsp;<?php if($type_new_or_edit=="create_new"){ echo "Tulis Pengajaran Baru";}elseif($type_new_or_edit=="edit"){ echo "Edit Pengajaran";}?></span></h2>
            </div>
            <div class="panel-body">
                <div>
                    <form action="Pengajaran_controller_Back/<?php if($type_new_or_edit=="create_new"){echo "post_create_new";} elseif($type_new_or_edit=="edit"){ echo "post_edit";}?>" method="post" >
                    	<input type="hidden" name="id" value="<?php echo $selected_content_detail->id;?>" />
                        <div class="form-group row">
                                <label for="cover_image" class="col-md-2">Cover Image : </label>
                                <div class="col-md-5">
                                	<div class="cover_image" onclick="openKCFinder(this)"><?php if($type_new_or_edit=="edit"){echo $selected_content_detail->cover_image;}?><div style="margin:5px">Click here to choose an image</div></div>
                                    <input type="hidden" name="cover_image" id="cover_image" value='<?php if($type_new_or_edit=="edit"){echo $selected_content_detail->cover_image;}?>' />
                                </div>                       
                            </div>
                            <div class="form-group row">
                                <label for="judul" class="col-md-2">Judul : </label>
                                <div class="col-md-3">
                                    <input type="text" name="judul" id="judul" value="<?php if($type_new_or_edit=="edit"){echo $selected_content_detail->title;}?>" size="60"/>
                                </div>
                            </div>
                            <div class="form-group row">
                            	<label for="isi" class="col-md-12">Isi : </label>
                                <textarea name="isi" id="textarea_ckeditor"><?php if($type_new_or_edit=="edit"){ echo $selected_content_detail->content;}?></textarea>
                            </div>
                            <div class="form-group row">
                                <label for="author" class="col-md-2">Author : </label>
                                <div class="col-md-3">
                                    <input type="text" name="author" id="author" value="<?php if($type_new_or_edit=="edit"){echo $selected_content_detail->author;}?>" size="60"/>
                                </div>
                            </div>
                            <input type="submit" name="Submit" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>