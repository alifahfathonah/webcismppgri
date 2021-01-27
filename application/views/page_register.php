<!-- Page Wrapper -->
<div id="wrapper">
	<!-- Content Wrapper -->
	<div id="content-wrapper" class="d-flex flex-column">

		<!-- Main Content -->
		<div id="content">

			<!-- Topbar -->
			<nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow">

				<!-- Sidebar Toggle (Topbar) -->
				<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
					<i class="fa fa-bars"></i>
				</button>
				<!--            <h3><b>Rekrutmen PT ASDP Indonesia Ferry (Persero)</b></h3>-->

				<!--            </ul>-->

				<!-- Topbar Navbar -->
				<ul class="navbar-nav ml-auto">

					<!-- Nav Item - User Information -->
					<li class="nav-item dropdown no-arrow">
						<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<!--
											<span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
											<img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
							-->
						</a>
						<!-- Dropdown - User Information -->
						<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
							<!--
											<a class="dropdown-item" href="#">
											  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
											  Profile
											</a>
											<a class="dropdown-item" href="#">
											  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
											  Settings
											</a>
											<a class="dropdown-item" href="#">
											  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
											  Activity Log
											</a>
							-->
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
								<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
								Logout
							</a>
						</div>
					</li>

				</ul>

			</nav>
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
									<h1 class="h3 mb-0 text-gray-800">Biodata Diri</h1>
								</div>
								<form id="form_biodata">
									<!-- CSRF token (Here, name is 'csrf_hash_name' which is specified in $config['csrf_token_name'] in cofig.php file ) -->
									<input type="text" class="txt_csrfname" name="csrf_test_name" value="3e2aeca080531235b37e72764a990988" hidden><br>
									<div class="row no-gutters">
										<div class="col-lg-6" style="padding-right:8px;">
											<!--                            <div class="col-lg-6" style="padding-right:8px;border-right:1px solid #C8C7C7;">-->
											<div class="form-group">
												<div class="row">
													<div class="col-lg-4">
														<label>NO. KTP</label>
														<font color="red">*</font>
													</div>
													<div class="col-lg-8">
														<input type="text" name="nik" class="form-control form-control-sm" disabled>
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row">
													<div class="col-lg-4">
														<label>Nama Lengkap</label>
														<font color="red">*</font>
													</div>
													<div class="col-lg-8">
														<input type="text" name="nama_lengkap" class="form-control form-control-sm" autofill="off" autocomplete="off" required>
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row">
													<div class="col-lg-4">
														<label>Jenis Kelamin</label>
														<font color="red">*</font>
													</div>
													<div class="col-lg-8">
														<select name="id_jenis_kelamin" class="form-control form-control-sm" required>
															<option value="">-- Silahkan pilih --</option>
															<option value="1">Laki-laki</option>
															<option value="2">Perempuan</option>
														</select>
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row">
													<div class="col-lg-4">
														<label>Agama</label>
														<font color="red">*</font>
													</div>
													<div class="col-lg-8">
														<select name="id_agama" class="form-control form-control-sm" required>
															<option value="">-- Silahkan pilih --</option>
															<option value="1">ISLAM</option>
															<option value="2">KRISTEN</option>
															<option value="3">HINDU</option>
															<option value="4">BUDHA</option>
															<option value="5">KONGHUCU</option>
															<option value="6">KATOLIK</option>
														</select>
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row">
													<div class="col-lg-4">
														<label>Tempat Lahir</label>
														<font color="red">*</font>
													</div>
													<div class="col-lg-8">
														<input type="text" name="tempat_lahir" class="form-control form-control-sm" autofill="off" autocomplete="off" required>
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row">
													<div class="col-lg-4">
														<label>Tanggal Lahir</label>
														<font color="red">*</font>
													</div>
													<div class="col-lg-8">

														<div class="input-group date">
															<input type="text" name="tgl_lahir" id="tgl_lahir" class="form-control form-control-sm" placeholder="Tanggal Lahir" autofill="off" autocomplete="off" required>
															<div class="input-group-prepend">
																<span class="input-group-text"><i class="fas fa-calendar"></i></span>
															</div>
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
														<label>Usia (Th.)</label>
														<font color="red">*</font>
													</div>
													<div class="col-lg-8">
														<input type="text" name="usia" id="usia" class="form-control form-control-sm" readonly>
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row">
													<div class="col-lg-4">
														<label>Status Pernikahan</label>
														<font color="red">*</font>
													</div>
													<div class="col-lg-8">
														<select name="id_status_pernikahan" class="form-control form-control-sm" onchange="cekStatusPernikahan(this.value)" required>
															<option value="">-- Silahkan pilih --</option>
															<option value="1">Belum Menikah</option>
															<option value="2">Sudah Menikah</option>
															<option value="5">Duda</option>
															<option value="6">Janda</option>
														</select>
													</div>
												</div>
											</div>
											<div class="form-group" id="jml_anak">
												<div class="row">
													<div class="col-lg-4">
														<label>Jumlah Anak</label>
														<font color="red">*</font>
													</div>
													<div class="col-lg-8">
														<input type="text" name="jml_anak" class="form-control form-control-sm" autofill="off" autocomplete="off">
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row">
													<div class="col-lg-4">
														<label>Kewarganegaraan</label>
														<font color="red">*</font>
													</div>
													<div class="col-lg-8">
														<input type="text" name="kewarganegaraan" class="form-control form-control-sm" autofill="off" autocomplete="off" required>
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row">
													<div class="col-lg-4">
														<label>Nomor HP / Telepon</label>
														<font color="red">*</font>
													</div>
													<div class="col-lg-8">
														<input type="text" name="no_hp" class="no_hp form-control form-control-sm" autofill="off" autocomplete="off" required>
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row">
													<div class="col-lg-4">
														<label>Dapat Mulai Bekerja <p style="font-size:10px">(Sejak Pengumuman Kelolosan)</p></label>
														<font color="red">*</font>
													</div>
													<div class="col-lg-8">
														<select name="id_wdb" class="form-control form-control-sm" required>
															<option value="">-- Silahkan pilih --</option>
															<option value="1">Secepatnya</option>
															<option value="2">Kurang dari seminggu</option>
															<option value="3">Kurang dari sebulan</option>
															<option value="4">Kurang dari 3 bulan</option>
														</select>
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row">
													<div class="col-lg-4">
														<label>Tujuan Karir</label>
														<font color="red">*</font>
													</div>
													<div class="col-lg-8">
														<textarea type="text" name="tujuan_karir" class="form-control noresize form-control-sm" rows="6" required></textarea>
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row">
													<div class="col-lg-4">
														<label>Ekspresikan dirimu dalam 5 kata<font color="red">*</font></label>
													</div>
													<div class="col-lg-8">
														<textarea type="text" name="ekspresi_diri" class="form-control noresize form-control-sm" rows="6" required></textarea>
													</div>
												</div>
											</div>
										</div>

										<div class="col-lg-6" style="padding-left:8px;">
											<div class="form-group">
												<div class="row">
													<div class="col-lg-4">
														<label>Gaji yang diharapkan<p style="font-size:10px;">(diisi dengan angka saja tanpa karakter simbol dan huruf)<font color="red">*</font>
															</p></label>
													</div>
													<div class="col-lg-8">
														<input type="text" name="req_gaji" class="gaji form-control form-control-sm" autofill="off" autocomplete="off" required>
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row">
													<div class="col-lg-4">
														<label>Hobi</label>
														<font color="red">*</font>
													</div>
													<div class="col-lg-8">
														<input type="text" name="hobi" class="form-control form-control-sm" autofill="off" autocomplete="off" required>
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row">
													<div class="col-lg-4">
														<label>Alamat Sesuai KTP</label>
														<font color="red">*</font>
													</div>
													<div class="col-lg-8">
														<textarea type="text" name="alamat_ktp" class="form-control noresize form-control-sm" rows="6" required></textarea>
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row">
													<div class="col-lg-4">
														<label>Kota Sesuai KTP</label>
														<font color="red">*</font>
													</div>
													<div class="col-lg-8">
														<input type="text" name="kota_ktp" class="form-control form-control-sm" autofill="off" autocomplete="off" required>
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row">
													<div class="col-lg-4">
														<label>Kode Pos Sesuai KTP</label>
														<font color="red">*</font>
													</div>
													<div class="col-lg-8">
														<input type="text" name="kode_pos_ktp" class="kode_pos_ktp form-control form-control-sm" autofill="off" autocomplete="off" required>
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row">
													<div class="col-lg-4">
														<label>Alamat Sesuai Domisili</label>
														<font color="red">*</font>
													</div>
													<div class="col-lg-8">
														<textarea type="text" name="alamat_domisili" class="form-control noresize form-control-sm" rows="6" required></textarea> </div>
												</div>
											</div>
											<div class="form-group">
												<div class="row">
													<div class="col-lg-4">
														<label>Kota Sesuai Domisili</label>
														<font color="red">*</font>
													</div>
													<div class="col-lg-8">
														<input type="text" name="kota_domisili" class="form-control form-control-sm" autofill="off" autocomplete="off" required>
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row">
													<div class="col-lg-4">
														<label>Kode Pos Sesuai Domisili <font color="red">*</font></label>

													</div>
													<div class="col-lg-8">
														<input type="text" name="kode_pos_domisili" class="kode_pos_domisili form-control form-control-sm" autofill="off" autocomplete="off" required>
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row">
													<div class="col-lg-4">
														<label>Bersedia Ditempatkan Diseluruh Indonesia <font color="red">*</font></label>
													</div>
													<div class="col-lg-8">
														<select name="perjanjian_penempatan" class="form-control form-control-sm" required>
															<option value="">-- Silahkan pilih --</option>
															<option value="1">YA</option>
															<option value="0">TIDAK</option>
														</select>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-12 text-right">
													<p id="captImg"><img  src="https://rekrutmenasdp.indonesiaferry.co.id/captcha_images/1611547288.5209.jpg" style="width: 150; height: 38; border: 0;" alt=" " /></p>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-8"></div>
												<div class="col-lg-4">
													<input type="text" class="captcha form-control form-control-sm" name="captcha" placeholder="Kode Unik" autofill="off" autocomplete="off" required />
												</div>
											</div>
											<br>
											<div class="row">
												<div class="col-lg-12 text-right">
													<button id="submit" class="btn btn-primary btn-sm">Simpan & Lanjutkan</button>
												</div>
											</div>
										</div>
									</div>
								</form>
