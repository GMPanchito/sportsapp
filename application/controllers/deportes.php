<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Deportes extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('pagination');
		$this->load->library('form_validation');
		$this->load->model('deportes_model');
		$this->load->helper('url');
		$this->load->database();

	}
	
	public function std_pag(){
	 #Numero
	 $config['num_tag_open']= '<i class="item" >';
	 $config['num_tag_close']= '</i>';
	 
	 #Actual
	 $config['cur_tag_open']= '<i class="active item" >';
	 $config['cur_tag_close']='</i>';
	 
	 #Siguiente
	 $config['next_tag_open']= '<i class="item" >';
	 $config['next_tag_close']='</i>';
	 
	 #Anterior
	 $config['prev_tag_open']= '<i class="item" >';
	 $config['prev_tag_close']='</i>';

	 #Ultimo
	 $config['last_tag_open'] = '<i class="item" >';
	 $config['last_tag_close'] = '</i>';

	 #Primero
	 $config['first_tag_open'] = '<i class="item" >';
	 $config['first_tag_close'] = '</i>';

	 return $config;
	}
	
	public function index($offset=0){
		$limite=5;
		$total_registros = count($this->deportes_model->consultar());
		$config = $this->std_pag();
		$config['base_url'] = base_url().'index.php/deportes/paginacion/';
		$config['total_rows'] = $total_registros;
		$config['per_page'] = $limite;
		$config['num_links'] = 4;
		$config['use_page_numbers'] = TRUE;
		$config['first_link'] = 'Primero';
		$config['last_link'] = 'Último';
		
		if($offset>0)
			$offset=($offset-1)*$limite;

		$this->pagination->initialize($config);
		$data['entrenadores'] = $this->deportes_model->consultar($limite,$offset);
		$this->load->view('vista_deportes',$data);
			
	}
	
	
	public function paginacion($offset=0){ //NUEVO
		$limite = 5;
		$total_reg = count($this->deportes_model->consultar());		
		$config = $this->std_pag();
		$config['base_url'] = base_url().
		'index.php/deportes/paginacion/';
		$config['total_rows'] = $total_reg;
		$config['per_page'] = $limite;
		$config['num_links'] = 4;
		$config['use_page_numbers'] = TRUE;
		$config['first_link'] = 'Primero';
		$config['last_link'] = 'Último';
		
		if($offset>0)#3-20-30:2*2= 4
			$offset = ($offset-1)*$limite;

		$this->pagination->initialize($config);
		$data['links'] = $this->pagination->create_links();
		$data['entrenadores'] = $this->deportes_model->consultar($limite,$offset);
		echo json_encode($data);			
	}

	public function nuevo_ent($id=""){
		$data=array();
		if($id!=""){
			$data['entrenadores']=$this->deportes_model->cons($id);
		}
		/*if($this->input->is_ajax_request()){

		}else{
			return false;
		}*/
		#$data['entrenadores']= $this->deportes_model->consultar();
		$this->form_validation->set_rules('nombre', 'Nombre', 'required');
		$this->form_validation->set_rules('direccion', 'Dirección', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('telefono', 'Teléfono', 'required');
		$post = $this->input->post();
		if ($this->form_validation->run() == FALSE){
			$this->load->view('nuevo_entrenador',$data);
		}else if($this->deportes_model->agregar($post,$id)){
			
			#$this->load->helper('url');	
		}
	}
}