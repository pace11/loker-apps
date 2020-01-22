<div class="panel panel-headline">
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-12">
                <div class="pull-left">
                    <h3 class="panel-title">Data Lowongan Pekerjaan Aktif</h3>
                    <p class="panel-subtitle"></p>
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
                                <th>Lokasi</th>
                                <th>Tanggal Mendaftar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $no = 1;
                                $q = mysqli_query($conn, "SELECT pendaftaran.id as id_daftar, lowongan.judul, lowongan.provinsi_id FROM pendaftaran
                                                        ");
                                while($data=mysqli_fetch_array($q)){
                            ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><span class="label label-success"><i class="fa fa-circle"></i> <?= $data['iddaftar'] ?></span></td>
                                    <td><?= $data['judul'] ?></td>
                                    <td><?= $data['nama'] ?></td>
                                    <td><?= date('d M Y', strtotime($data['tgl_daftar'])) ?></td>
                                </tr>
                            <?php $no++; }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>