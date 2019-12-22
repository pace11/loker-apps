<?php 
    $g = mysqli_query($conn, "SELECT * FROM tbl_kriteria WHERE id_kriteria='$_GET[id]'");
    $data = mysqli_fetch_array($g);
?>
<div class="panel panel-headline">
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-12">
                <div class="pull-left">
                    <h3 class="panel-title">Edit Data Kriteria</h3>
                    <p class="panel-subtitle"></p>
                </div>
            </div>
        </div>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <form action="?page=kriteriaeditpro" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <span class="label label-info"><?= $data['id_kriteria'] ?></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div clas="form-group">
                                <label>Nama Kriteria</label>
                                <input type="hidden" name="id" value="<?= $data['id_kriteria'] ?>">
                                <input type="text" class="form-control" name="nama_kriteria" placeholder="masukkan nama kriteria ..." autocomplete="OFF" value="<?= $data['nama_kriteria'] ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div clas="form-group">
                                <label>Nilai Terbobot</label>
                                <div class="input-group">
                                    <input type="number" class="form-control" name="nilai" placeholder="masukkan nilai terbobot ..." autocomplete="OFF" value="<?= $data['nilai_terbobot'] ?>" required>
                                    <span class="input-group-addon">%</span>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="panel-footer">
        <input type="submit" name="submit" class="btn btn-primary" value="simpan">
        <a href="?page=kriteria" class="btn btn-default">kembali</a>
    </div>
    </form>
</div>