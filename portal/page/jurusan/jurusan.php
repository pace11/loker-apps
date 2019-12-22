<div class="panel panel-headline">
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-12">
                <div class="pull-left">
                    <h3 class="panel-title">Manajemen Data Jurusan</h3>
                    <p class="panel-subtitle"></p>
                </div>
                <?php if ($auth['role'] == 1){ ?>
                <div class="pull-right">
                    <a href="?page=jurusantambah" class="btn btn-primary"><i class="fa fa-plus-circle"></i> tambah data</a>
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
                                <th>Id Jurusan</th>
                                <th>Nama Jurusan</th>
                                <?php if ($auth['role'] == 1){ ?>
                                <th>Aksi</th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            $q = mysqli_query($conn, "SELECT * FROM tbl_jurusan");
                            while($data=mysqli_fetch_array($q)){ ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $data['id_jurusan'] ?></td>
                                    <td><?= $data['nama_jurusan'] ?></td>
                                    <?php if ($auth['role'] == 1){ ?>
                                    <td>
                                        <a href="?page=jurusanedit&id=<?= $data['id_jurusan'] ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> edit</a>
                                        <a href="?page=jurusanhapus&id=<?= $data['id_jurusan'] ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> hapus</a>
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