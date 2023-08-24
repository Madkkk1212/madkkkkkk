<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                <i class="fa-solid fa-code"></i>
                </div>
                <div class="sidebar-brand-text mx-3">madk <sup>2</sup></div>
                
            </a>
       

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
             </li>
             
            <?php if (in_groups('admin')) : ?>
             <!-- divider -->
             <hr class="sidebar-diveder">
            <div class="sidebar-heading">
            <font color="red">USER LIST</font><br>
            </div>
            <!-- Nav Item - DATA USER -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin'); ?>">
                <i class="fas fa-users"></i>
                    <span>DATA USER</span></a>
            </li>
            <?php endif ?>

            <!-- heading -->
            <div class="sidebar-heading">
            <font color="red">MENU UTAMA</font><br>
            </div>
            </li>
            <!-- Nav Item - DATA PENJUALAN -->
            <li class="nav-item">
                <a class="nav-link" href="/datapenjualan">
                <i class="fas fa-chart-area"></i>
                    <span>DATA PENJUALAN</span></a>
            </li>

            <!-- Nav Item - DATA PERSEDIAAN -->
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
                    aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>DATA PERSEDIAAN</span>
                </a>
                <div id="collapsePages" class="collapse show" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/datamasuk">Data Masuk</a>
                        <a class="collapse-item" href="/datakeluar">Data keluar</a>
                        <a class="collapse-item" href="/datapersediaan">Data Persediaan</a>
                    </div>
                </div>
            </li>


            <!-- Nav Item - DATA PELANGGAN -->
            <li class="nav-item">
                <a class="nav-link" href="/datapelanggan">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>DATA PELANGGAN</span></a>
            </li>

            <!-- Nav Item - DISTRIBUTOR -->
            <li class="nav-item">
                <a class="nav-link" href="/distributor/index">
                    <i class="fas fa-fw fa-chart-area"></i>
                     <span>DISTRIBUTOR</span></a>
            </li>


            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>