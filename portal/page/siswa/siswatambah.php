<div class="panel panel-headline">
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-12">
                <div class="pull-left">
                    <h3 class="panel-title">Tambah Data Siswa</h3>
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
                <form action="?page=siswatambahpro" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Wali Kelas</label>
                                <select name="walikelas" class="form-control">
                                    <option style="display:none;">-- pilih salah satu --</option>
                                    <?php 
                                        $q = mysqli_query($conn, "SELECT * FROM tbl_guru");
                                        while($dataq = mysqli_fetch_array($q)){
                                            echo "<option value=$dataq[id_guru]>$dataq[nama_guru] ($dataq[kelas])</option>";
                                        }
                                    ?>
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
                                        $q = mysqli_query($conn, "SELECT * FROM tbl_jurusan");
                                        while($dataq = mysqli_fetch_array($q)){
                                            echo "<option value=$dataq[id_jurusan]>$dataq[nama_jurusan]</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div clas="form-group">
                                <label>NIS</label>
                                <input class="form-control" type="text" name="nis" placeholder="masukkan nis mahasiswa ..." autocomplete="OFF" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div clas="form-group">
                                <label>Nama Lengkap Siswa</label>
                                <input type="text" class="form-control" name="namasiswa" placeholder="masukkan nama lengkap mahasiswa ..." autocomplete="OFF" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div clas="form-group">
                                <label>Jenis Kelamin</label>
                                <select name="jeniskelamin" class="form-control">
                                    <option style="display:none;">-- pilih salah satu --</option>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Agama</label>
                                <select name="agama" class="form-control">
                                    <option style="display:none;">-- pilih salah satu --</option>
                                    <option value="islam">Islam</option>
                                    <option value="kristen katolik">Kristen Katolik</option>
                                    <option value="kristen protestan">Kristen Protestan</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="budha">Budha</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tempat</label>
                                <input type="text" class="form-control" name="tempatlahir" placeholder="masukkan tempat lahir ..." autocomplete="off" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tgllahir" placeholder="masukkan tgl lahir" autocomplete="off" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Orang Tua</label>
                                <input type="text" class="form-control" name="namaortu" placeholder="masukkan nama orang tua ..." autocomplete="off" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" name="alamat" placeholder="masukkan alamat ..." autocomplete="off" required></textarea>
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