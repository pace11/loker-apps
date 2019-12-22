<?php 
    $g = mysqli_query($conn, "SELECT * FROM tbl_siswa WHERE nis=$_GET[id]");
    $data = mysqli_fetch_array($g);
?>
<div class="panel panel-headline">
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-12">
                <div class="pull-left">
                    <h3 class="panel-title">Edit Data Siswa</h3>
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
                <form action="?page=siswaeditpro" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="hidden" name="nis" value="<?= $data['nis'] ?>">
                                <label>Wali Kelas</label>
                                <select name="walikelas" class="form-control">
                                    <option style="display:none;">-- pilih salah satu --</option>
                                    <?php 
                                        $q = mysqli_query($conn, "SELECT * FROM tbl_guru");
                                        while($dataq = mysqli_fetch_array($q)){ ?>
                                        <option value="<?= $dataq['id_guru']?>" <?= ($dataq['id_guru'] == $data['id_guru']) ? 'selected' : '' ?>><?= $dataq['nama_guru']." ".($dataq['kelas'])?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Jurusan</label>
                                <select name="jurusan" class="form-control">
                                    <option style="display:none;">-- pilih salah satu --</option>
                                    <?php 
                                    $r = mysqli_query($conn, "SELECT * FROM tbl_jurusan");
                                        while($datar = mysqli_fetch_array($r)){ ?>
                                            <option value="<?= $datar['id_jurusan'] ?>" <?= ($datar['id_jurusan'] == $data['id_jurusan']) ? 'selected' : '' ?>><?= $datar['nama_jurusan'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div clas="form-group">
                                <label>Nama Lengkap Siswa</label>
                                <input type="text" class="form-control" name="namasiswa" placeholder="masukkan nama lengkap mahasiswa ..." autocomplete="OFF" value="<?= $data['nama_siswa'] ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div clas="form-group">
                                <label>Jenis Kelamin</label>
                                <select name="jeniskelamin" class="form-control">
                                    <option value="L" <?= ($data['jenis_kelamin'] == 'L') ? 'selected' : '' ?>>Laki-Laki</option>
                                    <option value="P" <?= ($data['jenis_kelamin'] == 'P') ? 'selected' : '' ?>>Perempuan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Agama</label>
                                <select name="agama" class="form-control">
                                    <option value="islam" <?= ($data['agama'] == 'islam') ? 'selected' : '' ?>>Islam</option>
                                    <option value="kristen katolik" <?= ($data['agama'] == 'kristen katolik') ? 'selected' : '' ?>>Kristen Katolik</option>
                                    <option value="kristen protestan" <?= ($data['agama'] == 'kristen protestan') ? 'selected' : '' ?>>Kristen Protestan</option>
                                    <option value="hindu" <?= ($data['agama'] == 'hindu') ? 'selected' : '' ?>>Hindu</option>
                                    <option value="budha" <?= ($data['agama'] == 'budha') ? 'selected' : '' ?>>Budha</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tempat</label>
                                <input type="text" class="form-control" name="tempatlahir" placeholder="masukkan tempat lahir ..." autocomplete="off" value="<?= $data['tempat'] ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tgllahir" placeholder="masukkan tgl lahir" autocomplete="off" value="<?= $data['tgl_lahir'] ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Orang Tua</label>
                                <input type="text" class="form-control" name="namaortu" placeholder="masukkan nama orang tua ..." autocomplete="off" value="<?= $data['nama_orang_tua'] ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" name="alamat" placeholder="masukkan alamat ..." autocomplete="off" required><?= $data['alamat'] ?></textarea>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="panel-footer">
        <input type="submit" name="submit" class="btn btn-primary" value="simpan">
        <a href="?page=siswa" class="btn btn-default">kembali</a>
    </div>
    </form>
</div>