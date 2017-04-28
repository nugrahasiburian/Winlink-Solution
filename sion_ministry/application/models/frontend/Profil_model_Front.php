<?php
	class Profil_model_Front extends CI_Model{
		function __construct(){
			parent::__construct();
		}
		function get_complete_profil(){
			$query = $this->db->query("
				select *
				from profil");
			return $query->result();
		}
	}
?>