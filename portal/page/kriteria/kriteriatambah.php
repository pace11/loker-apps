<?php 

    $get_id = mysqli_query($conn, "SELECT id_kriteria FROM tbl_kriteria WHERE SUBSTRING(id_kriteria,1,8)='KRITERIA'") or die (mysqli_error($conn));
    $trim_id = mysqli_query($conn, "SELECT SUBSTRING(id_kriteria,-2,2) as hasil FROM tbl_kriteria WHERE SUBSTRING(id_kriteria,1,8)='KRITERIA' ORDER BY hasil DESC LIMIT 1") or die (mysqli_error($conn));
    $hit    = mysqli_num_rows($get_id);
    if ($hit == 0){
        $id_k   = "KRITERIA01";
    } else if ($hit > 0){
        $row    = mysqli_fetch_array($trim_id);
        $kode   = $row['hasil']+1;
        $id_k   = "KRITERIA".str_pad($kode,2,"0",STR_PAD_LEFT);
}

?>
<div class="panel panel-headline">
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-12">
                <div class="pull-left">
                    <h3 class="panel-title">Tambah Data Guru</h3>
                    <p class="panel-subtitle"></p>
                </div>
            </div>
        </div>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <form action="?page=kriteriatambahpro" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>ID Kriteria</label><br>
                            <span class="label label-success"><?= $id_k ?></span><br>
                            <input type="hidden" name="id" value="<?= $id_k ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div clas="form-group">
                                <label>Nama Kriteria</label>
                                <input type="text" class="form-control" name="nama_kriteria" placeholder="masukkan nama kriteria ..." autocomplete="OFF" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div clas="form-group">
                                <label>Nilai Terbobot</label>
                                <div class="input-group">
                                    <input type="number" class="form-control" name="nilai" placeholder="masukkan nilai terbobot ..." autocomplete="OFF" required>
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