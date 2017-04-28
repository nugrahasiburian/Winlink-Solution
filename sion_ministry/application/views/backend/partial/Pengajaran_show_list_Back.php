<style>
	.table tr td img{
		width:100%;
		height:auto;
	}
</style>

<?php 
	//Variabel
	$arr_thead_text = ["Cover Image","Judul","Isi","Author",""];
	$arr_thead_width = ["20%","20%","30%","10%","20%"];
	
	//Fungsi Bantuan utk Menampilkan Alert Success Operation to SQL
	$myVar = $this->session->flashdata('is_success_operation_to_sql');
	if($myVar == "success_insert"){
		echo "<div class='alert alert-success'>Data <strong>berhasil</strong> disimpan.</div>";
	}elseif($myVar == "success_delete"){
		echo "<div class='alert alert-success'>Data <strong>berhasil</strong> dihapus.</div>";
	}
?>

<div class="panel-group">
    <div class="panel panel-default">
        <div class="panel-heading">
        	<h2><div class="glyphicon glyphicon-pushpin"></div><span>&emsp;<?php echo $name_of_submenu_parent->menu_name;?></span></h2>
        </div>
        <div class="panel-body">
        	<a href="create_new/1"><button class="btn btn-primary">Buat Baru</button></a>
            <table class="table table-striped">
                <thead><tr><?php
                    for($i=0;$i<sizeof($arr_thead_text);$i++){?>
                        <th width="<?php echo $arr_thead_width[$i];?>"><?php echo $arr_thead_text[$i];?></th><?php
                    }?>
                </tr></thead>
                <tbody><?php
					foreach($all_pengajaran_content as $all_pengajaran_content){?>
                        <tr>
                            <td><?php echo $all_pengajaran_content->cover_image;?></td>
                            <td><?php echo $all_pengajaran_content->title;?></td>
                            <td><?php echo setContentAdjustToHeight($all_pengajaran_content->content,200);?></td>
                            <td><?php echo $all_pengajaran_content->author;?></td>
                            <td>
                            	<a href="<?php echo "edit/".$all_pengajaran_content->id;?>"><button class="btn btn-primary">Edit</button></a>
                                <a href="<?php echo "delete/".$all_pengajaran_content->id;?>" onclick="return confirm('Apakah yakin ingin Menghapus data?');"><button class="btn btn-danger">Delete</button></a>
                            </td>
                        </tr><?php
					}?>
                </tbody>
            </table>
        </div>
    </div>
</div>