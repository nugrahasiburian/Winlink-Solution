<?php
	class Menu_model_Front extends CI_Model{
		function __construct(){
			parent::__construct();
		}
		public function get_db_menu(){
			$query = $this->db->query("
				select *
				from menu
				order by menu_parent ASC, menu_rank ASC");
			return $query->result();
		}
	}
?>