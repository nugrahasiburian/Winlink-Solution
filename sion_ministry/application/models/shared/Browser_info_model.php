<?php
	class Browser_info_model extends CI_Model{
		function __construct(){
			parent::__construct();
		}
		public function get_db_browser_info(){
			$query = $this->db->get("browser_info");
			return $query->row();
		}
	}
?>