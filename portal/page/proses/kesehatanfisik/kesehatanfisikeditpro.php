<div class="panel panel-headline">
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-12">
                <div class="pull-left">
                    <h3 class="panel-title">Data Siswa PJB - Edit data fisik dan kesehatan</h3>
                    <p class="panel-subtitle"></p>
                </div>
                <div class="pull-right">
                </div>
            </div>
        </div>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <?php 
                    if (isset($_POST['submit'])){
                        $id      = $_POST['idkesehatanfisik'];
                        $nis     = $_POST['nis'];
                        $tb      = $_POST['tb'];
                        $warna   = $_POST['warna'];
                        $lari    = $_POST['lari'];
                        $tht     = $_POST['tht'];
            
                        $s = mysqli_query($conn, "SELECT * FROM tbl_siswa WHERE nis=$nis");
                        $data = mysqli_fetch_array($s);

                        if ($data['jenis_kelamin'] == 'L'){
                            if ($tb>=160 && $warna==0 && $lari==1 && $tht==0){
                                $status = 2;
                            } else {
                                $status = 1;
                            }
                        } else {
                            if ($tb>=150 && $warna==0 && $lari==1 && $tht==0){
                                $status = 2;
                            } else {
                                $status = 1;
                            }
                        }

                        $insert = mysqli_query($conn, "UPDATE tbl_kesehatanfisik SET
                            tb                      = $tb,
                            warna                   = $warna,
                            lari                    = $lari,
                            tht                     = $tht,
                            status_kesehatanfisik   = $status 
                            WHERE id_kesehatanfisik = '$id'");
                        
                        if ($insert){
                            echo    '<div class="alert alert-success alert-dismissible" role="alert">'.
                                        '<i class="fa fa-check-circle"></i> Data berhasil disimpan'.
                                    '</div>';
                            echo "<meta http-equiv='refresh' content='1;
                            url=?page=datasiswapjb'>";
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</div>