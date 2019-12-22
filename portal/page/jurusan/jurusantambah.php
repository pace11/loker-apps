<div class="panel panel-headline">
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-12">
                <div class="pull-left">
                    <h3 class="panel-title">Tambah Data Jurusan</h3>
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
                <form action="?page=jurusantambahpro" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div clas="form-group">
                                <label>Id Jurusan</label>
                                <input type="text" class="form-control" name="id_jurusan" placeholder="masukkan id jurusan ..." autocomplete="OFF" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div clas="form-group">
                                <label>Nama Jurusan</label>
                                <input type="text" class="form-control" name="nama_jurusan" placeholder="masukkan nama jurusan ..." autocomplete="OFF" required>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="panel-footer">
        <input type="submit" name="submit" class="btn btn-primary" value="simpan">
        <a href="?page=jurusan" class="btn btn-default">kembali</a>
    </div>
    </form>
</div>