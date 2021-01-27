<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<script src="<?=base_url('assets/jquery-3.5.1.js');?>"></script>
	<script src="<?=base_url('assets/jquery-ui-1.12.1/jquery-ui.js');?>"></script>
	<link href="<?=base_url('assets/jquery-ui-themes-1.12.1/jquery-ui.css');?>">
</head>
<body>
<p><input type="text" id="date"></p>

</body>
	<script>
	$(document).ready(function(){
		$("#date").datepicker();

	})
	</script>
</html>
