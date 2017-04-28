<?php
	class Pengajaran_detail_model_Front extends CI_Model{
		function __construct(){
			parent::__construct();
		}
		function get_pengajaran_detail($id){
			$query = $this->db->query("
				select *
				from pengajaran
				where id=$id");
			return $query->result();
		}
		function get_pengajaran_more_resources($id){
			$query = $this->db->query("
				select *
				from pengajaran
				limit 5 offset 0");
			return $query->result();
		}
	}
?>