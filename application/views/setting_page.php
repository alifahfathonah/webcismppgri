<div class="container col-sm-6 col-md-offset-3">
	<div class="input">
		<form class="form-horizontal" action="<?php echo base_url() ?>index.php/admin/do_setting" method="post">
			<div class="form-group form-group-sm row text-center">
<!--				<button class="pull-right btn btn-danger btn-xs" style="margin-right: 15px; border-radius: 10px;"><span class="glyphicon glyphicon-remove"></span></button>-->
				<h4 class="col-sm-4">Rubah Pengaturan PSB Online</h4>
			</div>
			<div class="form-group form-group-sm row">
				<label class="col-sm-4 control-label">Tanggal Pendaftaran :</label>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="tgl_pendaftaran" placeholder="" class="datepicker" data-provide="datepicker" data-date-format="yyyy-mm-dd" placeholder="contoh : 21/01/2017" required>
				</div>
			</div>
			<div class="form-group form-group-sm row">
				<label class="col-sm-4 control-label">Telpon Sekolah/Operator :</label>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="tlp_pendaftaran" placeholder="No. Telpon Sekolah / Operator" required>
				</div>
			</div><br>
			<div class="form-group form-group-sm row">
				<div class="col-sm-6 col-sm-offset-4">
<!--					<button type="submit" class="btn btn-default btn-sm">Simpan Pengaturan <span class="glyphicon glyphicon-floppy-disk"> </span></button>-->
					<button type="submit" class="btn btn-primary">Simpan Pengaturan</button>
				</div>
			</div>
		</form>
	</div>
</div>
