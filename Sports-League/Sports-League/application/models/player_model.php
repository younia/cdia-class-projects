<?php 

class Player_model extends CI_Model {
	function __construct(){
		parent::__construct();	
	}
	
	function get_by_team($id){
		
		$query = $this->db->get_where('player', array('team_id' => $id));
		return $query->result();
	}
	
	function get_by_id($id){
		$query = $this->db->get_where('player', array('id' => $id));
		return $query->row();
	}
}


?>