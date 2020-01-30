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
                                <th>Tanggal Pendaftaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $no = 1;
                                $q = mysqli_query($conn, "SELECT pendaftaran.id AS id, lowongan.judul AS judul_lowongan, pendaftaran.tgl_daftar AS tanggal_daftar FROM pendaftaran
                                                        JOIN lowongan ON pendaftaran.lowongan_id=lowongan.id
                                                        WHERE pendaftaran.user_id='$auth[id]'");
                                while($data=mysqli_fetch_array($q)){
                            ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><span class="label label-success"><i class="fa fa-circle"></i> <?= $data['id'] ?></span></td>
                                    <td><?= $data['judul_lowongan'] ?></td>
                                    <td><?= date('d M Y', strtotime($data['tanggal_daftar'])) ?></td>
                                </tr>
                            <?php $no++; }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>