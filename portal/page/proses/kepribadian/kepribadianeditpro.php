<div class="panel panel-headline">
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-12">
                <div class="pull-left">
                    <h3 class="panel-title">Data Siswa PJB - Edit data kehadiran</h3>
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
                        $nilai1     = $_POST['nilai_1'];
                        $nilai2     = $_POST['nilai_2'];
                        $nilai3     = $_POST['nilai_3'];
                        $nilai4     = $_POST['nilai_4'];
            
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

                        $insert = mysqli_query($conn, "UPDATE tbl_kepribadian SET
                            nilai_1             = $nilai1,
                            nilai_2             = $nilai2,
                            nilai_3             = $nilai3,
                            nilai_4             = $nilai4,
                            rata_rata           = $rata,
                            status_kepribadian  = $status
                            WHERE id_kepribadian  = '$id'");
                        
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