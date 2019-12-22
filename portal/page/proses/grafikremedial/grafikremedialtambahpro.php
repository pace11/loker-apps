<div class="panel panel-headline">
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-12">
                <div class="pull-left">
                    <h3 class="panel-title">Data Siswa PJB - Tambah data grafik remedial</h3>
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
                        $nis    = $_POST['nis'];
                        $sem1   = $_POST['sem_1'];
                        $sem2   = $_POST['sem_2'];
                        $sem3   = $_POST['sem_3'];
                        $sem4   = $_POST['sem_4'];

                        $count = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tbl_nilairemedial WHERE nis=$nis"));
                        
                        if ($count > 0){
                            echo    '<div class="alert alert-danger alert-dismissible" role="alert">'.
							            '<i class="fa fa-info-circle"></i> Data sudah pernah diisi sebelumnya, silahkan cek kembali <a href="?page=datasiswapjb">disini</a>'.
                                    '</div>';
                        } else {
            
                            if ($sem1 > $sem2 || $sem2 > $sem3 || $sem3 > $sem4 ||
                                $sem1 == $sem2 && $sem2 == $sem3 && $sem3 == $sem4 ||
                                $sem1 < $sem2 && $sem2 > $sem3 && $sem3 > $sem4){
                                $status = 2;
                            } else {
                                $status = 1;
                            }

                            $insert = mysqli_query($conn, "INSERT INTO tbl_nilairemedial SET
                                id_nilairemedial = '$id',
                                nis              = $nis,
                                sem_1            = $sem1,
                                sem_2            = $sem2,
                                sem_3            = $sem3,
                                sem_4            = $sem4,
                                status_remedial  = $status");
                            
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