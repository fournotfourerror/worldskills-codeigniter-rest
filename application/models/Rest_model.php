<?php
class Rest_model extends CI_Model{
	function get_data(){
		return $this->db->get('users');
	}

	function insert_model($data){
		$this->db->insert('users',$data);
	}
}
?>