<style>
	#footer{
		background-color:#A4000D;
	}
	#footer p{
		padding:0 2%;
		color:white;
	}
</style>
<div id="footer">
    <div class="container">
        <p>© Copyright 2016 Winlink Solution<br />
        Medan, Sumatera Utara</p>
    </div>
</div>

<script type="text/javascript" src="<?php echo base_url();?>default_assets/js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>default_assets/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>customized_assets/kamus_javascript.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>default_assets/ckeditor/ckeditor.js"></script>
<script>
	CKEDITOR.replace('textarea_ckeditor',{
		height : 370,
		filebrowserBrowseUrl : '../../../default_assets/kcfinder/browse.php?type=files',
   		filebrowserImageBrowseUrl : '../../../default_assets/kcfinder/browse.php?type=images',
   		filebrowserUploadUrl : '../../../default_assets/kcfinder/upload.php?type=files',
   		filebrowserImageUploadUrl : '../../../default_assets/kcfinder/upload.php?type=images'
	});
	
	function openKCFinder(variabel) {
		window.KCFinder = {
			callBack: function(url) {
				var class_name_of_field = variabel.getAttribute('class');
				var input_field = document.getElementById(class_name_of_field);
				input_field.value = '<img alt="" src="'+url+'" style="height:; width:"/>';
				
				window.KCFinder = null;
				var img = new Image();
				img.src = url;
				img.onload = function() {
					variabel.innerHTML = '<img id="img" src="' + url + '" />';
					var img = document.getElementById('img');
					var o_w = img.offsetWidth;
					var o_h = img.offsetHeight;
					var f_w = variabel.offsetWidth;
					var f_h = variabel.offsetHeight;
					if ((o_w > f_w) || (o_h > f_h)) {
						if ((f_w / f_h) > (o_w / o_h))
							f_w = parseInt((o_w * f_h) / o_h);
						else if ((f_w / f_h) < (o_w / o_h))
							f_h = parseInt((o_h * f_w) / o_w);
						img.style.width = f_w + "px";
						img.style.height = f_h + "px";
					} else {
						f_w = o_w;
						f_h = o_h;
					}
					img.style.marginLeft = parseInt((variabel.offsetWidth - f_w) / 2) + 'px';
					img.style.marginTop = parseInt((variabel.offsetHeight - f_h) / 2) + 'px';
					img.style.visibility = "visible";
				}
			}
		};
		window.open('../../../default_assets/kcfinder/browse.php?type=images',
			'kcfinder_image', 'status=0, toolbar=0, location=0, menubar=0, ' +
			'directories=0, resizable=1, scrollbars=0, width=800, height=600'
		);
	}
	
	
</script>