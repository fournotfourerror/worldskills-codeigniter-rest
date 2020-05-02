<!DOCTYPE html>
<html>
<head>
	<title> </title>
	<link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>" />

	<script src="<?php echo base_url('bootstrap/js/jquery.js'); ?>"> </script>
</head>
<body>
	<div class="row" style="justify-content:center">
		<div class="col-md-6 col-lg-4 col-sm-12">
			<div class="table-responsive">
				<table class="table table-hover">
					<thead class="table-secondary"> 
						<tr> 
							<th> Name </th>
							<th> Email </th>
							<th> Mobile </th>
						</tr>
					</thead>

					<tbody>

					</tbody>
				</table>
			</div> 
		</div>
	</div>
</body>
</html>
<script>
	$(document).ready(()=>{
		function get_info(){
			$.ajax({
				url:"<?php echo base_url();?>rest/retrieve",
				method:"POST",
				data:{request:'getData'},
				success:(data)=>{
					$('tbody').html(data)
				}
			})
		}

		get_info();
	})
</script>