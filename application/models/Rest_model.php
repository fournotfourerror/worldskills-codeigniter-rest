<?php
class Rest_model extends CI_Model{
	function get_data(){
		return $this->db->get('users');
	}
}
?>