<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Profil_model_Back extends CI_Model {
    
    function __construct(){
        parent::__construct();
    }
	function get_name_of_submenu_parent($category){
		$query = $this->db->query("
			select menu_name
			from menu
			where menu_link='".$category."'");
		return $query->row();
	}
	function get_submenu_detail($category){
		$query = $this->db->query("
			select *
			from $category");
		return $query->result();
	}
	function get_selected_submenu_detail($category, $sub_category){
		$query = $this->db->query("
			select *
			from $category
			where id='".$sub_category."'");
		return $query->result();
	}
	function update_profil($id, $name, $content){
       	$query = $this->db->query("
	  		update profil
			set name='".$name."', content='".$content."'
			where id='".$id."'");
    }
}
?>