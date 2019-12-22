<?php 
    $g = mysqli_query($conn, "SELECT * FROM tbl_kepribadian WHERE id_kepribadian='$_GET[id]'");
    $data = mysqli_fetch_array($g);
?>
<div class="panel panel-headline">
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-12">
                <div class="pull-left">
                    <h3 class="panel-title">Data Siswa PJB - Edit data kepribadian</h3>
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
                <form action="?page=kepribadianeditpro" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nis</label><br>
                                <span class="label label-primary"><?= $data['nis'] ?></span>
                                <input type="hidden" name="idkepribadian" value="<?= $data['id_kepribadian'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div clas="form-group">
                                <label>Nilai Kepribadian</label>
                                <input type="number" class="form-control" name="nilai_1" placeholder="masukkan nilai 1 ..." autocomplete="OFF" value="<?= $data['nilai_1'] ?>" required>
                                <input type="number" class="form-control" name="nilai_2" placeholder="masukkan nilai 2 ..." autocomplete="OFF" value="<?= $data['nilai_2'] ?>" required>
                                <input type="number" class="form-control" name="nilai_3" placeholder="masukkan nilai 3 ..." autocomplete="OFF" value="<?= $data['nilai_3'] ?>" required>
                                <input type="number" class="form-control" name="nilai_4" placeholder="masukkan nilai 4 ..." autocomplete="OFF" value="<?= $data['nilai_4'] ?>" required>
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