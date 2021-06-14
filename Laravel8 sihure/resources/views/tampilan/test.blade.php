<!DOCTYPE html>

<?php $divisi = Auth::user()->divisi; ?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/adminLTE/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/adminLTE/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

        <!-- NAVBAR -->
        <nav class="main-header navbar navbar-expand navbar-light" style="background-color: #C0CEEA;">
            <!-- Left navbar links -->

            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <!-- <li class="nav-item ">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }} " href="/">Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ request()->is('admin') ? 'active' : '' }}" href="/admin">Admin</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="/about">About</a>
                </li> -->
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->

                {{-- <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li> --}}

                <!-- Messages Dropdown Menu -->
                <!-- <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li> -->

                <li class="nav-item">
                    <div class="user-panel d-flex">
                        <div class="image">
                            @if (Auth::user()->foto == null)
                            <img src="{{ url('/foto/3.png') }}" class="img-circle elevation-1" alt="User Image">
                            @else
                            <img src="{{ url('/foto/' . Auth::user()->foto ) }}" class="img-circle elevation-1" alt="User Image">
                            @endif
                        </div>
                        <div class="info">
                            <a class="d-block" style="color:#525A63; font-weight:strong; font-size:20px;">{{ Auth::user()->name }}</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.553 6.776a.5.5 0 0 1 .67-.223L8 9.44l5.776-2.888a.5.5 0 1 1 .448.894l-6 3a.5.5 0 0 1-.448 0l-6-3a.5.5 0 0 1-.223-.67z" />
                        </svg>

                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                        <a class="dropdown-item" href="/profile">
                            {{ __('Profile') }}
                        </a>

                        {{-- @if ($divisi == 'karyawan')
                        <a class="dropdown-item" href="/karyawan/profile">
                            {{ __('Profile') }}
                        </a>

                        @elseif ( $divisi == 'hr')
                        <a class="dropdown-item" href="/hr/profile">
                            {{ __('Profile') }}
                        </a>

                        @elseif ( $divisi == 'admin')
                        <a class="dropdown-item" href="/admin/profile">
                            {{ __('Profile') }}
                        </a>
                        @endif --}}

                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>


                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>

                <!-- Notifications Dropdown Menu -->
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li> -->


                <!-- <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>  -->
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #525A63;">

            <!-- Sidebar -->
            <div class="sidebar">
                <div class="user-panel mt-0 pb-0 mb-3 d-flex" style="font-weight: stronger; font-size:36px;">
                    <div class="image">
                        <img src="{{ '/foto/logoSIHURE.png' }}" class="img-circle " alt="User Image">
                    </div>
                    <div class="info">
                        <a href="/home" class="d-block">SIHURE</a>
                    </div>
                </div>
                <!-- Sidebar user (optional) -->
                <!-- <div class="user-panel mt-1 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="/adminLTE/dist/img/3.png" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                        </div>
                    </div> -->

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        @if ($divisi == 'karyawan')
                        <li class="nav-item">
                            <a href="#" class="nav-link {{ request()->is('karyawan/absensi' || 'karyawan/cuti' || 'karyawan/lembur' || 'karyawan/karyawan' || 'karyawan/gaji') ? '' : 'active' }}">
                                <p>
                                    karyawan
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/karyawan/absensi" class="nav-link {{ request()->is('karyawan/absensi') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Absensi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/karyawan/cuti" class="nav-link {{ request()->is('karyawan/cuti') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Cuti</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/karyawan/lembur" class="nav-link {{ request()->is('karyawan/lembur') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Lembur</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/karyawan/karyawan" class="nav-link {{ request()->is('karyawan/karyawan') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Karyawan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/karyawan/gaji" class="nav-link {{ request()->is('karyawan/gaji') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Gaji</p>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        @elseif ( $divisi == 'hr')
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <p>
                                    Human Resource
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/hr/absensi" class="nav-link {{ request()->is('hr/absensi') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Absensi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Cuti
                                        </p>
                                        <i class="right fas fa-angle-left"></i>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item ml-4">
                                            <a href="/hr/jatahcuti" class="nav-link {{ request()->is('hr/jatahcuti') ? 'active' : '' }}">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Jatah Cuti</p>
                                            </a>
                                        </li>
                                        <li class="nav-item ml-4">
                                            <a href="/hr/cuti" class="nav-link {{ request()->is('hr/cuti') ? 'active' : '' }}">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Status Cuti</p>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="/hr/karyawan" class="nav-link {{ request()->is('hr/karyawan') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Karyawan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/hr/lembur" class="nav-link {{ request()->is('hr/lembur') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Lembur</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Penggajian
                                        </p>
                                        <i class="right fas fa-angle-left"></i>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <!-- <li class="nav-item ml-4">
                                            <a href="/hr/masterdataGaji" class="nav-link {{ request()->is('hr/jatahcuti') ? 'active' : '' }}">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Master Data Gaji</p>
                                            </a>
                                        </li> -->
                                        <li class="nav-item ml-4">
                                            <a href="/hr/penggajian" class="nav-link {{ request()->is('hr/cuti') ? 'active' : '' }}">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Gaji Karyawan</p>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                        </li>

                        @elseif ( $divisi == 'admin')
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <p>
                                    Admin
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/profile" class="nav-link {{ request()->is('/profile') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Profile</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/cuti" class="nav-link {{ request()->is('admin/cuti') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Cuti Karyawan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/lembur" class="nav-link {{ request()->is('admin/lembur') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Lembur</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/karyawan" class="nav-link {{ request()->is('admin/karyawan') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Karyawan</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endif


                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->

            <!-- Main content -->
            <section class="content">

                <h6 style="text-align:right;color:#525A63;font-size:14px;"><span id="tanggal"></span></h6>
                <h6 style="text-align:right;color:#525A63;font-size:14px;"><span id="waktu"></span></h6>
                <script>
                    var tw = new Date();
                    if (tw.getTimezoneOffset() == 0)(a = tw.getTime() + (7 * 60 * 60 * 1000))
                    else(a = tw.getTime());
                    tw.setTime(a);
                    var tahun = tw.getFullYear();
                    var hari = tw.getDay();
                    var bulan = tw.getMonth();
                    var tanggal = tw.getDate();
                    var hariarray = new Array("Minggu,", "Senin,", "Selasa,", "Rabu,", "Kamis,", "Jum'at,", "Sabtu,");
                    var bulanarray = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September",
                        "Oktober", "Nopember", "Desember");
                    document.getElementById("tanggal").innerHTML = hariarray[hari] + " " + tanggal + " " + bulanarray[bulan] + " " +
                        tahun;

                    var dt = new Date();
                    document.getElementById("waktu").innerHTML = dt.toLocaleTimeString();
                </script>
                @yield('content')



            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!--
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.1.0
            </div>
            <strong>Copyright &copy; 2014-2021 Made by <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" class="bi bi-suit-heart-fill" viewBox="0 0 16 16">
                    <path
                        d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z" />
                </svg>.</strong> All rights
            reserved.
        </footer> -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="/adminLTE/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/adminLTE/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/adminLTE/dist/js/demo.js"></script>
</body>

</html>
