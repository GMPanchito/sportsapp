<?php 
class Deportes_model extends CI_Model{
   public function __construct(){
      parent::__construct();
		$this->load->database();
		$this->load->helper('url');
   }
   public function consultar($limit=0,$offset=0){
			$this->db->where('activo',1);
			if($offset!=0)
				$this->db->limit($limit,$offset);
			else if($limit!=0)
				$this->db->limit($limit);
			$result = $this->db->get('entrenadores')->result();
			return $result;
		}
		public function cons($id){
			$consulta=$this->db->where("md5(identrenadores) ='$id'")->get('entrenadores')->row();
			return $consulta;
		}
	public function agregar($post,$id){
			/*if(!empty($_POST)){
				$nombre=(isset($_POST['nombre']) and is_string($_POST['nombre']) and !empty($_POST['nombre']))?mysql_real_escape_string($_POST['nombre']):false;
				$direccion = (isset($_POST['direccion']) and is_string($_POST['direccion'])) ?mysql_real_escape_string($_POST['direccion']):false;
				$telefono=(isset($_POST['telefono']) and is_string($_POST['telefono']) and !empty($_POST['telefono']))?mysql_real_escape_string($_POST['telefono']):false;
				$email=(isset($_POST['email']) and is_string($_POST['email']) and !empty($_POST['email']))?mysql_real_escape_string($_POST['email']):false;
				$valores= array('nombre'=>$nombre,'direccion'=>$direccion,'telefono'=>$telefono,'email'=>$email);*/
 				if($id!=""){
					$this->db->where("md5(identrenadores) ='$id'")->update('entrenadores',$post);
				}
				else if($this->db->insert('entrenadores',$post))
					header("Location: ".base_url());
				else
					die("Hubo un error al guardar");
		
				header("Location: ".base_url());
		/*	}


		}*/}

}