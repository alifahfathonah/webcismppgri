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
Welcome <?php echo $this->session->userdata('name');?>
<br>
<a href ='<?php echo base_url();?>sessionex/unset_session_data'>
	Klik disini
</a> to unset session data.

</body>
</html>
