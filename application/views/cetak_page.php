<!DOCTYPE html>
<html>

<head>
    <title>Cetak Bukti Pendaftaran</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
</head>

<body>
    <!--
<STYLE TYPE="text/css">
	* {
		box-sizing: border-box;
	}
	.kiri {
		width: 25%;
		border: 1px solid red;
		float: left;
	}
	.kanan {
		width: 75%;
		float: left;
		border: 1px solid red;
	}
	.header {
		border: 1px solid blue;
	}
	.footer {
		clear: both;
		border: 1px solid black;
	}

</STYLE>

<div class="header">
	ini adalah header
</div>

<div class="kiri">
	Ini adalah kiri
</div>

<div class="kanan">
	Ini adalah kanan
</div>

<div class="footer">
	&copy; ini adalah footer
</div>

-->

    <style type="text/css">
        .cetak {
            border: 1px solid black;
            padding: 15px;
        }

        footer {
            font-size: 12px;
            margin: 0px;
        }

        .foto {
            padding: 15px;
        }

        tbody:before,
        tbody:after {
            display: none;
        }
    </style>
    <?php

    foreach ($data as $row) {

    ?>
        <div class="container cetak">
            <div class="row text-center">
                <img src="../psb/assets/images/header-psb-cetak.png" width="70%" height="60px">
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-4 foto text-center">
                    <img src="../psb/assets/images/no-image.png" width="150px" height="200px" class="img-thumbnail"><br>
                    <strong><?php echo $row->nama; ?></strong><br><br>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-sm-12">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td width="250px">ID Pendaftaran</td>
                                <td>:</td>
                                <td><?php echo $row->id; ?></td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir(tahun/bulan/hari)</td>
                                <td>:</td>
                                <td><?php echo date('d-m-Y', strtotime($row->tanggal_lahir)); ?></td>
                            </tr>
                            <tr>
                                <td>Asal SMP</td>
                                <td>:</td>
                                <td><?php echo $row->smp_asal; ?></td>
                            </tr>
                            <tr>
                                <td>Email Terdaftar</td>
                                <td>:</td>
                                <td><?php echo $row->email; ?></td>
                            </tr>
                            <tr>
                                <td>Tanggal Daftar(tahun/bulan/hari)</td>
                                <td>:</td>
                                <td><?php echo date('d-m-Y', strtotime($row->tanggal)); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <footer class="text-center">
                <p>Silahkan cetak dan simpan bukti pendaftaran ini dengan baik karena akan digunakan untuk verifikasi selanjutnya. Jika hilang dapat dicetak kembali dengan melakukan login pada psb.sman05mukomuko.sch.id</p>
            </footer>
        <?php } ?>
        </div>
</body>

</html>