<style>
	/***************** STYLE PENGAJARAN ***********/
	#pengajaran_all .row.thumbnail .thumbnail_image{
		float:left;
	}
	#pengajaran_all .row.thumbnail .thumbnail_text{
		padding-left:2%;
		overflow: hidden;
	}
	#pengajaran_all .row.thumbnail .thumbnail_text .time{
		float:right;
		margin-right:3%;
		padding:0px;
		font-size:13px;
	}
	#pengajaran_all .row.thumbnail .thumbnail_text .title{
		clear:both;
	}
	
	/*Setting Responsive Thumbnail*/
	@media screen and (min-width:1193px){
		#pengajaran_all .row.thumbnail .thumbnail_image{
			width:200px;
			height:150px;
		}
		#pengajaran_all .row.thumbnail .thumbnail_text{
			max-height:130px;
		}
	}
	@media screen and (max-width:1192px){
		#pengajaran_all .row.thumbnail .thumbnail_image{
			width:150px;
			height:110px;
		}
		#pengajaran_all .row.thumbnail .thumbnail_text{
			max-height:105px;
		}
	}
	@media screen and (max-width:650px){
		#pengajaran_all .row.thumbnail .thumbnail_text .title{
			max-height:110px;
		}
		#pengajaran_all .content_preview{
			display:none;
		}
	}
	#pengajaran_all>.container>.row>.thumbnail{
		position:relative;
	}
	#pengajaran_all>.container>.row>.thumbnail>a{
		position: absolute;
		top: 0; right: 0;
		bottom: 0; left: 0;
	}
</style>
<?php
	$month = $this->uri->segment(2);
	$year = $this->uri->segment(3);	
?>
<div id="pengajaran_all" class="my_background_white">
	<div class="container">
        <h3><a href="<?php echo base_url()."pengajaran_all";?>">PENGAJARAN <?php echo strtoupper(getMonthToBulan($month)." ".$year);?></a></h3>
        <div class="line-heading-1"></div>
        <div class="line-heading-2"></div>
       	<div class="search_box">
            <div class="form-group row">
                <div class="col-md-4 col-sm-6 text-right"><input type="text" id="search_box" class="form-control month-pengajaran" placeholder="Pilih Bulan Pengajaran" readonly="readonly" onChange="gotoPage(this.value);"></div>
            </div>
       	</div>
        <div class="row"><?php
			if(empty($pengajaran_based_on_month)){
				echo "Tidak ada Pengajaran";
			}else{
				foreach ($pengajaran_based_on_month as $pengajaran_based_on_month){?>
					<div class="row thumbnail">
						<div class="thumbnail_image"><?php
							if($pengajaran_based_on_month->cover_image != ""){
								echo $pengajaran_based_on_month->cover_image;
							}else{?>
								<img alt="" src="<?php echo base_url().'images/no_image.jpg';?>" /><?php
							}?>
						</div>
						<div class="thumbnail_text">
							<div class="time"><?php echo getDayToHari(getDayHuruf($pengajaran_based_on_month->times)).", ".getDayAngka($pengajaran_based_on_month->times)." ".getMonth($pengajaran_based_on_month->times)." ".getYear($pengajaran_based_on_month->times);?></div>
							<div class="title my_font_red"><b><?php echo setContentAdjustToHeight(strtoupper($pengajaran_based_on_month->title),100);?></b></div>
							<div class="content_preview"><p><?php echo $pengajaran_based_on_month->content;?></p></div>
						</div>
						<a href="<?php echo base_url("pengajaran-detail/".$pengajaran_based_on_month->id);?>"></a>
					</div><?php
				}
			}?>
        </div>
    </div>
</div>