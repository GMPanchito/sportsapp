<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Perfiles extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library(array("session","form_validation"));
		$this->load->helper("url");
		$this->load->model("usuarios_modelos");
		$this->load->model("deportes_model");
		$this->load->library('pagination');
		$this->load->database();
	}
	
	public function index (){
		$this->load->view("perfiles");
	} 
}