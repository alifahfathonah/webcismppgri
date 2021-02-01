<!--Ini Page templates/dashboard/index.php-->
<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->

	<!-- Content Row -->

	<div class="row">

		<!-- Area Chart -->
		<div class="col-xl-8 col-lg-7">
			<div class="card shadow mb-4">
				<!-- Card Header - Dropdown -->
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-primary">Informasi Pendaftaran PSB SMP PGRI 32</h6>
					</div>
					<div class="card-body">
						<div class="text-center">
							<img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="img/undraw_posting_photo.svg" alt="">
						</div>
						<h4 class="text-black-50"><?php foreach ($print as $cetakval) : ?>
								<?= $cetakval->judul_pengumuman; ?>
							<?php endforeach; ?>
						</h4>
						<ol class="list-group p-3 text-black-50">
							<!--							Echo key value dari controller-->
							<?php foreach ($print as $value) : ?>
								<?= $value->isi_pengumuman; ?>
							<?php endforeach; ?>

							<!--						<a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on-->
							<!--							unDraw &rarr;</a>-->
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->