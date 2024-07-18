<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{route('admin')}}">Admin SINODE</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{route('admin')}}">SINODE</a>
        </div>
        <ul class="sidebar-menu">
            {{-- <li class="menu-header">Dashboard</li>
            <li><a class="nav-link" href="blank.html"><i class="fas fa-th"></i> <span>Dashboard</span></a></li> --}}

            <li class="menu-header">Dashboard</li>
            {{-- <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i>
                    <span>Data Master</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="components-article.html">Tahun Pelajaran</a></li>
                    <li><a class="nav-link" href="components-avatar.html">Tingkat</a></li>
                    <li><a class="nav-link" href="components-chat-box.html">Kelas</a></li>
                    <li><a class="nav-link" href="components-chat-box.html">Jenis Pembayaran</a></li>
                </ul>
            </li> --}}
            <li><a class="nav-link" href="{{route('admin')}}"><i class="fas fa-th"></i> <span>Dashboard</span></a></li>
            
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i>
                    <span>Data Survey</span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('memenuhi')}}">Memenuhi Syarat</a></li>
                    </ul>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('tidakMemenuhi')}}">Tidak Memenuhi Syarat</a></li>
                    </ul>
            </li>
            {{-- <li>
                <a href="{{route('form.index')}}"><i class="fas fa-book"></i>
                    <span>Form</span>
                </a>
            </li> --}}
            <li>
                <a href="{{route('gereja.index')}}"><i class="fas fa-church"></i>
                    <span>Gereja</span>
                </a>
            </li>
            <li>
                <a href="{{route('worship.index')}}"><i class="fas fa-pray"></i>
                    <span>Berdoa</span>
                </a>
            </li>
            <li>
                <a href="{{route('age.index')}}"><i class="fas fa-user"></i>
                    <span>Usia</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-chair"></i>
                    <span>Kursi</span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('kursi')}}">Kursi Gereja</a></li>
                </ul>
                {{-- <ul class="dropdown-menu">
                    <li><a href="">Set Kursi</a></li>
                </ul> --}}
            </li>
            {{-- <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i>
                    <span>Laporan</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="modules-calendar.html">Laporan Transaksi</a></li>
                </ul>
            </li> --}}
            {{-- <li class="nav-item dropdown">
                <a href="#" class=""><i class="fas fa-chair"></i>
                    <span>Kursi</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="modules-calendar.html">Profil Instalasi</a></li>
                </ul>
            </li> --}}

        </ul>

        {{-- <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
            </a>
        </div> --}}
    </aside>
</div>