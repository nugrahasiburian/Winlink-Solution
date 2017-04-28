<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pengajaran_model_Back extends CI_Model {
    
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
	function get_all_pengajaran_content($category){
		$query = $this->db->query("
			select *
			from $category
			order by times DESC");
		return $query->result();
	}
	function get_selected_content_detail($category, $id){
		$query = $this->db->query("
			select *
			from $category
			where id='".$id."'");
		return $query->row();
	}
	function insert_into_pengajaran($cover_image, $title, $content, $author){
       	$this->db->query("
	  		insert into pengajaran (cover_image, title, content, author) 
			values('".$cover_image."','".$title."','".$content."','".$author."')");
    }
	function update_pengajaran($id, $cover_image, $title, $content, $author){
       	$this->db->query("
	  		update pengajaran
			set cover_image='".$cover_image."',title='".$title."',content='".$content."',author='".$author."'
			where id='".$id."'");
    }
	function delete_pengajaran($id){
		$this->db->query("delete from pengajaran where id=".$id);
	}
}
?>