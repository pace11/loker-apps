<div class="panel panel-headline">
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-12">
                <div class="pull-left">
                    <h3 class="panel-title">Data Siswa PJB - Edit data wawancara</h3>
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
                        $id         = $_POST['idwawancara'];
                        $nilai      = $_POST['nilai'];
            
                        if ($nilai == 1){
                            $status = 2;
                        } else {
                            $status = 1;
                        }

                        $insert = mysqli_query($conn, "UPDATE tbl_wawancara SET
                            nilai               = $nilai,
                            status_wawancara    = $status
                            WHERE id_wawancara  = '$id'");
                        
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