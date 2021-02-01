<div class="container h-100 ">
	<div class="row h-100 justify-content-center align-items-center">
		<div class="col-10 col-md-8 col-lg-6">
			<div class="login-panel panel panel-success">
				<div class="panel-heading">
					<h3 class="panel-title p-5">Login Admin</h3>
				</div>
				<div class="panel-body">
					<form action="<?php echo base_url()?>index.php/Admin/login" method="post">
						<fieldset>
							<div class = "form-group">
								<input type="text" class="form-control" name="useradmin" placeholder="Enter email">
							</div>
							<div class = "form-group">
								<input type="password" class="form-control" name="passadmin" placeholder="Enter password">
							</div>
							<input class="btn btn-lg btn-success btn-block" type="submit" value="login">

						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
