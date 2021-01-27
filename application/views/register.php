<div class="container">

	<div class="card o-hidden border-0 shadow-lg my-5">
		<div class="card-body p-0">
			<!-- Nested Row within Card Body -->
			<div class="row">

				<div class="col-lg-7">
					<div class="p-5">
						<div class="text-center">
							<h1 class="h4 text-gray-900 mb-4">Registrasi Akun PSB</h1>
						</div>
						<form class="form-horizontal" action="<?php echo base_url() ?>index.php/pendaftaran/simpan_pendaftaran" method="post" enctype="multipart/form-data">

							<!-- Data Pribadi -->
							<div class="form-group form-group-sm row">
								<label class="col-sm-3 control-label text-dark">Nama</label>
								<div class="col-sm-6">
									<input class="form-control text-black-50" type="text" name="nama" placeholder="Nama Lengkap" required>
								</div>
							</div>
							<div class="form-group form-group-sm row">
								<label class="col-sm-3 control-label text-black-50">Tempat Lahir & Tgl lahir</label>
								<div class="col-sm-3">
									<input class="form-control text-black-50" type="text" name="tempat_lahir" required>
								</div>
								<div class="col-sm-3">
									<div class="form-group">
										<div class="input-group">
											<div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div>
											<input type="text" class="form-control datepicker" name="tanggal_lahir" placeholder="dd-mm-yyyy" data-date-format="dd-mm-yyyy"  required>
										</div>
									</div>
									<!-- <input type="text" class="form-control datepicker" name="tanggal_lahir" data-provide="datapicker" data-date-format="yyyy-mm-dd" required> -->
								</div>
							</div>
							<div class="form-group form-group-sm row">
								<label class="col-sm-3 control-label">Jenis Kelamin</label>
								<div class="col-sm-3">
									<input type="radio" name="kelamin" value="Laki-laki" checked> Laki-laki
									<input type="radio" name="kelamin" value="Perempuan"> Perempuan
								</div>
							</div>
							<div class="form-group form-group-sm row">
								<label class="col-sm-3 control-label">Agama</label>
								<div class="col-sm-3">
									<select name="agama" class="form-control" required>
										<option value="">-Pilih-</option>
										<option value="islam">Islam</option>
										<option value="kristen">Kristen</option>
										<option value="katolik">Katolik</option>
										<option value="hindu">Hindu</option>
										<option value="budha">Budha</option>
									</select>
								</div>
							</div>
							<div class="form-group form-group-sm row">
								<label class="col-sm-3 control-label">No. Telpon/ HP</label>
								<div class="col-sm-3">
									<input class="form-control" type="text" name="telpon" placeholder="Isi dengan angka" required>
								</div>
							</div>
							<hr>

							<!-- Data Asal Sekolah -->
							<div class="form-group form-group-sm row">
								<label class="col-sm-3 control-label" >Asal Sekolah</label>
								<div class="col-sm-6">
									<input class="form-control" type="text" name="sd_asal" placeholder="Nama SD" required>
								</div>
							</div>
							<div class="form-group form-group-sm row">
								<label class="col-sm-3 control-label" >Alamat SMP Asal</label>
								<div class="col-sm-6">
									<input class="form-control" type="text" name="alamat_smp" required>
								</div>
							</div>
							<div class="form-group form-group-sm row">
								<label class="col-sm-3 control-label" >Nilai UN (Total)</label>
								<div class="col-sm-2">
									<input class="form-control" type="text" name="un_total" placeholder="contoh : 87,54" required>
								</div>
							</div>
							<hr>

							<!-- Data Wali/Orang Tua -->
							<div class="form-group form-group-sm row">
								<label class="col-sm-3 control-label" >Nama Bapak</label>
								<div class="col-sm-6">
									<input class="form-control" type="text" name="nama_bpk" placeholder="Nama Bapak" required>
								</div>
							</div>
							<div class="form-group form-group-sm row">
								<label class="col-sm-3 control-label" >Pendidikan Terakhir Bapak</label>
								<div class="col-sm-3">
									<select name="pendidikan_bpk" class="form-control" required>
										<option name="pendidikan_bpk" value="">-Pilih-</option>
										<option name="pendidikan_bpk" value="SD">SD/Sederajat</option>
										<option name="pendidikan_bpk" value="SMP">SMP/Sederajat</option>
										<option name="pendidikan_bpk" value="SMA">SMA/Sederajat</option>
										<option name="pendidikan_bpk" value="Diploma">Diploma</option>
										<option name="pendidikan_bpk" value="S1">Sarjana/S1</option>
										<option name="pendidikan_bpk" value="S2">Magister/S2</option>
										<option name="pendidikan_bpk" value="S3">Doktor/S3</option>
										<option name="pendidikan_bpk" value="Lainnya">Lainnya</option>
									</select>
								</div>
							</div>
							<div class="form-group form-group-sm row">
								<label class="col-sm-3 control-label" >Pekerjaan</label>
								<div class="col-sm-6">
									<input class="form-control" type="text" name="pekerjaan_bpk" placeholder="Pekerjaan Bapak" required>
								</div>
							</div>
							<div class="form-group form-group-sm row">
								<label class="col-sm-3 control-label" >Penghasilan/Bulan</label>
								<div class="col-sm-3">
									<select name="penghasilan_bpk" class="form-control" required>
										<option name="penghasilan_bpk" value="">-Pilih-</option>
										<option name="penghasilan_bpk" value="< 1 juta">< 1 Juta Rupiah</option>
										<option name="penghasilan_bpk" value="1-3 Juta">Rp 1-3 Juta Rupiah</option>
										<option name="penghasilan_bpk" value="3-5 Juta" >Rp 3-5 Juta Rupiah</option>
										<option name="penghasilan_bpk" value="> 5 Juta">> Rp 5 Juta Rupiah</option>
									</select>
								</div>
							</div>
							<div class="form-group form-group-sm row">
								<label class="col-sm-3 control-label" >Nama Ibu</label>
								<div class="col-sm-6">
									<input class="form-control" type="text" name="nama_ibu" placeholder="Nama Ibu" required>
								</div>
							</div>
							<div class="form-group form-group-sm row">
								<label class="col-sm-3 control-label" >Pendidikan Terakhir Ibu</label>
								<div class="col-sm-3">
									<select name="pendidikan_ibu" class="form-control" required>
										<option name="pendidikan_ibu" value="">-Pilih-</option>
										<option name="pendidikan_ibu" value="SD">SD/Sederajat</option>
										<option name="pendidikan_ibu" value="SMP">SMP/Sederajat</option>
										<option name="pendidikan_ibu" value="SMA">SMA/Sederajat</option>
										<option name="pendidikan_ibu" value="Diploma">Diploma</option>
										<option name="pendidikan_ibu" value="S1">Sarjana/S1</option>
										<option name="pendidikan_ibu" value="S2">Magister/S2</option>
										<option name="pendidikan_ibu" value="S3">Doktor/S3</option>
										<option name="pendidikan_ibu" value="Lainnya">Lainnya</option>
									</select>
								</div>
							</div>
							<div class="form-group form-group-sm row">
								<label class="col-sm-3 control-label" >Pekerjaan</label>
								<div class="col-sm-6">
									<input class="form-control" type="text" name="pekerjaan_ibu" placeholder="Pekerjaan Ibu" required>
								</div>
							</div>
							<div class="form-group form-group-sm row">
								<label class="col-sm-3 control-label" >Penghasilan</label>
								<div class="col-sm-3">
									<select name="penghasilan_ibu" class="form-control" required>
										<option name="penghasilan_ibu" value="">-Pilih-</option>
										<option name="penghasilan_ibu" value="< 1 juta">< 1 Juta Rupiah</option>
										<option name="penghasilan_ibu" value="1-3 Juta">Rp 1-3 Juta Rupiah</option>
										<option name="penghasilan_ibu" value="3-5 Juta" >Rp 3-5 Juta Rupiah</option>
										<option name="penghasilan_ibu" value="> 5 Juta">> Rp 5 Juta Rupiah</option>
									</select>
								</div>
							</div>
							<hr>
							<div class="form-group form-group-sm row">
								<label class="col-sm-3 control-label">Passfoto (maks ukuran 100Kb)</label>
								<div class="col-sm-6">
									<input type="file" name="foto">
								</div>
							</div>
							<hr>
							<div class="form-group form-group-sm row">
								<label class="col-sm-3 control-label"><span class="text-success">Masukkan email</span></label>
								<div class="col-sm-4">
									<input class="form-control" type="email" name="email" placeholder="contoh : emailsaya@gmail.com" required>
								</div>

							</div>
							<div class="form-group form-group-sm row">
								<label class="col-sm-3 control-label"><span class="text-success">Masukkan Password</span></label>
								<div class="col-sm-4">
									<input class="form-control" type="text" name="password" placeholder="password digunakan untuk login" required>
								</div>

							</div>
							<hr>
							<div class="form-group form-group-sm row">
								<div class="col-sm-12 text-center">
									<div class="checkbox">
										<input type="checkbox" required>Dengan ini saya menyatakan bahwa data yang saya inputkan adalah benar
									</div>
								</div>
							</div>
							<div class="form-group form-group-sm row">
								<div class="col-sm-12 text-center"><button type="submit" class="btn btn-sm btn-success">Simpan Data</button> <button type="reset" class="btn btn-sm btn-default">Reset</button></div>
							</div>
						</form>
						<hr>
						<div class="text-center">
							<a class="small" href="forgot-password.html">Forgot Password?</a>
						</div>
						<div class="text-center">
							<a class="small" href="login.html">Already have an account? Login!</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
