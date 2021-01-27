<div class="container justify-content-center">
	<div class="col-sm-4 col-sm-offset-4 login">
<!--	<div class="d-flex justify-content-center">-->
		<div class="col-sm-10 offset-sm-1 text-center">
			<img src="<?php echo base_url() ?>assets/images/logoadmin.png" alt="logo admin">
		</div>
<!--		<div class="text-center">-->
<!--			--><?php //echo $this->session->flashdata('status_login'); ?>
<!--		</div>-->
		<h4><span class="glyphicon glyphicon-log-in"></span> Login Administrator</h4>
<!--		--><?php //echo form_open('admin/login'); ?>
		<div class="form-group">
			<div class="input-group">
				<div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
				<input type="text" class="form-control" name="useradmin" placeholder="username">
			</div>
		</div>
		<div class="form-group">
			<div class="input-group">
				<div class="input-group-addon"><span class="glyphicon glyphicon-cog"></span></div>
				<input type="password" class="form-control" name="passadmin" placeholder="password">
			</div>
		</div>
		<div class="form-group">
			<input type="checkbox"> Remember
		</div>
		<button type="submit" class="btn btn-block btn-success" name="submit"><span class="glyphicon"></span> Login</button>
		<?php echo form_close(); ?>
	</div>
</div>
