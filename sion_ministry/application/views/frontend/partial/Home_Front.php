<style>
	/******************** CAROUSEL STYLING*************/
	#myCarousel{
		background-color:#EBEBEB;
    	padding-top:10px;
		padding-bottom:80px;
	}
	#myCarousel .container{
		background-color:white;
		padding:0;
		box-shadow: 10px 10px 5px #ccc; 
		-moz-box-shadow: 10px 10px 5px #ccc;
		-webkit-box-shadow: 10px 10px 5px #ccc;
	}
	@media screen and (min-width:1000px){
		#myCarousel .container{
			max-width:1050px;
		}
		#myCarousel .container, .carousel-inner .item, .carousel-inner .item .carousel_image, .carousel-inner .item .carousel_text{
			height:400px;
		}
		.carousel-inner .item .carousel_image{
			width:60%;
		}
		.carousel-inner .item .carousel_text{
			width:40%;
		}
		.carousel-inner .item .carousel_text #title span{
			font-size:30px;
			line-height:35px;
		}
		#myCarousel li{
			margin-bottom:-10px;
		}
	}
	@media screen and (min-width:610px) and (max-width:999px){
		#myCarousel .container{
			max-width:611px;
		}
		#myCarousel .container, .carousel-inner .item, .carousel-inner .item .carousel_image{
			height:300px;
		}
		.carousel-inner .item .carousel_image, .carousel-inner .item .carousel_text{
			width:100%;
		}
		.carousel-inner .item .carousel_text #title{
			text-align:center;
		}
		.carousel-inner .item .carousel_text #title span{
			font-size:20px;
			line-height:25px;
		}
		.carousel-inner .item .carousel_text #body, .carousel-inner .item .carousel_text #read_more{
			display:none;
		}
		#myCarousel li{
			margin-bottom:-15px;
		}
		
	}
	@media screen and (max-width:611px){
		#myCarousel .container{
			max-width:330px;
		}
		#myCarousel .container, .carousel-inner .item, .carousel-inner .item .carousel_image{
			height:210px;
		}
		.carousel-inner .item .carousel_image, .carousel-inner .item .carousel_text{
			width:100%;
		}
		.carousel-inner .item .carousel_text #title{
			text-align:center;
		}
		.carousel-inner .item .carousel_text #title span{
			font-size:16px;
			font-weight:bold;
			line-height:23px;
		}
		.carousel-inner .item .carousel_text #body, .carousel-inner .item .carousel_text #read_more{
			display:none;
		}
		#myCarousel li{
			margin-bottom:-20px;
		}
	}
	.carousel-inner .item .carousel_image{
		float:left;
	}
	.carousel-inner .item .carousel_text{
		padding:5px 10px;
		float:left;
	}
	.carousel-inner .item .carousel_image img{
		width:100%;
		height:100%;
	}
	.carousel-inner .item .carousel_text #title a:hover{
		border-bottom:#CC0000;
	}
	.carousel-inner .item .carousel_text .line-under-carousel-title{
		border-bottom:dashed 4px #EEEEEE;
	}
	.carousel-inner .item .carousel_text button{
		border:none;
		padding:10px 0px;
		width:100%;
		background-color:#CC3333;
		text-align:center;
		color:white;
		font-weight:bold;
	}
	/********Carousel Indicator**********/
	#myCarousel li{
		border-radius:0;
		width:25px;
		height:20px;
		margin-left:10px;
		margin-right:10px;
		box-shadow: 10px 10px 5px #ccc; 
		-moz-box-shadow: 10px 10px 5px #ccc;
		-webkit-box-shadow: 10px 10px 5px #ccc; 
	}
	#myCarousel li.active{
		background-color:#CC3300;
	}
	
	
	/***************** STYLE PENGAJARAN ***********/
	#pengajaran .container #list_of_pengajaran_on_home{
		max-width:750px;
	}
	#pengajaran .row.thumbnail .thumbnail_image{
		float:left;
	}
	#pengajaran .row.thumbnail .thumbnail_text{
		padding-left:2%;
		overflow: hidden;
	}
	#pengajaran .row.thumbnail .thumbnail_text .time{
		float:right;
		margin-right:3%;
		padding:0px;
		font-size:13px;
	}
	#pengajaran .row.thumbnail .thumbnail_text .title{
		clear:both;
	}
	
	/*Setting Responsive Thumbnail*/
	@media screen and (min-width:1193px){
		#pengajaran .row.thumbnail .thumbnail_image{
			width:200px;
			height:150px;
		}
		#pengajaran .row.thumbnail .thumbnail_text{
			max-height:130px;
		}
	}
	@media screen and (max-width:1192px){
		#pengajaran .row.thumbnail .thumbnail_image{
			width:150px;
			height:110px;
		}
		#pengajaran .row.thumbnail .thumbnail_text{
			max-height:105px;
		}
	}
	@media screen and (max-width:650px){
		#pengajaran .row.thumbnail .thumbnail_text .title{
			max-height:110px;
		}
		#pengajaran .content_preview{
			display:none;
		}
	}
	#pengajaran>.container>#list_of_pengajaran_on_home>.row>.thumbnail{
		position:relative;
	}
	#pengajaran>.container>#list_of_pengajaran_on_home>.row>.thumbnail>a{
		position: absolute;
		top: 0; right: 0;
		bottom: 0; left: 0;
	}
</style>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="container">
        <!--Indicator-->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner"><?php
            $count=0;
            foreach ($headline_news as $headline_news){?>
                <div class="item <?php if($count == 0){?> active <?php }?>">
                    <div class="carousel_image">
                        <a href="<?php echo base_url("pengajaran-detail/".$headline_news->id);?>"><?php
                            if($headline_news->cover_image != ""){
                                echo $headline_news->cover_image;
                            }else{?>
                                <img alt="" src="<?php echo base_url().'images/no_image.jpg';?>" /><?php
                            }?>
                        </a>
                    </div>
                    <div class="carousel_text">
                        <div id="title">
                        	<span class="my_font_red"><?php echo setContentAdjustToHeight(strtoupper($headline_news->title),50);?></span>
                       	</div>
                        <div class="line-under-carousel-title"></div>
                        <div id="body">
                        	<p><?php echo setContentAdjustToHeight($headline_news->content,300);?></p>
                        </div>
                        <div id="read_more">
                        	<a href="<?php echo base_url("pengajaran-detail/".$headline_news->id);?>"><button>Read More</button></a>
                      	</div>
                    </div>
                </div><?php
                $count++;
            }?>
        </div>
    </div>
</div>


<div id="pengajaran" class="my_background_white">
    <div class="container">
        <div id="list_of_pengajaran_on_home">
            <h3><a class="my_title_a_href" href="<?php echo base_url()."pengajaran";?>">PENGAJARAN</a></h3>
            <div class="line-heading-1"></div>
            <div class="line-heading-2"></div>
            <div class="row"><?php
                foreach ($pengajaran as $pengajaran){?>
                    <div class="row thumbnail">
                        <div class="thumbnail_image"><?php
                            if($pengajaran->cover_image != ""){
                                echo $pengajaran->cover_image;
                            }else{?>
                                <img alt="" src="<?php echo base_url().'images/no_image.jpg';?>" /><?php
                            }?>
                        </div>
                        <div class="thumbnail_text">
                            <div class="time"><?php echo getDayToHari(getDayHuruf($pengajaran->times)).", ".getDayAngka($pengajaran->times)." ".getMonth($pengajaran->times)." ".getYear($pengajaran->times);?></div>
                            <div class="title my_font_red"><b><?php echo strtoupper($pengajaran->title);?></b></div>
                            <div class="content_preview"><p><?php echo strip_tags($pengajaran->content);?></p></div>
                        </div>
                        <a href="<?php echo base_url("pengajaran-detail/".$pengajaran->id);?>"></a>
                    </div><?php
                }?>
            </div>
        </div>
    </div>
</div>

<div id="event">
	<div class="container ">
    	<h3><a class="" href="<?php echo base_url()."pengajaran";?>">EVENT</a></h3>
        <div class="line-heading-1"></div>
        <div class="line-heading-2"></div>
        <div class="row">
			<ul class="nav nav-tabs">
           	</ul>
        </div>
    </div>
</div>