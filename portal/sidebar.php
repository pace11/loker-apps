<div id="sidebar-nav" class="sidebar">
	<div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li><a href="?page=beranda" class=""><i class="fa fa-home"></i> <span>Beranda</span></a></li>
                <?php if ($_SESSION['role'] == 1) { ?>
                <li>
                    <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="fa fa-cogs"></i> <span>Manajemen</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="subPages" class="collapse ">
                        <ul class="nav">
                            <li><a href="?page=loker" class="">Lowongan Pekerjaan</a></li>
                            <li><a href="?page=user" class="">Data User Pendaftar</a></li>
                        </ul>
                    </div>
                </li>
                <?php } ?>
                <?php if ($_SESSION['role'] == 2) { ?>
                <li><a href="?page=loker" class=""><i class="fa fa-briefcase"></i> <span>Lowongan Pekerjaan</span></a></li>
                <?php } ?>
            </ul>
        </nav>
    </div>
</div>