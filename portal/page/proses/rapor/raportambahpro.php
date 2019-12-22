<div class="panel panel-headline">
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-12">
                <div class="pull-left">
                    <h3 class="panel-title">Data Siswa PJB - Tambah data peringkat rapor jurusan</h3>
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
                        $id     = $_POST['idrapor'];
                        $nis    = $_POST['nis'];
                        $nil    = $_POST['peringkat'];

                        $count = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tbl_rapor WHERE nis=$nis"));
                        
                        if ($count > 0){
                            echo    '<div class="alert alert-danger alert-dismissible" role="alert">'.
							            '<i class="fa fa-info-circle"></i> Data sudah pernah diisi sebelumnya, silahkan cek kembali <a href="?page=datasiswapjb">disini</a>'.
                                    '</div>';
                        } else {

                            if ($nil>=1 && $nil<35){
                                $status = 4;
                            } else if ($nil>=36 && $nil<70){
                                $status = 3;
                            } else if ($nil>=71 && $nil<105){
                                $status = 2;
                            } else {
                                $status = 1;
                            }

                            $insert = mysqli_query($conn, "INSERT INTO tbl_rapor SET
                                id_rapor            = '$id',
                                nis                 = $nis,
                                peringkat_jurusan   = $nil,
                                status_rapor        = $status");
                            
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