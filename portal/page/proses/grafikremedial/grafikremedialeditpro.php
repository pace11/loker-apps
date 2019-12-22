<div class="panel panel-headline">
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-12">
                <div class="pull-left">
                    <h3 class="panel-title">Data Siswa PJB - Edit data grafik remedial</h3>
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
                        $id     = $_POST['idremedial'];
                        $sem1   = $_POST['sem_1'];
                        $sem2   = $_POST['sem_2'];
                        $sem3   = $_POST['sem_3'];
                        $sem4   = $_POST['sem_4'];
            
                        if ($sem1 > $sem2 || $sem2 > $sem3 || $sem3 > $sem4 ||
                            $sem1 == $sem2 && $sem2 == $sem3 && $sem3 == $sem4 ||
                            $sem1 < $sem2 && $sem2 > $sem3 && $sem3 > $sem4){
                            $status = 2;
                        } else {
                            $status = 1;
                        }

                        $insert = mysqli_query($conn, "UPDATE tbl_nilairemedial SET
                            sem_1                  = $sem1,
                            sem_2                  = $sem2,
                            sem_3                  = $sem3,
                            sem_4                  = $sem4,
                            status_remedial        = $status
                            WHERE id_nilairemedial = '$id'");
                        
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