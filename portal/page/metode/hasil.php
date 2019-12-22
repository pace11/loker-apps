<div class="panel panel-headline">
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-12">
                <div class="pull-left">
                    <h3 class="panel-title">Hasil Topsis PJB Class</h3>
                    <p class="panel-subtitle"></p>
                </div>
            </div>
        </div>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info alert-dismissible" role="alert">
                    <i class="fa fa-info-circle"></i> Data ini adalah hasil dari perhitungan Topsis dan kriteria yang telah ditentukan. Setelah proses dilewati diambil 30 Besar Siswa yang masuk dalam
                    PJB Class.
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th colspan="5">Data Siswa</th>
                            </tr>
                            <tr>
                                <th>No</th>
                                <th>Nis</th>
                                <th>Nama Lengkap Siswa</th>
                                <th>Jenis Kelamin</th>
                                <th>Nilai Preferensi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $no=1;
                            $m = mysqli_query($conn, "SELECT * FROM tbl_ranking
                                                    JOIN tbl_siswa ON tbl_ranking.nis=tbl_siswa.nis
                                                    ORDER BY tbl_ranking.nilai_ranking DESC LIMIT 30");
                            while($datam = mysqli_fetch_array($m)){
                                echo '<tr>';
                                echo '<td>'.$no.'</td>';
                                echo '<td><span class="label label-info">'.$datam['nis'].'</span></td>';
                                echo '<td>'.$datam['nama_siswa'].'</td>';
                                echo '<td>'.getGender($datam['jenis_kelamin']).'</td>';
                                echo '<td><span class="label label-success">'.$datam['nilai_ranking'].'</span></td>';
                                echo '</tr>';
                            $no++; 
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>