<body>
	<div class="jumbotron header-cBelum Daftar Akun PSB Siswa? Klik Disiniontent" style="background-color: green;">
		<div class="text-center logo">
			<img src="<?php echo base_url() ?>assets/img/logopgrismpmini.png" style="max-width: 250px;"><br />
		</div>
		<div class="container text-center">
			<p>SISTEM PENERIMAAN SISWA BARU ONLINE</p>
		</div>
	</div>

	<!-- Kotent Informasi -->
	<div class="container">
		<div class="col-sm-8 informasi">
			<div class="row">
				<div class="col-xs-12">
					<h4><u>Informasi</u></h4>
					<ul>
						<?php foreach ($data->result() as $key) { ?>
							<!-- <li>Pendaftaran siswa baru dimulai pada tanggal : <?php echo date('d-m-Y', strtotime($key->tgl_pendaftaran)); ?></li> -->
							<li>Bantuan pendaftaran informasi siswa baru SMP PGRI 32 hubungi nomor berikut:<br><br>
								<ol>
									<li><span class="glyphicon glyphicon-phone-alt"></span> <?php echo $key->tlp_operator; ?></li>
									<li><span class="glyphicon glyphicon-phone"></span> <?php echo "087883388854 (M.Fauzi)" ?> </span></li>
									<li><span class="glyphicon glyphicon-phone"></span> <?php echo "081293148818 (Halimatus Saidah)" ?> </span></li>
								</ol>
							<?php } ?>
					</ul>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-xs-12">
					<h4><u>Prosedur/Tata Cara Mendaftar</u></h4>
					<ol>
						<li>Buka Laman PSB Online SMP 32 PGRI Jakarta Pusat </li>
						<li>Isikan data pada formulir registrasi pada laman pendaftaran, tatutan berikut <a href="http://localhost/cismppgri/tes/pendaftarantes">http://localhost/cismppgri/tes/pendaftarantes</a></li>
						<li>Login pada laman PSB online dengan password yang telah diisikan pada lama pendaftaran</li>
						<li>Cetak hasil pendaftaran siswa baru</li>
					</ol>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-xs-12">
					<h4><u>Bantuan Teknis Pendaftaran Siswa</u></h4>
					<ul>
						<li>Untuk Login silahkan masukkan <strong>email & password</strong> yang diinput pada <strong>form pendaftaran</strong></li>
						<li>Jika kamu lupa password silahkan klik <a href="<?php echo base_url() ?>index.php/user/lupa_password">disini</a></li>
					</ul>
				</div>
			</div>
		</div>

		<!-- Form Login -->
		<h3>Login Siswa</h3>
		<div class="col-sm-4 login">
			<!--		--><?php
							//		$pesan_sukses = $this->session->flashdata('sukses_msg');
							//		$failmsg = $this->session->flashdata('fail_msg');
							//		if($pesan_sukses){
							//			
							?>
			<!--			<div class="alert-success">-->
			<!--				--><?php //echo $pesan_sukses;
									?>
			<!--			</div>-->
			<!--			--><?php
								//		}else if($failmsg){
								?>
			<!--			<div class="alert-danger">-->
			<!--				--><?php //echo $failmsg;
									?>
			<!---->
			<!--			</div>-->
			<!--			--><?php
								//
								//		}
								//		
								?>
			<!--		--><?php //echo $this->session->flashdata('periksa'); 
							?>
			<!--		--><?php //echo $this->session->flashdata('status_login'); 
							?>
			<div class="text-center logo">
				<img src="<?php echo base_url() ?>assets/images/logologinuser" style="max-width: 250px;"><br />
			</div>
			<!--		Form Login User-->
			<form role="form" method="post" action="<?php echo base_url('giatngoding/login/aksi_login'); ?>">

				<div class="form-group">
					<input class="form-control" placeholder="Please enter E-mail" name="username" type="email" autofocus required="">
				</div>
				<div class="form-group">
					<input class="form-control" placeholder="Enter Password" name="password" type="password" value="" required>
				</div>
				<div class="form-group">
					<a href="<?php base_url() ?>lupa_password_page" data-toggle="tooltip" data-placement="right" title="Silahkan isikan data pada form pendaftaran">Lupa Password klik disini</a><br>
				</div>
				<div class="form-group">
					<a href="<?php base_url() ?>Auth/register_akun" data-toggle="tooltip" data-placement="right" title="Silahkan isikan data pada form pendaftaran">Belum Daftar Akun PSB Siswa? Klik Disini</a><br>
				</div>

				<button class="btn btn-lg btn-success btn-block" type="submit" value="Register" name="login">Login</button>

				</fieldset>
			</form>
		</div>
		<div class="b-panduan">
			<button class="btn btn-link btn-xs btn-default">Panduan</button>
		</div>
	</div>