<?php
	class Profil_controller_Back extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->library('session');
			$this->load->database();
			$this->load->model("shared/Browser_info_model");
			$this->load->model("backend/Menu_model_Back");
			$this->load->model('backend/Profil_model_Back');
		}
		public function load_css_template(){
			$data['browser_info'] = $this->Browser_info_model->get_db_browser_info();
			return $this->load->view("backend/partial/CSS_Back",$data,true);
		}
		public function load_header(){
			return $this->load->view("backend/partial/Header_Back",NULL,true);
		}
		public function load_menu(){
			$category = $this->uri->segment(2);
			$data ['list_of_menu_parent'] = $this->Menu_model_Back->get_list_of_menu_parent();
			return $this->load->view("backend/partial/Menu_Back",$data,true);
		}
		public function load_profil(){
			$category = $this->uri->segment(2);
			$sub_category = $this->uri->segment(3);
			
			$data['name_of_submenu_parent'] = $this->Profil_model_Back->get_name_of_submenu_parent($category);
			$data['submenu_detail'] = $this->Profil_model_Back->get_submenu_detail($category);
			$data['selected_submenu_detail'] = $this->Profil_model_Back->get_selected_submenu_detail($category,$sub_category);
			
			return $this->load->view("backend/partial/Profil_Back",$data,true);
		}
		public function load_footer(){
			return $this->load->view("backend/partial/Footer_Back",NULL,true);
		}
		public function index(){
			$template['css_template'] = $this->load_css_template();
			$template['header'] = $this->load_header();
			$template['menu'] = $this->load_menu();
			$template['body'] = $this->load_profil();
			$template['footer'] = $this->load_footer();
			$this->load->view("backend/Template_view_Back",$template);
		}
		public function save() {
			$id = $this->input->post('id');
			$name = $this->input->post('judul');
			$content = $this->input->post('isi');
			$this->Profil_model_Back->update_profil($id, $name, $content);
			$this->session->set_flashdata('is_success_operation_to_sql','success_save');
			redirect('wp_admin/profil/'.$id);
		}
	}
?>