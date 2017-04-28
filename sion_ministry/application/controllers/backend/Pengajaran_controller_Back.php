<?php
	class Pengajaran_controller_Back extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->library('session');
			$this->load->database();
			$this->load->model("shared/Browser_info_model");
			$this->load->model("backend/Menu_model_Back");
			$this->load->model('backend/Pengajaran_model_Back');
		}
		public function get_css_template(){
			$data['browser_info'] = $this->Browser_info_model->get_db_browser_info();
			return $this->load->view("backend/partial/CSS_Back",$data,true);
		}
		public function get_header(){
			return $this->load->view("backend/partial/Header_Back",NULL,true);
		}
		public function get_menu(){
			$category = $this->uri->segment(2);
			$data ['list_of_menu_parent'] = $this->Menu_model_Back->get_list_of_menu_parent();
			return $this->load->view("backend/partial/Menu_Back",$data,true);
		}
		public function get_list_of_pengajaran(){
			$category = $this->uri->segment(2);
			
			$data['name_of_submenu_parent'] = $this->Pengajaran_model_Back->get_name_of_submenu_parent($category);
			$data['all_pengajaran_content'] = $this->Pengajaran_model_Back->get_all_pengajaran_content($category);
			
			return $this->load->view("backend/partial/Pengajaran_show_list_Back",$data,true);
		}
		public function get_form_edit_pengajaran(){
			$category = $this->uri->segment(2);
			$id = $this->uri->segment(4);
			
			$data['name_of_submenu_parent'] = $this->Pengajaran_model_Back->get_name_of_submenu_parent($category);
			$data['selected_content_detail'] = $this->Pengajaran_model_Back->get_selected_content_detail($category, $id);
			
			return $this->load->view("backend/partial/Pengajaran_form_Back",$data,true);
		}
		public function get_footer(){
			return $this->load->view("backend/partial/Footer_Back",NULL,true);
		}
		public function show_list_of_pengajaran(){
			$template['css_template'] = $this->get_css_template();
			$template['header'] = $this->get_header();
			$template['menu'] = $this->get_menu();
			$template['body'] = $this->get_list_of_pengajaran();
			$template['footer'] = $this->get_footer();
			$this->load->view("backend/Template_view_Back",$template);
		}
		public function show_form_edit_pengajaran(){
			$template['css_template'] = $this->get_css_template();
			$template['header'] = $this->get_header();
			$template['menu'] = $this->get_menu();
			$template['body'] = $this->get_form_edit_pengajaran();
			$template['footer'] = $this->get_footer();
			$this->load->view("backend/Template_view_Back",$template);
		}
		public function insert_into_sql_controller() {
			$cover_image = $this->input->post('cover_image');
			$title = $this->input->post('judul');
			$content = $this->input->post('isi');
			$author = $this->input->post('author');
			$this->Pengajaran_model_Back->insert_into_pengajaran($cover_image, $title, $content, $author);
			$this->session->set_flashdata('is_success_operation_to_sql', 'success_insert');
			redirect('wp_admin/pengajaran/1');
		}
		public function update_sql_controller() {
			$id = $this->input->post('id');
			$cover_image = $this->input->post('cover_image');
			$title = $this->input->post('judul');
			$content = $this->input->post('isi');
			$author = $this->input->post('author');
			$this->Pengajaran_model_Back->update_pengajaran($id, $cover_image, $title, $content, $author);    
			$this->session->set_flashdata('is_success_operation_to_sql', 'success_update');
			redirect('wp_admin/pengajaran/edit/'.$id.'');
		}
		public function delete_sql_controller() {
			$id = $this->uri->segment(4);
			
			$this->Pengajaran_model_Back->delete_pengajaran($id);
			$this->session->set_flashdata('is_success_operation_to_sql', 'success_delete');
			redirect('wp_admin/pengajaran/1');
		}
	}
?>