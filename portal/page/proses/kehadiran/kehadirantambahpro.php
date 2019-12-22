<div class="panel panel-headline">
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-12">
                <div class="pull-left">
                    <h3 class="panel-title">Data Siswa PJB - Tambah data kehadiran</h3>
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
                        $id         = $_POST['idkehadiran'];
                        $nis        = $_POST['nis'];
                        $sakit      = $_POST['sakit'];
                        $ijin       = $_POST['ijin'];
                        $alpa       = $_POST['alpa'];
                        $terlambat  = $_POST['terlambat'];

                        $count = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tbl_kehadiran WHERE nis=$nis"));
                        
                        if ($count > 0){
                            echo    '<div class="alert alert-danger alert-dismissible" role="alert">'.
							            '<i class="fa fa-info-circle"></i> Data sudah pernah diisi sebelumnya, silahkan cek kembali <a href="?page=datasiswapjb">disini</a>'.
                                    '</div>';
                        } else {
            
                            if ($ijin<=3 && $alpa==0 && $terlambat==0){
                                $status = 2;
                            } else {
                                $status = 1;
                            }

                            $insert = mysqli_query($conn, "INSERT INTO tbl_kehadiran SET
                                id_kehadiran        = '$id',
                                nis                 = $nis,
                                sakit               = $sakit,
                                ijin                = $ijin,
                                alpa                = $alpa,
                                terlambat           = $terlambat,
                                status_kehadiran    = $status");
                            
                            if ($insert){
                                echo    '<div class="alert alert-success alert-dismissible" role="alert">'.
                                            '<i class="fa fa-check-circle"></i> Data berhasil disimpan'.
                                        '</div>';
                                echo "<meta http-equiv='refresh' content='1;
                                url=?page=datasiswapjb'>";
                            }
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</div>