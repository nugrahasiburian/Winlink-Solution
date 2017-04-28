
<?php
	function getDayToHari($var){
		if($var == 'Sun'){return 'Minggu';}
		if($var == 'Mon'){return 'Senin';}
		if($var == 'Tue'){return 'Selasa';}
		if($var == 'Wed'){return 'Rabu';}
		if($var == 'Thu'){return 'Kamis';}
		if($var == 'Fri'){return 'Jumat';}
		if($var == 'Sat'){return 'Sabtu';}
	}
	function getMonthToBulan($var){
		if($var == '01'){return 'Januari';}
		if($var == '02'){return 'Februari';}
		if($var == '03'){return 'Maret';}
		if($var == '04'){return 'April';}
		if($var == '05'){return 'Mei';}
		if($var == '06'){return 'Juni';}
		if($var == '07'){return 'Juli';}
		if($var == '08'){return 'Agustus';}
		if($var == '09'){return 'September';}
		if($var == '10'){return 'Oktober';}
		if($var == '11'){return 'Nopember';}
		if($var == '12'){return 'Desember';}
	}
	function getDayHuruf($var){
		$datetime = new DateTime($var);
		return $datetime->format('D');
	}
	function getDayAngka($var){
		$datetime = new DateTime($var);
		return $datetime->format('d');
	}
	function getMonth($var){
		$datetime = new DateTime($var);
		return getMonthToBulan($datetime->format('m'));
	}
	function getYear($var){
		$datetime = new DateTime($var);
		return $datetime->format('Y');
	}
	function getDateTimeNow(){
		date_default_timezone_set('Asia/Jakarta');
		echo date("Y-m-d H:i:s");
	}
	
	function getArrayofMenu($data){
		$row = array(array());
		$i = 0;
		foreach($data as $datax){
			if($datax->menu_parent == 0){ //menu parent
				$row[$i][0] = $datax;
				$i++;
			}else{
				if(searchMenuParent($datax->menu_parent,$row) != -1){ //parent dari sub menu ketemu
					$row[searchMenuParent($datax->menu_parent,$row)][sizeof($row[searchMenuParent($datax->menu_parent,$row)])] = $datax;
				}
			}
		}
		return $row;
	}
	function searchMenuParent($value, $array){
		for($i=0;$i<sizeof($array);$i++){
			if($value == $array[$i][0]->menu_rank){
				return $i;
			}
		}
		return -1;
	}
	
	function setContentAdjustToHeight($content, $length){
		echo substr($content,0,$length);
		if(strlen($content) > $length){
			echo " ...";
		}
	}
	function embededYoutube($url){
		$link=str_replace('<p>https://www.youtube.com/watch?v=', '', $url);
		$link=str_replace('</p>', '', $link);
		echo $link;
		$data='<object width="425" height="350" data="http://www.youtube.com/v/'.$link.'" type="application/x-shockwave-flash">
		<param name="src" value="http://www.youtube.com/v/'.$link.'" />
		</object>';
		return $data;
	}
?>