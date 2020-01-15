<div class="panel panel-headline">
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-12">
                <div class="pull-left">
                    <h3 class="panel-title">Pilih Lowongan Pekerjaan</h3>
                    <p class="panel-subtitle"></p>
                </div>
            </div>
        </div>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-warning" role="alert">
					Apakah anda yakin ingin untuk memilih lowongan pekerjaan ini ?
                    <form action="?page=lokeradd" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                        <input type="hidden" name="user_id" value="<?= $auth['id'] ?>">
                        <input type="submit" name="submit" class="btn btn-danger" value="Ya">
                        <a href="?page=loker" class="btn btn-primary">Tidak</a>
                    </form>
                </div>
                <?php 
                if (isset($_POST['submit'])){
                    $id = $_POST['id'];
                    $userid = $_POST['user_id'];
                    $delete = mysqli_query($conn, "DELETE FROM lowongan WHERE id='$id'");
                    if ($delete) {
                        echo    '<div class="alert alert-success" role="alert">'.
                                    '<i class="fa fa-check-circle"></i> Data berhasil dihapus'.
                                '</div>';
                        echo "<meta http-equiv='refresh' content='1;
                        url=?page=loker'>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>