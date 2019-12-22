<?php 
    $g = mysqli_query($conn, "SELECT * FROM tbl_rapor WHERE id_rapor='$_GET[id]'");
    $data = mysqli_fetch_array($g);
?>
<div class="panel panel-headline">
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-12">
                <div class="pull-left">
                    <h3 class="panel-title">Data Siswa PJB - Edit data rapor</h3>
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
                <form action="?page=raporeditpro" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div clas="form-group">
                                <label>Nis</label><br>
                                <span class="label label-primary"><?= $data['nis'] ?></span>
                                <input type="hidden" name="idrapor" value="<?= $data['id_rapor'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div clas="form-group">
                                <label>Peringkat Jurusan</label>
                                <input type="number" class="form-control" name="peringkat" placeholder="masukkan peringkat jurusan ..." autocomplete="OFF" value="<?= $data['peringkat_jurusan'] ?>" required>
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