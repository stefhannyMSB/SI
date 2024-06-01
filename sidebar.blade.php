<ul class="navbar-nav bg-secondary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="login/index">
        <div class="sidebar-brand-icon rotate-n-0">
            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
        </div>
        <div class="sidebar-brand-text mx-3"> SI AKADEMIK </div>
    </a>
    <!-- Sidebar - Brand -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/dashboard">
            <i class="fa fa-align-justify" aria-hidden="true"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="{{ route ('pegawai.index') }}">
            <i class="fa fa-user" aria-hidden="true"></i>
            <span>Data Pegawai</span></a>
            <div>

            </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route ('murid.index') }}">
            <i class="fa fa-user" aria-hidden="true"></i>
            <span>Data Siswa</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route ('walimurid.index') }}">
            <i class="fa fa-user" aria-hidden="true"></i>
            <span>Data Walimurid</span></a>
    </li>
    <li class="nav-item">
        {{-- route untuk memanggil nama route --}}
        <a class="nav-link" href="{{ route ('guru.index') }}">
            <i class="fa fa-user" aria-hidden="true"></i>
            <span>Data Guru</span></a>
    </li>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Data Master</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                {{-- <a class="collapse-item" href="{{ route('akademik')}}">Tahun Akademik</a> --}}
                <a class="collapse-item" href="{{ route ('matapelajaran.index')}}">Mata Pelajaran</a>
                <a class="collapse-item" href="{{ route ('kelas.index')}}">Kelas</a>
                <!-- <a class="collapse-item" href="{{ route('jurusan.index') }}">Jurusan</a> -->
            </div>
        </div>

    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('jadwal.index') }}">
            <i class="fa fa-calendar" aria-hidden="true"></i>
            <span>Jadwal Pelajaran</span></a>
    </li>
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <!-- Divider -->
        <hr class="sidebar-divider">
</ul>
</ul>
