<?php 
    $g = mysqli_query($conn, "SELECT * FROM tbl_wawancara WHERE id_wawancara='$_GET[id]'");
    $data = mysqli_fetch_array($g);
?>
<div class="panel panel-headline">
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-12">
                <div class="pull-left">
                    <h3 class="panel-title">Data Siswa PJB - Edit data wawancara</h3>
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
                <form action="?page=wawancaraeditpro" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nis</label><br>
                                <span class="label label-primary"><?= $data['nis'] ?></span>
                                <input type="hidden" name="idwawancara" value="<?= $data['id_wawancara'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div clas="form-group">
                                <label>Nilai Wawancara</label>
                                <select name="nilai" class="form-control">
                                    <option value="1" <?= ($data['nilai'] == 1) ? 'selected' : '' ?>>Lulus (1)</option>
                                    <option value="0" <?= ($data['nilai'] == 0) ? 'selected' : '' ?>>Gagal (0)</option>
                                </select>
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