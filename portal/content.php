<?php 
if (isset($_GET['page'])) $page=$_GET['page'];
else $page="beranda";

if ($page == "beranda")                 include("page/beranda.php");
elseif ($page == "logout")              include("page/logout.php");

    // -------------------------- siswa --------------------------
    elseif ($page == "siswa")                        include("page/siswa/siswa.php");
    elseif ($page == "siswatambah")                  include("page/siswa/siswatambah.php");
    elseif ($page == "siswatambahpro")               include("page/siswa/siswatambahpro.php");
    elseif ($page == "siswaedit")                    include("page/siswa/siswaedit.php");
    elseif ($page == "siswaeditpro")                 include("page/siswa/siswaeditpro.php");
    elseif ($page == "siswahapus")                   include("page/siswa/siswahapus.php");

    // -------------------------- guru --------------------------
    elseif ($page == "guru")                         include("page/guru/guru.php");
    elseif ($page == "gurutambah")                   include("page/guru/gurutambah.php");
    elseif ($page == "gurutambahpro")                include("page/guru/gurutambahpro.php");
    elseif ($page == "guruedit")                     include("page/guru/guruedit.php");
    elseif ($page == "gurueditpro")                  include("page/guru/gurueditpro.php");
    elseif ($page == "guruhapus")                    include("page/guru/guruhapus.php");

    // -------------------------- kriteria --------------------------
    elseif ($page == "kriteria")                     include("page/kriteria/kriteria.php");
    elseif ($page == "kriteriatambah")               include("page/kriteria/kriteriatambah.php");
    elseif ($page == "kriteriatambahpro")            include("page/kriteria/kriteriatambahpro.php");
    elseif ($page == "kriteriaedit")                 include("page/kriteria/kriteriaedit.php");
    elseif ($page == "kriteriaeditpro")              include("page/kriteria/kriteriaeditpro.php");
    elseif ($page == "kriteriahapus")                include("page/kriteria/kriteriahapus.php");

    // -------------------------- jurusan --------------------------
    elseif ($page == "jurusan")                      include("page/jurusan/jurusan.php");
    elseif ($page == "jurusantambah")                include("page/jurusan/jurusantambah.php");
    elseif ($page == "jurusantambahpro")             include("page/jurusan/jurusantambahpro.php");
    elseif ($page == "jurusanedit")                  include("page/jurusan/jurusanedit.php");
    elseif ($page == "jurusaneditpro")               include("page/jurusan/jurusaneditpro.php");
    elseif ($page == "jurusanhapus")                 include("page/jurusan/jurusanhapus.php");

    // -------------------------- proses --------------------------
    elseif ($page == "datasiswapjb")                 include("page/proses/datasiswapjb.php");

    // -------------------------- grafik remedial --------------------------
    elseif ($page == "grafikremedialtambahpro")      include("page/proses/grafikremedial/grafikremedialtambahpro.php");
    elseif ($page == "grafikremedialedit")           include("page/proses/grafikremedial/grafikremedialedit.php");
    elseif ($page == "grafikremedialeditpro")        include("page/proses/grafikremedial/grafikremedialeditpro.php");
    elseif ($page == "grafikremedialhapus")          include("page/proses/grafikremedial/grafikremedialhapus.php");

    // -------------------------- rapor --------------------------
    elseif ($page == "raportambahpro")               include("page/proses/rapor/raportambahpro.php");
    elseif ($page == "raporedit")                    include("page/proses/rapor/raporedit.php");
    elseif ($page == "raporeditpro")                 include("page/proses/rapor/raporeditpro.php");
    elseif ($page == "raporhapus")                   include("page/proses/rapor/raporhapus.php"); 

    // -------------------------- kehadiran --------------------------
    elseif ($page == "kehadirantambahpro")           include("page/proses/kehadiran/kehadirantambahpro.php");
    elseif ($page == "kehadiranedit")                include("page/proses/kehadiran/kehadiranedit.php");
    elseif ($page == "kehadiraneditpro")             include("page/proses/kehadiran/kehadiraneditpro.php");
    elseif ($page == "kehadiranhapus")               include("page/proses/kehadiran/kehadiranhapus.php");
    
    // -------------------------- kepribadian --------------------------
    elseif ($page == "kepribadiantambahpro")         include("page/proses/kepribadian/kepribadiantambahpro.php");
    elseif ($page == "kepribadianedit")              include("page/proses/kepribadian/kepribadianedit.php");
    elseif ($page == "kepribadianeditpro")           include("page/proses/kepribadian/kepribadianeditpro.php");
    elseif ($page == "kepribadianhapus")             include("page/proses/kepribadian/kepribadianhapus.php");

    // -------------------------- kesehatan & fisik --------------------------
    elseif ($page == "kesehatanfisiktambahpro")      include("page/proses/kesehatanfisik/kesehatanfisiktambahpro.php");
    elseif ($page == "kesehatanfisikedit")           include("page/proses/kesehatanfisik/kesehatanfisikedit.php");
    elseif ($page == "kesehatanfisikeditpro")        include("page/proses/kesehatanfisik/kesehatanfisikeditpro.php");
    elseif ($page == "kesehatanfisikhapus")          include("page/proses/kesehatanfisik/kesehatanfisikhapus.php");

    // -------------------------- wawancara --------------------------
    elseif ($page == "wawancaratambahpro")           include("page/proses/wawancara/wawancaratambahpro.php");
    elseif ($page == "wawancaraedit")                include("page/proses/wawancara/wawancaraedit.php");
    elseif ($page == "wawancaraeditpro")             include("page/proses/wawancara/wawancaraeditpro.php");
    elseif ($page == "wawancarahapus")               include("page/proses/wawancara/wawancarahapus.php");

    // -------------------------- metode --------------------------
    elseif ($page == "metode")                       include("page/metode/metode.php");
    elseif ($page == "hasil")                        include("page/metode/hasil.php");





    else "Halaman tidak ditemukan";
?>