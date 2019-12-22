<div class="panel panel-headline">
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-12">
                <div class="pull-left">
                    <h3 class="panel-title">Manajemen Data Siswa</h3>
                    <p class="panel-subtitle"></p>
                </div>
                <?php if ($auth['role'] == 1){ ?>
                <div class="pull-right">
                    <a href="?page=siswatambah" class="btn btn-primary"><i class="fa fa-plus-circle"></i> tambah data</a>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Wali Kelas</th>
                                <th>Nis</th>
                                <th>Kelas</th>
                                <th>Penjurusan</th>
                                <th>Nama Siswa</th>
                                <th>Jenis Kelamin</th>
                                <th>Agama</th>
                                <th>Tempat</th>
                                <th>Tanggal Lahir</th>
                                <th>Nama Orang Tua</th>
                                <th>Alamat</th>
                                <?php if ($auth['role'] == 1){ ?>
                                <th>Aksi</th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            $q = mysqli_query($conn, "SELECT * FROM tbl_siswa
                                                    JOIN tbl_guru ON tbl_siswa.id_guru=tbl_guru.id_guru
                                                    JOIN tbl_jurusan ON tbl_siswa.id_jurusan=tbl_jurusan.id_jurusan");
                            while($data=mysqli_fetch_array($q)){ ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $data['nama_guru'] ?></td>
                                    <td><?= $data['nis'] ?></td>
                                    <td><?= $data['kelas'] ?></td>
                                    <td><?= getJurusan($data['id_jurusan']) ?></td>
                                    <td><?= $data['nama_siswa'] ?></td>
                                    <td><?= getGender($data['jenis_kelamin']) ?></td>
                                    <td><?= $data['agama'] ?></td>
                                    <td><?= $data['tempat'] ?></td>
                                    <td><?= $data['tgl_lahir'] ?></td>
                                    <td><?= $data['nama_orang_tua'] ?></td>
                                    <td><?= $data['alamat'] ?></td>
                                    <?php if ($auth['role'] == 1){ ?>
                                    <td>
                                        <a href="?page=siswaedit&id=<?= $data['nis'] ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> edit</a>
                                        <a href="?page=siswahapus&id=<?= $data['nis'] ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> hapus</a>
                                    </td>
                                    <?php } ?> 
                                </tr>
                            <?php $no++; } ?>
                        </tbody>
                    </table><br><br>
                </div>
            </div>
        </div>
    </div>
</div>