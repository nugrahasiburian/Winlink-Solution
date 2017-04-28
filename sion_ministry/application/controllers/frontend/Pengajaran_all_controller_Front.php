<?php
	class Pengajaran_all_controller_Front extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->library('session');
			$this->load->database();
			$this->load->model("shared/Browser_info_model");
			$this->load->model("frontend/Menu_model_Front");
			$this->load->model("frontend/Pengajaran_all_model_Front");
		}
		public function get_css_template(){
			$data['browser_info'] = $this->Browser_info_model->get_db_browser_info();
			return $this->load->view("frontend/partial/CSS_Front",$data,true);
		}
		public function get_menu(){
			$data['browser_info'] = $this->Browser_info_model->get_db_browser_info();
			$data ['menu'] = $this->Menu_model_Front->get_db_menu();
			return $this->load->view("frontend/partial/Menu_Front",$data,true);
		}
		public function get_pengajaran_based_on_month(){
			$month = $this->uri->segment(2);
			$year = $this->uri->segment(3);
			
			if($month=="" && $year==""){
				$month = date('m');
				$year = date('Y');
			}
			$data['pengajaran_based_on_month'] = $this->Pengajaran_all_model_Front->get_pengajaran_based_on_month($month);
			return $this->load->view("frontend/partial/Pengajaran_all_Front",$data,true);
		}
		public function get_footer(){
			return $this->load->view("frontend/partial/Footer_Front",NULL,true);
		}
		public function index(){
			$template['css_template'] = $this->get_css_template();
			$template['menu'] = $this->get_menu();
			$template['body'] = $this->get_pengajaran_based_on_month();
			$template['footer'] = $this->get_footer();
			$this->load->view("frontend/Template_view_Front",$template);
		}
	}
?>