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

	function insert(){
		$data=array(
			'name'=>$this->input->post('name'),
			'email'=>$this->input->post('email'),
			'mobile'=>$this->input->post('mobile')
		);

		$this->rest_model->insert_model($data);
		$success_message=array(
			'result'=> '1'
		);

		echo json_encode($success_message);

	}
}
?>