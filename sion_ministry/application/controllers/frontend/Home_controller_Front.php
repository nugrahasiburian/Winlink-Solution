<?php
	class Home_controller_Front extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->model("shared/Browser_info_model");
			$this->load->model("frontend/Menu_model_Front");
			$this->load->model("frontend/Home_model_Front");
		}
		public function load_css_template(){
			$data['browser_info'] = $this->Browser_info_model->get_db_browser_info();
			return $this->load->view("frontend/partial/CSS_Front",$data,true);
		}
		public function load_menu(){
			$data ['menu'] = $this->Menu_model_Front->get_db_menu();
			return $this->load->view("frontend/partial/Menu_Front",$data,true);
		}
		public function load_body(){
			$data['headline_news'] = $this->Home_model_Front->get_headline_news();
			$data['profil'] = $this->Home_model_Front->get_db_profil();
			$data['video'] = $this->Home_model_Front->get_link_video();
			$data['pengajaran'] = $this->Home_model_Front->get_db_pengajaran();
			return $this->load->view("frontend/partial/Home_Front",$data,true);
		}
		public function load_footer(){
			return $this->load->view("frontend/partial/Footer_Front",NULL,true);
		}
		public function index(){
			$template['css_template'] = $this->load_css_template();
			$template['menu'] = $this->load_menu();
			$template['body'] = $this->load_body();
			$template['footer'] = $this->load_footer();
			$this->load->view("frontend/Template_view_Front",$template);
		}
	}
?>