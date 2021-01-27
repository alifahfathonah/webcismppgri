<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>CodeIgniter Login</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
</head>

<body>
<div class="container">
	<h1 class="page-header text-center">CodeIgniter Login with Session</h1>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<?php
			$user = $this->session->userdata('user');
			extract(array($user));
			?>
			<a href="<?php echo base_url(); ?>user/logout" class="btn btn-danger">Logout</a>
		</div>
	</div>
</div>
</body>

</html>
