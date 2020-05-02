<?php
class Data extends CI_Controller{
	public function __construct(){
		parent::__construct();
			$this->load->model('rest_model');
	}

	function index(){
		$info=$this->rest_model->get_data();
		echo json_encode($info->result_array());
		// $info->result());
	}
}
?>