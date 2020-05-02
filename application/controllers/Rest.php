<?php
class Rest extends CI_Controller {
	function index(){
		$this->load->view('rest_view');
	}

	function retrieve(){
		if($this->input->post('request')){
			if($this->input->post('request')=='getData'){
			$url="http://localhost/rest/data";
			$source=curl_init($url);
			curl_setopt($source, CURLOPT_RETURNTRANSFER, true);
			$response=curl_exec($source);

			curl_close($source);

			$result=json_decode($response);

			$op="";

			print_r($result);
			foreach($result as $row){
				$op.='<tr>
				<td>'.$row->name.'</td> 
				<td>'.$row->email.'</td>
				<td>'.$row->mobile.'</td>
				</tr>';
			}

			echo $op;
		}
	}
	}
}
?>