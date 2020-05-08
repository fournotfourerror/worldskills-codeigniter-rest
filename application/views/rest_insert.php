<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title> Inserting data </title>
	<link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>" />

	<script src="<?php echo base_url('bootstrap/js/jquery.js'); ?>"> </script>
</head>
<body>
<div class="row" style="justify-content:center">
	<div class="col-md-4 col-lg-4 col-sm-12">
		<div class="card" style="margin-top:3%">
			<div class="card-header bg-primary text-center text-white">
				Inserting data
			</div>
			<div class="card-body"> 
				<form method="post" action="">
					<input type="text" name="name" class="form-control" placeholder="Name" id="name"> <br>

					<input type="email" name="email" class="form-control" placeholder="E-mail" id="email"> <br>

					<input type="text" name="mobile" class="form-control" placeholder="Mobile" id="mobile"> <br>

					<button id="insert" class="btn btn-primary"> Insert </button>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>

<script>
	$(document).ready(()=>{
		$("#insert").click((e)=>{
			e.preventDefault();
			var name=$("#name").val();
			var email=$("#email").val();
			var mobile=$("#mobile").val();

			$.ajax({
				url:"<?php echo base_url().'rest/retrieve' ?>",
				method:"POST",
				data:{request:'insert',name:name,email:email,mobile:mobile},
				datatype:"json",
				success:(data)=>{
					console.log(data[result]);
				}
			})
		})
	})
</script>