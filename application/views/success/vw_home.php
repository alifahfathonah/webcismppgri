<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
<div class = "container">
	<div class ="card-header">
		Home Akun
	</div>
	<div class="card-body">
		<center><h1>Selamat datang <?php echo $this->session->userdata('user_email');?></h1></center>
		<hr/>
		<a href="<?php echo base_url();?>success/login/logout" class="btn btn-primary btn-lg btn-block">
			Logout
		</a>
	</div>
</div>

</body>
</html>
