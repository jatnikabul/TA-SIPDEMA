<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/adminlte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Admin</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="javascript:void(0)">
                    <i class="fa fa-user"></i>
                    <span>User</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.penduduk.index') }}">
                    <i class="fa fa-users"></i>
                    <span>Penduduk</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)">
                    <i class="fa fa-home"></i>
                    <span>Desa</span>
                </a>
            </li>
            <li class="treeview">
                <a href="javascript:void(0)">
                    <i class="fa fa-envelope"></i>
                    <span>Surat</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.surat.surat-kematian.index') }}"><i class="fa fa-circle-o"></i> Surat Keterangan Kematian </a></li>
                    <li><a href="{{ route('admin.surat.surat-kelahiran.index') }}"><i class="fa fa-circle-o"></i> Surat Keterangan Kelahiran </a></li>
                    <li><a href="{{ route('admin.surat.surat-keramaian.index') }}"><i class="fa fa-circle-o"></i> Surat Ijin Keramaian </a></li>
                    <li><a href="{{ route('admin.surat.surat-tidak-mampu.index') }}"><i class="fa fa-circle-o"></i> Surat Keterangan Tidak Mampu </a></li>
                    <li><a href="{{ route('admin.surat.surat-skck.index') }}"><i class="fa fa-circle-o"></i> Surat Pengantar SKCK </a></li>
                    <li><a href="{{ route('admin.surat.surat-usaha.index') }}"><i class="fa fa-circle-o"></i> Surat Keterangan Usaha </a></li>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="javascript:void(0)">
                    <i class="fa fa-file"></i>
                    <span>Laporan</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.laporan.surat-masuk.index') }}"><i class="fa fa-circle-o"></i> Surat Masuk</a></li>
                    <li><a href="{{ route('admin.laporan.surat-keluar.index') }}"><"><i class="fa fa-circle-o"></i> Surat Keluar</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>