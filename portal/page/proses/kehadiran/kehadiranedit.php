<?php 
    $g = mysqli_query($conn, "SELECT * FROM tbl_kehadiran WHERE id_kehadiran='$_GET[id]'");
    $data = mysqli_fetch_array($g);
?>
<div class="panel panel-headline">
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-12">
                <div class="pull-left">
                    <h3 class="panel-title">Data Siswa PJB - Edit data kehadiran</h3>
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
                <form action="?page=kehadiraneditpro" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nis</label><br>
                                <span class="label label-primary"><?= $data['nis'] ?></span>
                                <input type="hidden" name="idkehadiran" value="<?= $data['id_kehadiran'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div clas="form-group">
                                <label>Keterangan Kehadiran</label>
                                <input type="number" class="form-control" name="sakit" placeholder="masukkan jumlah remedial semester 1 ..." autocomplete="OFF" value="<?= $data['sakit'] ?>" required>
                                <input type="number" class="form-control" name="ijin" placeholder="masukkan jumlah remedial semester 2 ..." autocomplete="OFF" value="<?= $data['ijin'] ?>" required>
                                <input type="number" class="form-control" name="alpa" placeholder="masukkan jumlah remedial semester 3 ..." autocomplete="OFF" value="<?= $data['alpa'] ?>" required>
                                <input type="number" class="form-control" name="terlambat" placeholder="masukkan jumlah remedial semester 4 ..." autocomplete="OFF" value="<?= $data['terlambat'] ?>" required>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="panel-footer">
        <input type="submit" name="submit" class="btn btn-primary" value="simpan">
        <a href="?page=datasiswapjb" class="btn btn-default">kembali</a>
    </div>
    </form>
</div>