<?php

foreach ($user as $row) {

?>
    <div class="container cetak">
        <div class="row text-center">
            <img src="../psb/assets/images/header-psb-cetak.png" width="70%" height="60px">
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-4 foto text-center">
                <img src="../psb/assets/images/no-image.png" width="150px" height="200px" class="img-thumbnail"><br>
                <strong><?php echo $row->nama_lengkap; ?></strong><br><br>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-12">
                <table class="table">
                    <tbody>
                        <!-- <tr>
                            <td width="250px">ID Pendaftaran</td>
                            <td>:</td>
                            <td><?php echo $row->id; ?></td>
                        </tr> -->
                        <tr>
                            <td>Tanggal Lahir(tahun/bulan/hari)</td>
                            <td>:</td>
                            <td><?php echo date('d-m-Y', strtotime($row->tanggal_lahir)); ?></td>
                        </tr>
                        <tr>
                            <td>Asal SD</td>
                            <td>:</td>
                            <td><?php echo $row->sd_asal; ?></td>
                        </tr>
                        <!-- <tr>
                            <td>Email Terdaftar</td>
                            <td>:</td>
                            <td><?php echo $row->email; ?></td>
                        </tr> -->
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