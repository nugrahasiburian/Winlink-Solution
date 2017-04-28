<?php
	class Menu_model_Back extends CI_Model{
		function __construct(){
			parent::__construct();
		}
		function get_list_of_menu_parent(){
			$query = $this->db->query("
				select *
				from menu
				where menu_parent=0 and menu_link!='home'");
			return $query->result();
		}
	}
?>