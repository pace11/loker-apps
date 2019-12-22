<?php 
    $g = mysqli_query($conn, "SELECT * FROM tbl_kesehatanfisik WHERE id_kesehatanfisik='$_GET[id]'");
    $data = mysqli_fetch_array($g);
?>
<div class="panel panel-headline">
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-12">
                <div class="pull-left">
                    <h3 class="panel-title">Data Siswa PJB - Edit data fisik & kesehatan</h3>
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
                <form action="?page=kesehatanfisikeditpro" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nis</label><br>
                                <span class="label label-primary"><?= $data['nis'] ?></span>
                                <input type="hidden" name="idkesehatanfisik" value="<?= $data['id_kesehatanfisik'] ?>">
                                <input type="hidden" name="nis" value="<?= $data['nis'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div clas="form-group">
                                <label>Nilai Fisik dan Kesehatan</label>
                                <input type="number" class="form-control" name="tb" placeholder="masukkan tinggi badan cth: 159 ..." autocomplete="OFF" value="<?= $data['tb'] ?>" required>
                                <input type="number" class="form-control" name="warna" placeholder="masukkan nilai warna ..." autocomplete="OFF" value="<?= $data['warna'] ?>" required>
                                <input type="number" class="form-control" name="lari" placeholder="masukkan nilai lari ..." autocomplete="OFF" value="<?= $data['lari'] ?>" required>
                                <input type="number" class="form-control" name="tht" placeholder="masukkan nilai tht ..." autocomplete="OFF" value="<?= $data['tht'] ?>" required>
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