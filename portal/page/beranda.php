<?php 

    $siswa = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tbl_siswa"));
    $guru = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tbl_guru"));
    $kriteria = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tbl_kriteria"));

?>

<div class="panel panel-headline">
    <div class="panel-heading">
        <h3 class="panel-title">Beranda</h3>
        <p class="panel-subtitle"></p>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-4">
                <div class="metric">
                    <span class="icon"><i class="fa fa-users"></i></span>
                    <p>
                        <span class="number"><?= $siswa ?></span>
                        <span class="title">Siswa</span>
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="metric">
                    <span class="icon"><i class="fa fa-user"></i></span>
                    <p>
                        <span class="number"><?= $guru ?></span>
                        <span class="title">Wali Kelas</span>
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="metric">
                    <span class="icon"><i class="fa fa-tag"></i></span>
                    <p>
                        <span class="number"><?= $kriteria ?></span>
                        <span class="title">Kriteria</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="panel panel-headline">
    <div class="panel-heading">
        <h3 class="panel-title">Kriteria</h3>
        <p class="panel-subtitle"></p>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Proses Kriteria</th>
                                <th>Nilai Terbobot</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            $q = mysqli_query($conn, "SELECT * FROM tbl_kriteria");
                            while($data=mysqli_fetch_array($q)){ ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><span class="label label-primary"><?= $data['nama_kriteria'] ?></span></td>
                                    <td><?= $data['nilai_terbobot'] ?> %</td>
                                </tr>
                            <?php $no++; } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>