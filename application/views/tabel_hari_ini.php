<h2>Pendaftar Hari Ini : </h2>
<table class="table table-hover table-bordered">
	<caption>Pendaftar Hari Ini :</caption>
	<thead>
		<tr>
			<th>No.</th>
			<th>Foto</th>
			<th>Nama Lengkap</th>
			<th>Kelamin</th>
			<th>Agama</th>
			<th>SMP Asal</th>
			<th>Total UN</th>
			<th>Nama Bapak</th>
			<th>Nama Ibu</th>
			<th>Hp/Telpon</th>
			<th>ID</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$no = 1;
		foreach ($isi->result() as $row) {
		?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><img src="<?php echo base_url() ?>uploadsfolder/<?php echo $row->foto_calon_siswa; ?>" width="60px" height="70px"></td>
				<td><?php echo $row->nama_lengkap; ?></td>
				<td><?php echo $row->jenis_kelamin; ?></td>
				<td><?php echo $row->agama; ?></td>
				<td><?php echo $row->sd_asal; ?></td>
				<!--			<td>--><?php //echo $row->un_total;
										?>
				<!--</td>-->
				<td><?php echo $row->nama_ayah_kandung; ?></td>
				<td><?php echo $row->nama_ibu_kandung; ?></td>
				<!--			<td>--><?php //echo $row->telpon; 
										?>
				<!--</td>-->
				<td><?php echo $row->user_id; ?></td>
			</tr>
		<?php } ?>
	</tbody>
</table>