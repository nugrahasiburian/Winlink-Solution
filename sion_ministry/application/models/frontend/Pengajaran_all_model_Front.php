<?php
	class Pengajaran_all_model_Front extends CI_Model{
		function __construct(){
			parent::__construct();
		}
		function get_pengajaran_based_on_month($month){
			$query = $this->db->query("
				select *
				from pengajaran
				where times like '%-$month-%'
				order by times desc");
			return $query->result();
		}
	}
?>