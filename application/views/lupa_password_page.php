<!DOCTYPE html>
<html>

<head>
    <title>Lupa password PSB-Online SMAN 05 </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap-datepicker3.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap-datepicker.js"></script>
</head>

<body>
    <SCRIPT TYPE="text/javascript">
        $(document).ready(function() {
            $('.datepicker').datepicker({
                autoclose: true,
                format: 'yyyy-mm-dd',
            });
        });
    </SCRIPT>
    <STYLE TYPE="text/css">
        body {
            background-color: black;
        }

        .alert {
            border-radius: 0;
        }

        .form_input {
            background-color: white;
            margin-top: 25px;
            padding: 15px;
        }

        .judul {
            font-family: 'Agency Fb';
        }

        .kembali {
            margin-top: 10px;
        }

        .password {
            margin-top: 10px;
        }
    </STYLE>
    <div class="container">
        <div class="row kembali">
            <p class="text-center"><a href="<?php echo base_url() ?>"><span class="glyphicon glyphicon-chevron-left"></span> Kembali ke halaman utama</a></p>
        </div>
        <div class="col-sm-4 col-sm-offset-4 form_input">
            <div class="row text-center judul">Masukkan Email dan Tanggal Lahir<br><br></div>
            <form action="<?php echo base_url() ?>auth/data_password" method="post">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">@</div>
                        <input type="text" class="form-control" name="email" placeholder="masukkan email" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div>
                        <input type="date" class="form-control datepicker" name="tanggal_lahir" placeholder="tanggal lahir" data-provide="datepicker" data-date-format="yyyy-mm-dd" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-default pull-right">Temukan Password</button><br><br>
            </form>
        </div>
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4 password">
                <div class="alert alert-info">Password : <span class="text-danger"><strong><?php echo $this->session->flashdata('password'); ?></strong></span></div>
            </div>
        </div>
    </div>
</body>

</html>