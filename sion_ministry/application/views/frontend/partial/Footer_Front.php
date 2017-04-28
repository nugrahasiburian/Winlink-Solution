<style>
	#footer{
		background-color:#A4000D;
	}
	#footer p{
		padding:3% 2%;
		color:white;
	}
</style>

<div id="footer">
    <div class="container">
        <p>© Copyright 2016 Winlink Solution<br />
        Medan, Sumatera Utara</p>
    </div>
</div>
<script src="<?php echo base_url("default_assets/js/jquery-2.2.4.min.js");?>"></script>
<script src="<?php echo base_url("default_assets/js/bootstrap.js");?>"></script>
<script src="<?php echo base_url("default_assets/js/bootstrap-datepicker.min.js");?>"></script>
<script src="<?php echo base_url("customized_assets/kamus_javascript.js");?>"></script>
<script>
	$('.month-pengajaran').datepicker({
		autoclose: true,
		minViewMode: 1,
		format: 'mm/yyyy'
	});
	function gotoPage(value){
		window.location.href = <?php echo json_encode(base_url()); ?>+"pengajaran/"+value;
	}
	function js_Load(){
		document.body.style.visibility='visible';
	}
</script>