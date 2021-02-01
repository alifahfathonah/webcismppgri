<!-- Page Wrapper -->
<div id="wrapper">
	<!-- Content Wrapper -->
	<div id="content-wrapper" class="d-flex flex-column">

		<!-- Main Content -->
		<div id="content">
			<!-- Begin Page Content -->
			<div class="container-fluid" style="font-size:14px;">
				<!-- Content Row -->
				<div class="row">
					<div class="col-xl-12 col-md-6 mb-4">
						<div class="card border-left-primary shadow h-100 py-2">
							<div class="card-body">
								<!-- Page Heading -->
								<!--membaca session msg-->
								<div class="d-sm-flex align-items-center justify-content-between mb-4">
									<h1 class="h3 mb-0 text-gray-800">Biodata Diri Penerimaan Siswa Baru SMP PGRI 32 Jakarta Pusat </h1>
								</div>
								<?php echo  form_open_multipart('User/register_action'); ?>
								<!-- CSRF token (Here, name is 'csrf_hash_name' which is specified in $config['csrf_token_name'] in cofig.php file ) -->
								<!-- <input type="text" class="txt_csrfname" name="csrf_test_name" value="3e2aeca080531235b37e72764a990988" hidden><br> -->
								<div class="row no-gutters">
									<div class="col-lg-6" style="padding-right:8px;">
										<!--                            <div class="col-lg-6" style="padding-right:8px;border-right:1px solid #C8C7C7;">-->
										<div class="form-group">
											<div class="row">
												<div class="col-lg-4">
													<label class="text-gray-900">Nama Lengkap</label>
													<font color="red">*</font>
												</div>
												<div class="col-lg-8">
													<input type="text" name="nama_lengkap" class="form-control form-control-sm" required>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-lg-4">
													<label class="text-gray-900">Tanggal Lahir</label>
													<font color="red">*</font>
												</div>
												<div class="col-lg-8">
													<div class="text-gray-900 input-group date">
														<input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control form-control-sm" placeholder="Tanggal Lahir" required>
													</div>

													<!--
													<i class="fa fa-calendar" aria-hidden="true">
														<input type="text" name="tgl_lahir" id="tgl_lahir" class="form-control form-control-sm" required></i>
		-->
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-lg-4">
													<label class="text-gray-900">Tempat Lahir</label>
													<font color="red">*</font>
												</div>
												<div class="col-lg-8">
													<input type="text" name="tempat_lahir" class="form-control form-control-sm" required>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-lg-4">
													<label class="text-gray-900">Jenis Kelamin</label>
													<font color="red">*</font>
												</div>
												<div class="col-lg-8">
													<select name="id_jenis_kelamin" class="form-control form-control-sm" required>
														<option value="">-- Silahkan pilih --</option>
														<option value="Laki-laki">Laki-laki</option>
														<option value="Perempuan">Perempuan</option>
													</select>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-lg-4">
													<label class="text-gray-900">Agama</label>
													<font color="red">*</font>
												</div>
												<div class="col-lg-8">
													<select name="id_agama" class="form-control form-control-sm" required>
														<option value="">-- Silahkan pilih --</option>
														<option value="Islam">ISLAM</option>
														<option value="Kristen">KRISTEN</option>
														<option value="Hindu">HINDU</option>
														<option value="Budha">BUDHA</option>
														<option value="Konghucu">KONGHUCU</option>
														<option value="Katolik">KATOLIK</option>
													</select>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-lg-4">
													<label class="text-gray-900">Alamat</label>
													<font color="red">*</font>
												</div>
												<div class="col-lg-8">
													<textarea type="text" name="alamat" class="form-control noresize form-control-sm" rows="6" required></textarea>
												</div>
											</div>
										</div>

										<!--											<div class ="col-lg-6" style="padding-left:8px;">-->
										<div class="form-group">
											<div class="row">
												<div class="col-lg-4">
													<label class="text-gray-900">Nama Ibu Kandung</label>
													<font color="red">*</font>
												</div>
												<div class="col-lg-8">
													<input type="text" name="namaibukan" id="usia" class="form-control form-control-sm">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-lg-4">
													<label class="text-gray-900">Nama Ayah Kandung</label>
													<font color="red">*</font>
												</div>
												<div class="col-lg-8">
													<input type="text" name="namaayahkan" id="usia" class="form-control form-control-sm">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-lg-4">
													<label class="text-gray-900">Pekerjaan Ibu</label>
													<font color="red">*</font>
												</div>
												<div class="col-lg-8">
													<input type="text" name="pekerjaanibu" class="form-control form-control-sm" required>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-lg-4">
													<label class="text-gray-900">Pekerjaan Ayah</label>
													<font color="red">*</font>
												</div>
												<div class="col-lg-8">
													<input type="text" name="pekerjaanayah" class="form-control form-control-sm" required>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-lg-4">
													<label class="text-gray-900">Penghasilan Ayah</label>
													<font color="red">*</font>
												</div>
												<div class="col-lg-8">
													<select name="penghasilanayah" class="form-control form-control-sm" required>
														<option value="">-- Silahkan pilih --</option>
														<option value="500000">
															< Rp.500.000</option>
														<option value="1000000">Rp.500.000 - Rp.1000.000</option>
													</select>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-lg-4">
													<label class="text-gray-900">Penghasilan Ibu</label>
													<font color="red">*</font>
												</div>
												<div class="col-lg-8">
													<select name="penghasilanibu" class="form-control form-control-sm" required>
														<option value="">-- Silahkan pilih --</option>
														<option value="500000">
															< Rp.500.000</option>
														<option value="1000000"> Rp.500.000 - Rp.1000.000</option>
													</select>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-lg-4">
													<label class="text-gray-900">Nama SD dan Alamat SD</label>
													<font color="red">*</font>
												</div>
												<div class="col-lg-8">
													<textarea type="text" name="alamatsd" class="form-control noresize form-control-sm" rows="6" required></textarea>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-lg-4">
													<label class="text-gray-900">UN Total</label>
													<font color="red">*</font>
												</div>
												<div class="col-lg-8">
													<input type="number" name="untotal" class="form-control form-control-sm" required>
												</div>
											</div>
										</div>
										<div class="form-group" enctype="multipart/form">
											<div class="row">
												<div class="col-lg-4">
													<label class="text-gray-900">Upload Photo</label>
													<font color="red">*</font>
												</div>
												<div class="col-lg-8">
													<input type="file" name="foto" required>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12 text-right">
												<button id="submit" class="btn btn-primary btn-sm">Simpan & Lanjutkan</button>
											</div>
										</div>
									</div>
								</div>
								<?php echo form_close(); ?>