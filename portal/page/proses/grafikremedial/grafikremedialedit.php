<?php 
    $g = mysqli_query($conn, "SELECT * FROM tbl_nilairemedial WHERE id_nilairemedial='$_GET[id]'");
    $data = mysqli_fetch_array($g);
?>
<div class="panel panel-headline">
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-12">
                <div class="pull-left">
                    <h3 class="panel-title">Data Siswa PJB - Edit data grafik remedial</h3>
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
                <form action="?page=grafikremedialeditpro" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nis</label><br>
                                <span class="label label-primary"><?= $data['nis'] ?></span>
                                <input type="hidden" name="idremedial" value="<?= $data['id_nilairemedial'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div clas="form-group">
                                <label>Jumlah Remedial Semester</label>
                                <input type="number" class="form-control" name="sem_1" placeholder="masukkan jumlah remedial semester 1 ..." autocomplete="OFF" value="<?= $data['sem_1'] ?>" required>
                                <input type="number" class="form-control" name="sem_2" placeholder="masukkan jumlah remedial semester 2 ..." autocomplete="OFF" value="<?= $data['sem_2'] ?>" required>
                                <input type="number" class="form-control" name="sem_3" placeholder="masukkan jumlah remedial semester 3 ..." autocomplete="OFF" value="<?= $data['sem_3'] ?>" required>
                                <input type="number" class="form-control" name="sem_4" placeholder="masukkan jumlah remedial semester 4 ..." autocomplete="OFF" value="<?= $data['sem_4'] ?>" required>
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