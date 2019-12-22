<div class="panel panel-headline">
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-12">
                <div class="pull-left">
                    <h3 class="panel-title">Data Siswa Pemilih PJB</h3>
                    <p class="panel-subtitle"></p>
                </div>
            </div>
        </div>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <div class="custom-tabs-line tabs-line-bottom left-aligned">
                    <ul class="nav" role="tablist">
                        <li class="active"><a href="#tab-grafikremedial" role="tab" data-toggle="tab" aria-expanded="false">Grafik Remedial</a></li>
                        <li class=""><a href="#tab-peringkatrapor" role="tab" data-toggle="tab" aria-expanded="true">Peringkat Rapor Jurusan</a></li>
                        <li class=""><a href="#tab-kehadiran" role="tab" data-toggle="tab" aria-expanded="true">Kehadiran</a></li>
                        <li class=""><a href="#tab-kepribadian" role="tab" data-toggle="tab" aria-expanded="true">Kepribadian</a></li>
                        <li class=""><a href="#tab-kesehatanfisik" role="tab" data-toggle="tab" aria-expanded="true">Tes Fisik & Kesehatan</a></li>
                        <li class=""><a href="#tab-wawancara" role="tab" data-toggle="tab" aria-expanded="true">Wawancara</a></li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="tab-grafikremedial">
                        <?php if ($auth['role'] == 1){ ?>
                        <div class="row">
                            <button id="btn-tambahgrafikremedial" class="btn btn-primary"><i class="fa fa-plus-circle"></i> tambah data</button>
                            <button id="btn-tutupgrafikremedial" class="btn btn-danger"><i class="fa fa-remove"></i> tutup</button>
                            <div id="form-grafikremedial">
                                <form action="?page=grafikremedialtambahpro" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div clas="form-group">
                                                <label>Nis</label>
                                                <input type="hidden" name="idremedial" value="<?= idRemedial() ?>">
                                                <select name="nis" class="form-control">
                                                <option style="display:none;">-- pilih salah satu --</option>
                                                <?php
                                                    $q = mysqli_query($conn, "SELECT tbl_siswa.nis as Nis, tbl_siswa.nama_siswa as Nama FROM tbl_siswa
                                                                            LEFT OUTER JOIN tbl_nilairemedial ON tbl_siswa.nis=tbl_nilairemedial.nis
                                                                            WHERE tbl_siswa.id_jurusan=2 AND tbl_nilairemedial.nis IS NULL");
                                                    while($dataq = mysqli_fetch_array($q)){
                                                        echo "<option value=$dataq[Nis]>($dataq[Nis]) $dataq[Nama]</option>";
                                                    }
                                                ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div clas="form-group">
                                                <label>Jumlah Remedial Semester</label>
                                                <input type="number" class="form-control" name="sem_1" placeholder="masukkan jumlah remedial semester 1 ..." autocomplete="OFF" required>
                                                <input type="number" class="form-control" name="sem_2" placeholder="masukkan jumlah remedial semester 2 ..." autocomplete="OFF" required>
                                                <input type="number" class="form-control" name="sem_3" placeholder="masukkan jumlah remedial semester 3 ..." autocomplete="OFF" required>
                                                <input type="number" class="form-control" name="sem_4" placeholder="masukkan jumlah remedial semester 4 ..." autocomplete="OFF" required>
                                            </div>
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="submit" name="submit" class="btn btn-primary" value="proses">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div><br>
                        <?php } ?>
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table table-bordered example">
                                    <thead>
                                        <tr>
                                            <th rowspan="2">No</th>
                                            <th rowspan="2">Id Nilai Remedial</th>
                                            <th rowspan="2">Nis</th>
                                            <th rowspan="2">Nama Lengkap Siswa</th>
                                            <th colspan="4">Jumlah Remedial</th>
                                            <th rowspan="2">Status Remedial</th>
                                            <?php if ($auth['role'] == 1){ ?>
                                            <th rowspan="2">Aksi</th>
                                            <?php } ?>
                                        </tr>
                                        <tr>
                                            <th>Semester 1</th>
                                            <th>Semester 2</th>
                                            <th>Semester 3</th>
                                            <th>Semester 4</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $noq = 1;
                                        $q = mysqli_query($conn, "SELECT * FROM tbl_nilairemedial
                                                                JOIN tbl_siswa ON tbl_nilairemedial.nis=tbl_siswa.nis");
                                        while($dataq = mysqli_fetch_array($q)){ ?>
                                            <tr>
                                                <td><?= $noq ?></td>
                                                <td><span class="label label-success"><?= $dataq['id_nilairemedial'] ?></span></td>
                                                <td><span class="label label-primary"><?= $dataq['nis'] ?></span></td>
                                                <td><?= $dataq['nama_siswa'] ?></td>
                                                <td><?= $dataq['sem_1'] ?></td>
                                                <td><?= $dataq['sem_2'] ?></td>
                                                <td><?= $dataq['sem_3'] ?></td>
                                                <td><?= $dataq['sem_4'] ?></td>
                                                <td><?= getStatusRemedial($dataq['status_remedial']) ?></td>
                                                <?php if ($auth['role'] == 1){ ?>
                                                <td>
                                                    <a href="?page=grafikremedialedit&id=<?= $dataq['id_nilairemedial'] ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> edit</a>
                                                    <a href="?page=grafikremedialhapus&id=<?= $dataq['id_nilairemedial'] ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> hapus</a>
                                                </td>
                                                <?php } ?>
                                            </tr>
                                    <?php $noq++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-peringkatrapor">
                        <?php if ($auth['role'] == 1){ ?>
                        <div class="row">
                            <button id="btn-tambahrapor" class="btn btn-primary"><i class="fa fa-plus-circle"></i> tambah data</button>
                            <button id="btn-tutuprapor" class="btn btn-danger"><i class="fa fa-remove"></i> tutup</button>
                            <div id="form-rapor">
                                <form action="?page=raportambahpro" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div clas="form-group">
                                                <label>Nis</label>
                                                <input type="hidden" name="idrapor" value="<?= idRapor() ?>">
                                                <select name="nis" class="form-control">
                                                <option style="display:none;">-- pilih salah satu --</option>
                                                <?php 
                                                    $w = mysqli_query($conn, "SELECT tbl_siswa.nis as Nis, tbl_siswa.nama_siswa as Nama FROM tbl_siswa
                                                                            LEFT OUTER JOIN tbl_rapor ON tbl_siswa.nis=tbl_rapor.nis
                                                                            WHERE tbl_siswa.id_jurusan=2 AND tbl_rapor.nis IS NULL");
                                                    while($dataw = mysqli_fetch_array($w)){
                                                        echo "<option value=$dataw[Nis]>($dataw[Nis]) $dataw[Nama]</option>";
                                                    }
                                                ?>
                                            </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div clas="form-group">
                                                <label>Peringkat Jurusan</label>
                                                <input type="number" class="form-control" name="peringkat" placeholder="masukkan peringkat jurusan ..." autocomplete="OFF" required>
                                            </div>
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="submit" name="submit" class="btn btn-primary" value="proses">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div><br>
                        <?php } ?> 
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table table-bordered example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Id Rapor</th>
                                            <th>Nis</th>
                                            <th>Nama Lengkap Siswa</th>
                                            <th>Peringkat Jurusan</th>
                                            <th>Status Rapor</th>
                                            <?php if ($auth['role'] == 1){ ?>
                                            <th>Aksi</th>
                                            <?php } ?> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $now = 1;
                                        $w = mysqli_query($conn, "SELECT * FROM tbl_rapor
                                                                JOIN tbl_siswa ON tbl_rapor.nis=tbl_siswa.nis");
                                        while($dataw = mysqli_fetch_array($w)){ ?>
                                            <tr>
                                                <td><?= $now ?></td>
                                                <td><span class="label label-success"><?= $dataw['id_rapor'] ?></span></td>
                                                <td><span class="label label-primary"><?= $dataw['nis'] ?></span></td>
                                                <td><?= $dataw['nama_siswa'] ?></td>
                                                <td><?= $dataw['peringkat_jurusan'] ?></td>
                                                <td><?= getStatusRapor($dataw['status_rapor']) ?></td>
                                                <?php if ($auth['role'] == 1){ ?>
                                                <td>
                                                    <a href="?page=raporedit&id=<?= $dataw['id_rapor'] ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> edit</a>
                                                    <a href="?page=raporhapus&id=<?= $dataw['id_rapor'] ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> hapus</a>
                                                </td>
                                                <?php } ?>
                                            </tr>
                                    <?php $now++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-kehadiran">
                        <?php if ($auth['role'] == 1){ ?>
                        <div class="row">
                            <button id="btn-tambahkehadiran" class="btn btn-primary"><i class="fa fa-plus-circle"></i> tambah data</button>
                            <button id="btn-tutupkehadiran" class="btn btn-danger"><i class="fa fa-remove"></i> tutup</button>
                            <div id="form-kehadiran">
                                <form action="?page=kehadirantambahpro" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div clas="form-group">
                                                <label>Nis</label>
                                                <input type="hidden" name="idkehadiran" value="<?= idKehadiran() ?>">
                                                <select name="nis" class="form-control">
                                                <option style="display:none;">-- pilih salah satu --</option>
                                                <?php 
                                                    $w = mysqli_query($conn, "SELECT tbl_siswa.nis as Nis, tbl_siswa.nama_siswa as Nama FROM tbl_siswa
                                                                            LEFT OUTER JOIN tbl_kehadiran ON tbl_siswa.nis=tbl_kehadiran.nis
                                                                            WHERE tbl_siswa.id_jurusan=2 AND tbl_kehadiran.nis IS NULL");
                                                    while($dataw = mysqli_fetch_array($w)){
                                                        echo "<option value=$dataw[Nis]>($dataw[Nis]) $dataw[Nama]</option>";
                                                    }
                                                ?>
                                            </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div clas="form-group">
                                                <label>Keterangan Kehadiran</label>
                                                <input type="number" class="form-control" name="sakit" placeholder="masukkan jumlah sakit ..." autocomplete="OFF" required>
                                                <input type="number" class="form-control" name="ijin" placeholder="masukkan jumlah ijin ..." autocomplete="OFF" required>
                                                <input type="number" class="form-control" name="alpa" placeholder="masukkan jumlah alpa ..." autocomplete="OFF" required>
                                                <input type="number" class="form-control" name="terlambat" placeholder="masukkan jumlah terlambat ..." autocomplete="OFF" required>
                                            </div>
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="submit" name="submit" class="btn btn-primary" value="proses">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div><br>
                        <?php } ?>
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table table-bordered example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Id Kehadiran</th>
                                            <th>Nis</th>
                                            <th>Nama Lengkap Siswa</th>
                                            <th>Sakit</th>
                                            <th>Ijin</th>
                                            <th>Alpa</th>
                                            <th>Terlambat</th>
                                            <th>Status Kehadiran</th>
                                            <?php if ($auth['role'] == 1){ ?>
                                            <th>Aksi</th>
                                            <?php } ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $noe = 1;
                                        $e = mysqli_query($conn, "SELECT * FROM tbl_kehadiran
                                                                JOIN tbl_siswa ON tbl_kehadiran.nis=tbl_siswa.nis");
                                        while($datae = mysqli_fetch_array($e)){ ?>
                                            <tr>
                                                <td><?= $noe ?></td>
                                                <td><span class="label label-success"><?= $datae['id_kehadiran'] ?></span></td>
                                                <td><span class="label label-primary"><?= $datae['nis'] ?></span></td>
                                                <td><?= $datae['nama_siswa'] ?></td>
                                                <td><?= $datae['sakit'] ?></td>
                                                <td><?= $datae['ijin'] ?></td>
                                                <td><?= $datae['alpa'] ?></td>
                                                <td><?= $datae['terlambat'] ?></td>
                                                <td><?= getStatusRemedial($datae['status_kehadiran']) ?></td>
                                                <?php if ($auth['role'] == 1){ ?>
                                                <td>
                                                    <a href="?page=kehadiranedit&id=<?= $datae['id_kehadiran'] ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> edit</a>
                                                    <a href="?page=kehadiranhapus&id=<?= $datae['id_kehadiran'] ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> hapus</a>
                                                </td>
                                                <?php } ?>
                                            </tr>
                                    <?php $noe++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-kepribadian">
                        <?php if ($auth['role'] == 1){ ?>
                        <div class="row">
                            <button id="btn-tambahkepribadian" class="btn btn-primary"><i class="fa fa-plus-circle"></i> tambah data</button>
                            <button id="btn-tutupkepribadian" class="btn btn-danger"><i class="fa fa-remove"></i> tutup</button>
                            <div id="form-kepribadian">
                                <form action="?page=kepribadiantambahpro" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div clas="form-group">
                                                <label>Nis</label>
                                                <input type="hidden" name="idkepribadian" value="<?= idKepribadian() ?>">
                                                <select name="nis" class="form-control">
                                                <option style="display:none;">-- pilih salah satu --</option>
                                                <?php 
                                                    $w = mysqli_query($conn, "SELECT tbl_siswa.nis as Nis, tbl_siswa.nama_siswa as Nama FROM tbl_siswa
                                                                            LEFT OUTER JOIN tbl_kepribadian ON tbl_siswa.nis=tbl_kepribadian.nis
                                                                            WHERE tbl_siswa.id_jurusan=2 AND tbl_kepribadian.nis IS NULL");
                                                    while($dataw = mysqli_fetch_array($w)){
                                                        echo "<option value=$dataw[Nis]>($dataw[Nis]) $dataw[Nama]</option>";
                                                    }
                                                ?>
                                            </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div clas="form-group">
                                                <label>Nilai Kepribadian</label>
                                                <input type="number" class="form-control" name="nilai_1" placeholder="masukkan nilai 1 ..." autocomplete="OFF" required>
                                                <input type="number" class="form-control" name="nilai_2" placeholder="masukkan nilai 2 ..." autocomplete="OFF" required>
                                                <input type="number" class="form-control" name="nilai_3" placeholder="masukkan nilai 3 ..." autocomplete="OFF" required>
                                                <input type="number" class="form-control" name="nilai_4" placeholder="masukkan nilai 4 ..." autocomplete="OFF" required>
                                            </div>
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="submit" name="submit" class="btn btn-primary" value="proses">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div><br>
                        <?php } ?>
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table table-bordered example">
                                    <thead>
                                        <tr>
                                            <th rowspan="2">No</th>
                                            <th rowspan="2">Id Kepribadian</th>
                                            <th rowspan="2">Nis</th>
                                            <th rowspan="2">Nama Lengkap Siswa</th>
                                            <th colspan="5">Nilai</th>
                                            <th rowspan="2">Status Kepribadian</th>
                                            <?php if ($auth['role'] == 1){ ?>
                                            <th rowspan="2">Aksi</th>
                                            <?php } ?>
                                        </tr>
                                        <tr>
                                            <th>1</th>
                                            <th>2</th>
                                            <th>3</th>
                                            <th>4</th>
                                            <th>Rata-Rata</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $nor = 1;
                                        $r = mysqli_query($conn, "SELECT * FROM tbl_kepribadian
                                                                JOIN tbl_siswa ON tbl_kepribadian.nis=tbl_siswa.nis");
                                        while($datar = mysqli_fetch_array($r)){ ?>
                                            <tr>
                                                <td><?= $nor ?></td>
                                                <td><span class="label label-success"><?= $datar['id_kepribadian'] ?></span></td>
                                                <td><span class="label label-primary"><?= $datar['nis'] ?></span></td>
                                                <td><?= $datar['nama_siswa'] ?></td>
                                                <td><?= $datar['nilai_1'] ?></td>
                                                <td><?= $datar['nilai_2'] ?></td>
                                                <td><?= $datar['nilai_3'] ?></td>
                                                <td><?= $datar['nilai_4'] ?></td>
                                                <td><?= $datar['rata_rata'] ?></td>
                                                <td><?= getStatusRapor($datar['status_kepribadian']) ?></td>
                                                <?php if ($auth['role'] == 1){ ?>
                                                <td>
                                                    <a href="?page=kepribadianedit&id=<?= $datar['id_kepribadian'] ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> edit</a>
                                                    <a href="?page=kepribadianhapus&id=<?= $datar['id_kepribadian'] ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> hapus</a>
                                                </td>
                                                <?php } ?>
                                            </tr>
                                    <?php $nor++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-kesehatanfisik">
                        <?php if ($auth['role'] == 1){ ?>
                        <div class="row">
                            <button id="btn-tambahkesehatanfisik" class="btn btn-primary"><i class="fa fa-plus-circle"></i> tambah data</button>
                            <button id="btn-tutupkesehatanfisik" class="btn btn-danger"><i class="fa fa-remove"></i> tutup</button>
                            <div id="form-kesehatanfisik">
                                <form action="?page=kesehatanfisiktambahpro" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div clas="form-group">
                                                <label>Nis</label>
                                                <input type="hidden" name="idkesehatanfisik" value="<?= idKesehatanfisik() ?>">
                                                <select name="nis" class="form-control">
                                                <option style="display:none;">-- pilih salah satu --</option>
                                                <?php 
                                                    $w = mysqli_query($conn, "SELECT tbl_siswa.nis as Nis, tbl_siswa.nama_siswa as Nama FROM tbl_siswa
                                                                            LEFT OUTER JOIN tbl_kesehatanfisik ON tbl_siswa.nis=tbl_kesehatanfisik.nis
                                                                            WHERE tbl_siswa.id_jurusan=2 AND tbl_kesehatanfisik.nis IS NULL");
                                                    while($dataw = mysqli_fetch_array($w)){
                                                        echo "<option value=$dataw[Nis]>($dataw[Nis]) $dataw[Nama]</option>";
                                                    }
                                                ?>
                                            </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div clas="form-group">
                                                <label>Nilai Fisik dan Kesehatan</label>
                                                <input type="number" class="form-control" name="tb" placeholder="masukkan tinggi badan cth: 159 ..." autocomplete="OFF" required>
                                                <input type="number" class="form-control" name="warna" placeholder="masukkan nilai warna ..." autocomplete="OFF" required>
                                                <input type="number" class="form-control" name="lari" placeholder="masukkan nilai lari ..." autocomplete="OFF" required>
                                                <input type="number" class="form-control" name="tht" placeholder="masukkan nilai tht ..." autocomplete="OFF" required>
                                            </div>
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="submit" name="submit" class="btn btn-primary" value="proses">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div><br>
                        <?php } ?>
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table table-bordered example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Id Kesehatan Fisik</th>
                                            <th>Nis</th>
                                            <th>Nama Lengkap Siswa</th>
                                            <th>Tinggi Badan</th>
                                            <th>Warna</th>
                                            <th>Lari</th>
                                            <th>THT</th>
                                            <th>Status Fisik & Kesehatan</th>
                                            <?php if ($auth['role'] == 1){ ?>
                                            <th>Aksi</th>
                                            <?php } ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $not = 1;
                                        $t = mysqli_query($conn, "SELECT * FROM tbl_kesehatanfisik
                                                                JOIN tbl_siswa ON tbl_kesehatanfisik.nis=tbl_siswa.nis");
                                        while($datat = mysqli_fetch_array($t)){ ?>
                                            <tr>
                                                <td><?= $not ?></td>
                                                <td><span class="label label-success"><?= $datat['id_kesehatanfisik'] ?></span></td>
                                                <td><span class="label label-primary"><?= $datat['nis'] ?></span></td>
                                                <td><?= $datat['nama_siswa'] ?></td>
                                                <td><?= $datat['tb'] ?></td>
                                                <td><?= $datat['warna'] ?></td>
                                                <td><?= $datat['lari'] ?></td>
                                                <td><?= $datat['tht'] ?></td>
                                                <td><?= getStatusRemedial($datat['status_kesehatanfisik']) ?></td>
                                                <?php if ($auth['role'] == 1){ ?>
                                                <td>
                                                    <a href="?page=kesehatanfisikedit&id=<?= $datat['id_kesehatanfisik'] ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> edit</a>
                                                    <a href="?page=kesehatanfisikhapus&id=<?= $datat['id_kesehatanfisik'] ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> hapus</a>
                                                </td>
                                                <?php } ?>
                                            </tr>
                                    <?php $not++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-wawancara">
                        <?php if ($auth['role'] == 1){ ?>
                        <div class="row">
                            <button id="btn-tambahwawancara" class="btn btn-primary"><i class="fa fa-plus-circle"></i> tambah data</button>
                            <button id="btn-tutupwawancara" class="btn btn-danger"><i class="fa fa-remove"></i> tutup</button>
                            <div id="form-wawancara">
                                <form action="?page=wawancaratambahpro" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div clas="form-group">
                                                <label>Nis</label>
                                                <input type="hidden" name="idwawancara" value="<?= idWawancara() ?>">
                                                <select name="nis" class="form-control">
                                                <option style="display:none;">-- pilih salah satu --</option>
                                                <?php 
                                                    $w = mysqli_query($conn, "SELECT tbl_siswa.nis as Nis, tbl_siswa.nama_siswa as Nama FROM tbl_siswa
                                                                            LEFT OUTER JOIN tbl_wawancara ON tbl_siswa.nis=tbl_wawancara.nis
                                                                            WHERE tbl_siswa.id_jurusan=2 AND tbl_wawancara.nis IS NULL");
                                                    while($dataw = mysqli_fetch_array($w)){
                                                        echo "<option value=$dataw[Nis]>($dataw[Nis]) $dataw[Nama]</option>";
                                                    }
                                                ?>
                                            </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div clas="form-group">
                                                <label>Nilai Wawancara</label>
                                                <select name="nilai" class="form-control">
                                                    <option value="1">Lulus (1)</option>
                                                    <option value="0">Gagal (0)</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="submit" name="submit" class="btn btn-primary" value="proses">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div><br>
                        <?php } ?>
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table table-bordered example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Id Wawancara</th>
                                            <th>Nis</th>
                                            <th>Nama Lengkap Siswa</th>
                                            <th>Nilai</th>
                                            <th>Status Wawancara</th>
                                            <?php if ($auth['role'] == 1){ ?>
                                            <th>Aksi</th>
                                            <?php } ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $noy = 1;
                                        $y = mysqli_query($conn, "SELECT * FROM tbl_wawancara
                                                                JOIN tbl_siswa ON tbl_wawancara.nis=tbl_siswa.nis");
                                        while($datay = mysqli_fetch_array($y)){ ?>
                                            <tr>
                                                <td><?= $noy ?></td>
                                                <td><span class="label label-success"><?= $datay['id_wawancara'] ?></span></td>
                                                <td><span class="label label-primary"><?= $datay['nis'] ?></span></td>
                                                <td><?= $datay['nama_siswa'] ?></td>
                                                <td><?= $datay['nilai'] ?></td>
                                                <td><?= getStatusRemedial($datay['status_wawancara']) ?></td>
                                                <?php if ($auth['role'] == 1){ ?>
                                                <td>
                                                    <a href="?page=wawancaraedit&id=<?= $datay['id_wawancara'] ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> edit</a>
                                                    <a href="?page=wawancarahapus&id=<?= $datay['id_wawancara'] ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> hapus</a>
                                                </td>
                                                <?php } ?>
                                            </tr>
                                    <?php $noy++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

