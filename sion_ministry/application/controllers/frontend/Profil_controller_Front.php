<?php
	class Profil_controller_Front extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->model("frontend/Header_model_Front");
			$this->load->model("frontend/Profil_model_Front");
		}
		public function load_header(){
			$data['browser_info'] = $this->Header_model_Front->get_db_browser_info();
			$data ['menu'] = $this->Header_model_Front->get_db_menu();
			$this->load->view("frontend/Header_view_Front",$data);
		}
		public function load_body(){
			$data['complete_profil'] = $this->Profil_model_Front->get_complete_profil();
			$this->load->view("frontend/Profil_view_Front",$data);
		}
		public function load_footer(){
			$this->load->view("frontend/Footer_view_Front");
		}
		public function index(){
			$this->load_header();
			$this->load_body();
			$this->load_footer();
		}
	}
?>