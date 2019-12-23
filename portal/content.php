<?php 

switch($_SESSION['role']){
    case 1:
        if (isset($_GET['page'])) $page=$_GET['page'];
        else $page="beranda";

        if ($page == "beranda")                 include("page/beranda.php");
        elseif ($page == "logout")              include("page/logout.php");

        else "Halaman tidak ditemukan";
    default:
        if (isset($_GET['page'])) $page=$_GET['page'];
        else $page="pendaftar/beranda";

        if ($page == "beranda")                 include("page/pendaftar/beranda.php");
        elseif ($page == "logout")              include("page/logout.php");

        //------------------------------------ PROFIL ------------------------------------
        elseif ($page == 'profil')              include("page/pendaftar/profil/profil.php");

        else include("page/404.php");
        
}

?>