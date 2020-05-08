<?php
class Rest extends CI_Controller {
	function index(){
		$this->load->view('rest_view');
	}

	function retrieve(){
		if($this->input->post('request')){

			if($this->input->post('request')=='insert'){
				$url="http://localhost/rest/data/insert";
				// echo $this->input->post('mobile');
				$data=array(
					'name'=>$this->input->post('name'),
					'email'=>$this->input->post('email'),
					'mobile'=>$this->input->post('mobile')
				);

				$source=curl_init($url);
				curl_setopt($source,CURLOPT_POST, true);
				curl_setopt($source, CURLOPT_POSTFIELDS, $data);
				curl_setopt($source, CURLOPT_RETURNTRANSFER, true);
				$response=curl_exec($source);
				curl_close($source);
				// $result=json_decode($response);
				// $op="";
				// foreach($result as $info){
				// 	$op.="<h2>".$info->result."</h2>";
				// }

				// echo $op;
				print_r(json_decode($response));

			}


			else if($this->input->post('request')=='getData'){
			$url="http://localhost/rest/data";
			$source=curl_init($url);
			curl_setopt($source, CURLOPT_RETURNTRANSFER, true);
			$response=curl_exec($source);

			curl_close($source);

			$result=json_decode($response);

			$op="";

			// print_r($result);
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

	function insertData(){
		$this->load->view('rest_insert');
	}
}
?>