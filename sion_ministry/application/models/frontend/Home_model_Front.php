<?php
	class Home_model_Front extends CI_Model{
		function __construct(){
			parent::__construct();
		}
		function get_headline_news(){
			$query = $this->db->query("
				select *
				from pengajaran
				order by times ASC
				limit 3 OFFSET 0");
			return $query->result();
		}
		function get_db_profil(){
			$query = $this->db->query("
				select *
				from profil
				where tag_name!='video'");
			return $query->result();
		}
		function get_link_video(){
			$query = $this->db->query("
				select *
				from profil
				where tag_name='video'");
			return $query->result();
		}
		function get_db_pengajaran(){
			$query = $this->db->query("
				select *
				from pengajaran
				order by times desc
				limit 5 offset 0");
			return $query->result();
		}
	}
?>