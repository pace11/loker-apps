<div class="panel panel-headline">
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-12">
                <div class="pull-left">
                    <h3 class="panel-title">Tambah Data Siswa</h3>
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
                        $walikelas    = $_POST['walikelas'];
                        $jurusan      = $_POST['jurusan'];
                        $nis          = $_POST['nis'];
                        $nama         = $_POST['namasiswa'];
                        $jeniskelamin = $_POST['jeniskelamin'];
                        $agama        = $_POST['agama'];
                        $tempatlahir  = $_POST['tempatlahir'];
                        $tgllahir     = date('Y-m-d',strtotime($_POST['tgllahir']));
                        $namaortu     = $_POST['namaortu'];
                        $alamat       = addslashes($_POST['alamat']);
                        

                        $insert = mysqli_query($conn, "INSERT INTO tbl_siswa SET
                                    nis                 = '$nis',
                                    id_guru             = '$walikelas',
                                    id_jurusan          = '$jurusan',
                                    nama_siswa          = '$nama',
                                    jenis_kelamin       = '$jeniskelamin',
                                    agama               = '$agama',
                                    tempat              = '$tempatlahir',
                                    tgl_lahir           = '$tgllahir',
                                    nama_orang_tua      = '$namaortu',
                                    alamat              = '$alamat'");
                        
                        if ($insert){
                            echo    '<div class="alert alert-success alert-dismissible" role="alert">'.
							            '<i class="fa fa-check-circle"></i> Data berhasil disimpan'.
                                    '</div>';
                            echo "<meta http-equiv='refresh' content='1;
                            url=?page=siswa'>";
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</div>