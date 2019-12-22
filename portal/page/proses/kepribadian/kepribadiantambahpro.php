<div class="panel panel-headline">
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-12">
                <div class="pull-left">
                    <h3 class="panel-title">Data Siswa PJB - Tambah data kepribadian</h3>
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
                        $id         = $_POST['idkepribadian'];
                        $nis        = $_POST['nis'];
                        $nilai1     = $_POST['nilai_1'];
                        $nilai2     = $_POST['nilai_2'];
                        $nilai3     = $_POST['nilai_3'];
                        $nilai4     = $_POST['nilai_4'];

                        $count = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tbl_kepribadian WHERE nis=$nis"));
                        
                        if ($count > 0){
                            echo    '<div class="alert alert-danger alert-dismissible" role="alert">'.
							            '<i class="fa fa-info-circle"></i> Data sudah pernah diisi sebelumnya, silahkan cek kembali <a href="?page=datasiswapjb">disini</a>'.
                                    '</div>';
                        } else {
            
                            $hit    = (($nilai1+$nilai2+$nilai3+$nilai4)/4);
                            $rata   = $hit;

                            if ($rata >= 0 && $rata <61){
                                $status = 1;
                            } else if ($rata >=61 && $rata <71){
                                $status = 2; 
                            } else if ($rata >= 71 && $rata <81){
                                $status = 3;
                            } else if ($rata >=81 && $rata <= 100) {
                                $status = 4;
                            }

                            $insert = mysqli_query($conn, "INSERT INTO tbl_kepribadian SET
                                id_kepribadian      = '$id',
                                nis                 = $nis,
                                nilai_1             = $nilai1,
                                nilai_2             = $nilai2,
                                nilai_3             = $nilai3,
                                nilai_4             = $nilai4,
                                rata_rata           = $rata,
                                status_kepribadian  = $status");
                            
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