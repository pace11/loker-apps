<div class="panel panel-headline">
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-12">
                <div class="pull-left">
                    <h3 class="panel-title">Tambah Data Jurusan</h3>
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
                        $id       = $_POST['id_jurusan'];
                        $nama     = $_POST['nama_jurusan'];

                        $insert = mysqli_query($conn, "INSERT INTO tbl_jurusan SET
                                    id_jurusan      = $id,
                                    nama_jurusan    = '$nama'");
                        
                        if ($insert){
                            echo    '<div class="alert alert-success alert-dismissible" role="alert">'.
							            '<i class="fa fa-check-circle"></i> Data berhasil disimpan'.
                                    '</div>';
                            echo "<meta http-equiv='refresh' content='1;
                            url=?page=jurusan'>";
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</div>