<div class="panel panel-headline">
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-12">
                <div class="pull-left">
                    <h3 class="panel-title">Manajemen Kriteria</h3>
                    <p class="panel-subtitle"></p>
                </div>
                <div class="pull-right">
                    <a href="?page=kriteriatambah" class="btn btn-primary"><i class="fa fa-plus-circle"></i> tambah data</a>
                </div>
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
                                <th>Id Kriteria</th>
                                <th>Nama Kriteria</th>
                                <th>Nilai Terbobot</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            $q = mysqli_query($conn, "SELECT * FROM tbl_kriteria");
                            while($data=mysqli_fetch_array($q)){ ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><span class="label label-info"><?= $data['id_kriteria'] ?></span></td>
                                    <td><?= $data['nama_kriteria'] ?></td>
                                    <td><?= $data['nilai_terbobot']?>%</td>
                                    <td>
                                        <a href="?page=kriteriaedit&id=<?= $data['id_kriteria'] ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> edit</a>
                                        <a href="?page=kriteriahapus&id=<?= $data['id_kriteria'] ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> hapus</a>
                                    </td>
                                </tr>
                            <?php $no++; } ?>
                        </tbody>
                    </table><br><br>
                </div>
            </div>
        </div>
    </div>
</div>