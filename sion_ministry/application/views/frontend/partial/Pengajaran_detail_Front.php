<style>
	/********** STYLE DETAIL PENGAJARAN *********/
	#detail_pengajaran .container{
		max-width:750px;
	}
	#detail_pengajaran{
		padding-top:30px;
	}
	#detail_pengajaran p{
		padding-bottom:10px;
	}
	#detail_pengajaran .container .cover_image img{
		width:100%;
		max-height:400px;
	}
	#detail_pengajaran .container .author{
		margin:10px 0;
	}
	
	/********** STYLE MORE RESOURCE PENGAJARAN *********/
	#pengajaran_more_resources .container{
		max-width:750px;
	}
	#pengajaran_more_resources .row.thumbnail .thumbnail_image{
		float:left;
	}
	#pengajaran_more_resources .row.thumbnail .thumbnail_text{
		padding-left:2%;
		overflow: hidden;
	}
	#pengajaran_more_resources .row.thumbnail .thumbnail_text .time{
		float:right;
		margin-right:3%;
		padding:0px;
		font-size:13px;
	}
	#pengajaran_more_resources .row.thumbnail .thumbnail_text .title{
		clear:both;
	}
	
	/*Setting Responsive Thumbnail*/
	@media screen and (min-width:1193px){
		#pengajaran_more_resources .row.thumbnail .thumbnail_image{
			width:200px;
			height:150px;
		}
		#pengajaran_more_resources .row.thumbnail .thumbnail_text{
			max-height:130px;
		}
	}
	@media screen and (max-width:1192px){
		#pengajaran_more_resources .row.thumbnail .thumbnail_image{
			width:150px;
			height:110px;
		}
		#pengajaran_more_resources .row.thumbnail .thumbnail_text{
			max-height:105px;
		}
	}
	@media screen and (max-width:650px){
		#pengajaran_more_resources .row.thumbnail .thumbnail_text .title{
			max-height:110px;
		}
		#pengajaran_more_resources .content_preview{
			display:none;
		}
	}
	#pengajaran_more_resources>.container>.row>.thumbnail{
		position:relative;
	}
	#pengajaran_more_resources>.container>.row>.thumbnail>a{
		position: absolute;
		top: 0; right: 0;
		bottom: 0; left: 0;
	}
</style>

<div id="detail_pengajaran">
    <div class="container"><?php
        foreach ($pengajaran_detail as $pengajaran_detail){?>
            <div class="p text_center"><?php
                echo strtoupper(getDayToHari(getDayHuruf($pengajaran_detail->times)).", ".getDayAngka($pengajaran_detail->times)." ".getMonth($pengajaran_detail->times)." ".getYear($pengajaran_detail->times));?>
            </div>
            <div class="h1 text_center"><?php
                echo $pengajaran_detail->title;?>
            </div>
            
            <div class="cover_image"><?php echo $pengajaran_detail->cover_image;?></div>
            <div class="author">
                <b>Article by </b><?php echo $pengajaran_detail->author;?>
            </div>
            <div class="body"><?php
                echo $pengajaran_detail->content;?>
            </div><?php
        }?>
    </div>
</div>
<div id="pengajaran_more_resources" class="my_background_grey">
    <div class="container">
        <h4>More Resources</h4>
        <div class="row"><?php
            foreach ($pengajaran_more_resources as $pengajaran_more_resources){?>
                <div class="row thumbnail">
                    <div class="thumbnail_image"><?php
                        if($pengajaran_more_resources->cover_image != ""){
                            echo $pengajaran_more_resources->cover_image;
                        }else{?>
                            <img alt="" src="<?php echo base_url().'images/no_image.jpg';?>" /><?php
                        }?>
                    </div>
                    <div class="thumbnail_text">
                        <div class="time"><?php echo getDayToHari(getDayHuruf($pengajaran_more_resources->times)).", ".getDayAngka($pengajaran_more_resources->times)." ".getMonth($pengajaran_more_resources->times)." ".getYear($pengajaran_more_resources->times);?></div>
                        <div class="title my_font_red"><b><?php echo strtoupper($pengajaran_more_resources->title);?></b></div>
                        <div class="content_preview"><p><?php echo strip_tags($pengajaran_more_resources->content);?></p></div>
                    </div>
                    <a href="<?php echo base_url("pengajaran-detail/".$pengajaran_more_resources->id);?>"></a>
                </div><?php
            }?>
        </div>
    </div>
</div>