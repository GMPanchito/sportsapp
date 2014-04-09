<?php	
	class Top10beis_model extends CI_Model{
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}
		
		public function consultar(){
			$this->db->get_where('mytable', array('hits' > 1));
			return $result;
		}
		
	}