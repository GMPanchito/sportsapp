<?php

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library(array("session","form_validation"));
		$this->load->helper("url");
		$this->load->model("usuarios_modelos");
	}
	
	public function index (){
		$this->form_validation->set_rules('username', 'Username', 'required|trim|md5');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|md5');
		if($this->form_validation->run()== false){
		    #redirect("admin/menu");        
			$this->load->view("login");
		}else{
			#SEESION
			$post=$this->input->post();
			$exist=$this->usuarios_model->user_exist($post['username'],$post['password']);
			if($exist)
				$exist=(array)$exist;
			$this->session->set_userdata($exist);
			echo $this->session->userdata("username");
				#redirect("admin/menu");  
				$this->load->view("menu");

			}
		}  
	
	public function login(){

	     $this->load->view("login");
	
	}
	public function menu(){
		$this->load->view("menu");
	}
}