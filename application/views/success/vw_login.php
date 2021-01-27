<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="card">
		<div class="card-header">
			Form Login
		</div>
		<div class="card-body">
			<?php
			if ($this->session->flashdata('error') !=''){
				echo '<div class="alert alert-danger" role="alert">';
				echo $this->session->flashdata('error');
				echo '<div/>';
			}
			?>
			<form method="post" action="<?php echo base_url();?>success/login/proses">
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" class="form-control" name="username" id="username" placeholder="Masukan email">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" name="password" id="password" placeholder="Password">
				</div>
				<button type="submit" class="btn btn-primary">Login</button>
			</form>
		</div>
	</div>
</div>


</body>
</html>
