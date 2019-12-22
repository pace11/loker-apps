<?php

$g = mysqli_query($conn, "SELECT * FROM tbl_user WHERE username='$_SESSION[username]'");
$auth = mysqli_fetch_array($g);

function getJurusan($params){
    switch ($params) {
        case 1:
            $nil = '<span class="label label-info">instalasi</span>';
            break;
        default:
            $nil = '<span class="label label-success">pembangkit</span>';
        break;
    }
    return $nil;
}

function getGender($params){
    switch ($params) {
        case 'L':
            $nil = '<span class="label label-primary"><i class="fa fa-male"></i> laki-laki</span>';
            break;
        default:
            $nil = '<span class="label label-warning"><i class="fa fa-female"></i> perempuan</span>';
        break;
    }
    return $nil;
}

function getStatusRemedial($params){
    switch ($params) {
        case 1:
            $nil = '<span class="label label-danger"><i class="fa fa-remove"></i> gagal</span>';
            break;
        default:
            $nil = '<span class="label label-success"><i class="fa fa-check"></i> lulus</span>';
        break;
    }
    return $nil;
}

function getStatusRapor($params){
    switch ($params) {
        case 1:
            $nil = '<span class="label label-danger">kurang baik</span>';
            break;
        case 2:
            $nil = '<span class="label label-warning">cukup baik</span>';
            break;
        case 3:
            $nil = '<span class="label label-primary">baik</span>';
            break;
        default:
            $nil = '<span class="label label-success">sangat baik</span>';
        break;
    }
    return $nil;
}

function idRemedial(){
    include "lib/koneksi.php";
    $get_id = mysqli_query($conn, "SELECT id_nilairemedial FROM tbl_nilairemedial WHERE SUBSTRING(id_nilairemedial,1,8)='REMEDIAL'") or die (mysqli_error($conn));
    $trim_id = mysqli_query($conn, "SELECT SUBSTRING(id_nilairemedial,-4,4) as hasil FROM tbl_nilairemedial WHERE SUBSTRING(id_nilairemedial,1,8)='REMEDIAL' ORDER BY hasil DESC LIMIT 1") or die (mysqli_error($conn));
    $hit    = mysqli_num_rows($get_id);
    if ($hit == 0){
        $id_k   = "REMEDIAL0001";
    } else if ($hit > 0){
        $row    = mysqli_fetch_array($trim_id);
        $kode   = $row['hasil']+1;
        $id_k   = "REMEDIAL".str_pad($kode,4,"0",STR_PAD_LEFT);
    }
    return $id_k;
}

function idRapor(){
    include "lib/koneksi.php";
    $get_id = mysqli_query($conn, "SELECT id_rapor FROM tbl_rapor WHERE SUBSTRING(id_rapor,1,5)='RAPOR'") or die (mysqli_error($conn));
    $trim_id = mysqli_query($conn, "SELECT SUBSTRING(id_rapor,-4,4) as hasil FROM tbl_rapor WHERE SUBSTRING(id_rapor,1,5)='RAPOR' ORDER BY hasil DESC LIMIT 1") or die (mysqli_error($conn));
    $hit    = mysqli_num_rows($get_id);
    if ($hit == 0){
        $id_k   = "RAPOR0001";
    } else if ($hit > 0){
        $row    = mysqli_fetch_array($trim_id);
        $kode   = $row['hasil']+1;
        $id_k   = "RAPOR".str_pad($kode,4,"0",STR_PAD_LEFT);
    }
    return $id_k;
}

function idKehadiran(){
    include "lib/koneksi.php";
    $get_id = mysqli_query($conn, "SELECT id_kehadiran FROM tbl_kehadiran WHERE SUBSTRING(id_kehadiran,1,9)='KEHADIRAN'") or die (mysqli_error($conn));
    $trim_id = mysqli_query($conn, "SELECT SUBSTRING(id_kehadiran,-4,4) as hasil FROM tbl_kehadiran WHERE SUBSTRING(id_kehadiran,1,9)='KEHADIRAN' ORDER BY hasil DESC LIMIT 1") or die (mysqli_error($conn));
    $hit    = mysqli_num_rows($get_id);
    if ($hit == 0){
        $id_k   = "KEHADIRAN0001";
    } else if ($hit > 0){
        $row    = mysqli_fetch_array($trim_id);
        $kode   = $row['hasil']+1;
        $id_k   = "KEHADIRAN".str_pad($kode,4,"0",STR_PAD_LEFT);
    }
    return $id_k;
}

function idKepribadian(){
    include "lib/koneksi.php";
    $get_id = mysqli_query($conn, "SELECT id_kepribadian FROM tbl_kepribadian WHERE SUBSTRING(id_kepribadian,1,11)='KEPRIBADIAN'") or die (mysqli_error($conn));
    $trim_id = mysqli_query($conn, "SELECT SUBSTRING(id_kepribadian,-4,4) as hasil FROM tbl_kepribadian WHERE SUBSTRING(id_kepribadian,1,11)='KEPRIBADIAN' ORDER BY hasil DESC LIMIT 1") or die (mysqli_error($conn));
    $hit    = mysqli_num_rows($get_id);
    if ($hit == 0){
        $id_k   = "KEPRIBADIAN0001";
    } else if ($hit > 0){
        $row    = mysqli_fetch_array($trim_id);
        $kode   = $row['hasil']+1;
        $id_k   = "KEPRIBADIAN".str_pad($kode,4,"0",STR_PAD_LEFT);
    }
    return $id_k;
}

function idKesehatanfisik(){
    include "lib/koneksi.php";
    $get_id = mysqli_query($conn, "SELECT id_kesehatanfisik FROM tbl_kesehatanfisik WHERE SUBSTRING(id_kesehatanfisik,1,8)='KESFISIK'") or die (mysqli_error($conn));
    $trim_id = mysqli_query($conn, "SELECT SUBSTRING(id_kesehatanfisik,-4,4) as hasil FROM tbl_kesehatanfisik WHERE SUBSTRING(id_kesehatanfisik,1,8)='KESFISIK' ORDER BY hasil DESC LIMIT 1") or die (mysqli_error($conn));
    $hit    = mysqli_num_rows($get_id);
    if ($hit == 0){
        $id_k   = "KESFISIK0001";
    } else if ($hit > 0){
        $row    = mysqli_fetch_array($trim_id);
        $kode   = $row['hasil']+1;
        $id_k   = "KESFISIK".str_pad($kode,4,"0",STR_PAD_LEFT);
    }
    return $id_k;
}

function idWawancara(){
    include "lib/koneksi.php";
    $get_id = mysqli_query($conn, "SELECT id_wawancara FROM tbl_wawancara WHERE SUBSTRING(id_wawancara,1,9)='WAWANCARA'") or die (mysqli_error($conn));
    $trim_id = mysqli_query($conn, "SELECT SUBSTRING(id_wawancara,-4,4) as hasil FROM tbl_wawancara WHERE SUBSTRING(id_wawancara,1,9)='WAWANCARA' ORDER BY hasil DESC LIMIT 1") or die (mysqli_error($conn));
    $hit    = mysqli_num_rows($get_id);
    if ($hit == 0){
        $id_k   = "WAWANCARA0001";
    } else if ($hit > 0){
        $row    = mysqli_fetch_array($trim_id);
        $kode   = $row['hasil']+1;
        $id_k   = "WAWANCARA".str_pad($kode,4,"0",STR_PAD_LEFT);
    }
    return $id_k;
}

?>