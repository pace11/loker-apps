<?php 

switch($_SESSION['role']){
    case 1:
        if (isset($_GET['page'])) $page=$_GET['page'];
        else $page="admin/beranda";

        if ($page == "beranda")                 include("page/admin/beranda.php");
        elseif ($page == "logout")              include("page/logout.php");

        //------------------------------------ PROFIL ------------------------------------
        elseif ($page == 'profil')              include("page/admin/profil/profil.php");

        //------------------------------------ LOKER ------------------------------------
        elseif ($page == 'loker')               include("page/admin/loker/loker.php");
        elseif ($page == 'lokeradd')            include("page/admin/loker/lokeradd.php");
        elseif ($page == 'lokeraddpro')         include("page/admin/loker/lokeraddpro.php");
        elseif ($page == 'lokeredit')           include("page/admin/loker/lokeredit.php");
        elseif ($page == 'lokereditpro')        include("page/admin/loker/lokereditpro.php");
        elseif ($page == 'lokerdelete')         include("page/admin/loker/lokerdelete.php");

        //------------------------------------ USER ------------------------------------
        elseif ($page == 'user')                include("page/admin/user/user.php");
        elseif ($page == 'userdetail')          include("page/admin/user/userdetail.php");

        else include("page/404.php");
    break;
    default:
        if (isset($_GET['page'])) $page=$_GET['page'];
        else $page="pendaftar/beranda";

        if ($page == "beranda")                 include("page/pendaftar/beranda.php");
        elseif ($page == "logout")              include("page/logout.php");

        //------------------------------------ PROFIL ------------------------------------
        elseif ($page == 'profil')              include("page/pendaftar/profil/profil.php");

        //------------------------------------ LOKER ------------------------------------
        elseif ($page == 'loker')               include("page/pendaftar/loker/loker.php");
        elseif ($page == 'lokeradd')            include("page/pendaftar/loker/lokeradd.php");
        elseif ($page == 'lokeractive')         include("page/pendaftar/loker/lokeractive.php");

        else include("page/404.php");
    break;
}

?>