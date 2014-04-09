<?php 

class Usuarios_modelos extends CI_Model{

   public function __construct(){
      parent::__construct();
		$this->load->database();
   }
   
     public function user_exist($user,$pass){
		$exist=$this->db->where("md5(usuario)='$user'")->where('contrasenia',$pass)->get("usuarios");
		 #echo $this->db->last_query();
		 if($exist->num_rows())
			return $exist->row();
		 else
		   return false;
	 
	 }

}