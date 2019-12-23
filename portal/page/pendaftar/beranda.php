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
                        <span class="number">10</span>
                        <span class="title">Siswa</span>
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="metric">
                    <span class="icon"><i class="fa fa-user"></i></span>
                    <p>
                        <span class="number">12</span>
                        <span class="title">Wali Kelas</span>
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="metric">
                    <span class="icon"><i class="fa fa-tag"></i></span>
                    <p>
                        <span class="number">15</span>
                        <span class="title">Kriteria</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="panel panel-headline">
    <div class="panel-heading">
        <h3 class="panel-title">Pemberkasan</h3>
        <p class="panel-subtitle">Menampilkan nilai presentasi kelengkapan data dari Pemberkasan</p>
    </div>
    <div class="panel-body">
        <?php 
            $sql = mysqli_query($conn, "SELECT * FROM pemberkasan WHERE user_id='$auth[id]'");
            $data = mysqli_fetch_array($sql);
            $tmp = 0;
            for ($a=2;$a<=7;$a++) {
                if ($data[$a] !== null){
                    $tmp += 1;
                }
            }
            $presentasi = round(($tmp*100/6), 2);
        ?>
        <div class="row">
            <div class="col-md-12">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="<?= $presentasi ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $presentasi ?>%">
                        <?= $presentasi > 0 ? $presentasi.' %' : '' ?>
                    </div>
                </div>
                <ul>
                    <li>Kartu Tanda Penduduk (KTP) Upload <?= $data[2] === null ? '<span class="label label-danger"><i class="fa fa-remove"></i><span>' : '<span class="label label-success"><i class="fa fa-check"></i><span>' ?></li>
                    <li>Kartu Keluarga Upload <?= $data[3] === null ? '<span class="label label-danger"><i class="fa fa-remove"></i><span>' : '<span class="label label-success"><i class="fa fa-check"></i><span>' ?></li>
                    <li>Ijazah / Surat Keterangan Lulus (SKL) Upload <?= $data[4] === null ? '<span class="label label-danger"><i class="fa fa-remove"></i><span>' : '<span class="label label-success"><i class="fa fa-check"></i><span>' ?> </li>
                    <li>Surat Keterangan Catatan Kepolisian (SKCK) Upload <?= $data[5] === null ? '<span class="label label-danger"><i class="fa fa-remove"></i><span>' : '<span class="label label-success"><i class="fa fa-check"></i><span>' ?></li>
                    <li>Surat Keterangan Domisili Upload <?= $data[6] === null ? '<span class="label label-danger"><i class="fa fa-remove"></i><span>' : '<span class="label label-success"><i class="fa fa-check"></i><span>' ?></li>
                    <li>Curriculum Vitae (CV) Upload <?= $data[7] === null ? '<span class="label label-danger"><i class="fa fa-remove"></i><span>' : '<span class="label label-success"><i class="fa fa-check"></i><span>' ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>