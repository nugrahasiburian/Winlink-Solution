<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $css_template;?>
    <style>
    /******************GENERAL STYLE *********************/
    body{
        font: 400 15px Lato, sans-serif;
        line-height: 1.8;
    }
	p{
		font-size:15px;
		line-height:23px;
	}
	
	/*Style Text Size*/
	@media screen and (min-width:611px){
		.h1{
			font-size:35px;
			line-height:40px;
		}
	}
	@media screen and (max-width:650px){
		.h1{
			font-size:25px;
			line-height:30px;
		}
	}
	blockquote h2{
		font-size:15px;
	}
	/* Style Text Position */
	.text_center{
		text-align:center;
	}
	
	/*Style font color */
	.my_font_red{
		color:#CC3300;
	}
	.my_font_white{
		color:white;
	}
	.my_font_title_a_href{
		color:black;
		text-decoration:none;
	}
	
	/*Style Background color*/
	.my_background_grey{
		background-color:#EBEBEB;
	}
	.my_background_white{
		background-color:white;
	}
	
	/*Style Others*/
    .line-heading-1{
        width:100px;height:5px;background-color:#CC0000;
    }
    .line-heading-2{
        width:100%;height:2px;background-color:#E4E4E4;margin-bottom:10px;
    }
	
	/* Style Thumbnail*/
	.row{
		margin:auto;
	}
	.row.thumbnail{
		margin:1% 0;
	}
	.row.thumbnail{
		padding:0px;
	}
	.row.thumbnail img{
		width:100%;
		height:100%;
	}
	
	
</style>
</head>
<body style="visibility: hidden;" onload="js_Load()"><?php 
	echo $menu;
	echo $body;
	echo $footer;?>
</body>
</html>