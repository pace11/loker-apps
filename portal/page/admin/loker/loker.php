<div class="panel panel-headline">
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-12">
                <div class="pull-left">
                    <h3 class="panel-title">Data Lowongan Pekerjaan</h3>
                    <p class="panel-subtitle"></p>
                </div>
                <div class="pull-right">
                    <a href="?page=kategoritambah" class="btn btn-primary"><i class="fa fa-plus-circle"></i> tambah data</a>
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
                                <th>ID</th>
                                <th>Judul</th>
                                <th>Tipe</th>
                                <th>Mulai Pendaftaran</th>
                                <th>Akhir Pendaftaran</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            $q = mysqli_query($conn, "SELECT * FROM lowongan
                                                    JOIN provinsi ON lowongan.provinsi_id=provinsi.id");
                            while($data=mysqli_fetch_array($q)){ ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><span class="label label-success"><?= $data['id'] ?></span></td>
                                    <td><?= $data['judul'] ?></td>
                                    <td><?= $data['tipe'] ?></td>
                                    <td><?= date('d F Y', strtotime($data['mulai_pendaftaran'])) ?></td>
                                    <td><?= date('d F Y', strtotime($data['akhir_pendaftaran'])) ?></td>
                                    <td>
                                        <a href="?page=lokeredit&id=<?= $data['id'] ?>" class="btn btn-info"><i class="fa fa-edit"></i> edit</a>
                                        <a href="?page=lokerdelete&id=<?= $data['id'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i> hapus</a>
                                    </td>
                                </tr>
                            <?php $no++; } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>