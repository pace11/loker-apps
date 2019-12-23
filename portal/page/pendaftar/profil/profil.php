<div class="panel panel-headline">
    <div class="panel-body">
        <div class="row">
            <div class="col-md-5">
                <div class="profile-header">
                    <div class="overlay"></div>
                    <div class="profile-main">
                        <img src="<?= $auth['image_url'] !== null ? $auth['image_url'] : 'assets/img/admin.png'  ?>" class="img-circle" width="100" alt="<?= $nama ?>">
                        <h3 class="name"><?= $auth['nama_lengkap'] !== null ? $auth['nama_lengkap'] : $auth['email'] ?></h3>
                        <span class="online-status status-available">Aktif</span>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <form action="?page=profiledit" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $auth['id'] ?>">
                    <div class="row">
                        <div class="col-md-12">
                            <div clas="form-group">
                                <label>Nama Lengkap</label>
                                <input class="form-control" type="text" name="namalengkap" placeholder="isikan nama lengkap anda ..." value="<?= $auth['nama_lengkap'] ?>" autocomplete="OFF">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div clas="form-group">
                                <label>Tanggal Lahir</label>
                                <input class="form-control" type="date" name="tgllahir" placeholder="isikan nama lengkap anda ..." value="<?= date('Y-m-d', strtotime($auth['tgl_lahir'])) ?>" autocomplete="OFF">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div clas="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" name="alamat"><?= $auth['alamat'] ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div clas="form-group">
                                <label>Jenis Kelamin</label>
                                <select class="form-control" name="jeniskelamin">
                                    <option style="display:none;">-- pilih salah satu --</option>
                                    <option value="L" <?= $auth['jenis_kelamin'] == 'L' ? 'selected' : '' ?>>Laki-Laki</option>
                                    <option value="P" <?= $auth['jenis_kelamin'] == 'P' ? 'selected' : '' ?>>Perempuan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div clas="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="email" placeholder="isikan alamat email anda ..." value="<?= $auth['email'] ?>" autocomplete="OFF">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div clas="form-group">
                                <label>No HP</label>
                                <input class="form-control" type="text" name="nohp" placeholder="isikan no hp anda ..." value="<?= $auth['no_hp'] ?>" maxlength="12" autocomplete="OFF">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>