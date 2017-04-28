<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $css_template;?>
</head>

<style>
	#template_header{
		margin-bottom:20px;
	}
	#template_left_body{
		width:25%;
		float:left;
		margin-right:5%;
	}
	#template_right_body{
		width:70%;
		float:left;
	}
	#template_footer{
		clear:both;
	}	
	#floating_alert {
		position: absolute;
		top: 20px;
		right: 20px;
		z-index: 5000;
	}
</style>

<body>
	<div class="container">
        <div id="template_header">
            <?php echo $header;?>
        </div>
        <div id="template_left_body">
            <?php echo $menu;?>
        </div>
        <div id="template_right_body">
            <?php echo $body;?>
        </div>
        <div id="template_footer">
            <?php echo $footer;?>
        </div>
  	</div>
</body>
</html>