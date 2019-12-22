<?php 
    $g = mysqli_query($conn, "SELECT * FROM tbl_guru WHERE id_guru=$_GET[id]");
    $data = mysqli_fetch_array($g);
?>
<div class="panel panel-headline">
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-12">
                <div class="pull-left">
                    <h3 class="panel-title">Edit Data Wali Kelas</h3>
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
                <form action="?page=gurueditpro" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div clas="form-group">
                                <label>Nama Lengkap Guru</label>
                                <input type="hidden" name="id" value="<?= $data['id_guru'] ?>">
                                <input type="text" class="form-control" name="nama_lengkap" placeholder="masukkan nama lengkap guru ..." autocomplete="OFF" value="<?= $data['nama_guru'] ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div clas="form-group">
                                <label>Kelas</label>
                                <input type="text" class="form-control kapital" name="kelas" placeholder="masukkan kelas ..." autocomplete="OFF" value="<?= $data['kelas'] ?>" required>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="panel-footer">
        <input type="submit" name="submit" class="btn btn-primary" value="simpan">
        <a href="?page=guru" class="btn btn-default">kembali</a>
    </div>
    </form>
</div>