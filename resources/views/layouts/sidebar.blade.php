<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 fixed-">
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3  d-flex">
      <div class="image">
        <img src="{{ asset ('img/Iconklinik.jpeg') }}" class="rounded mx-auto d-block" alt="Icon Klinik">
      </div>
      <div class="info">
        <a href="" class="d-block"><b>BUNDA SETIA</b></a>
      </div>
    </div>
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel pb-3 d-flex">
        
        <div class="info">
          <a href="" class="d-block"><h6>{{  Auth::user()->name }}</h6></a> 
          <a href="" class="d-block">{{  Auth::user()->level }}</a>  
        </div>
      </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
        <li class="nav-item ">
          <p class="fw-bold mt-1 text-light">Menu</p>
        </li>
        <li class="nav-item ">
          <a href="/dashboard" class="nav-link">
            <i class="fas fa-tachometer-alt nav-icon"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        @can('level')
            <li class="nav-item">
              <a href="/tambah-data-pasien" class="nav-link">
                <i class="fas fa-user-plus nav-icon"></i></i>
                <p>Tambah data Pasien</p>
              </a>
            </li>
          @endcan
        <li class="nav-item">
          <a href="/data-pasien" class="nav-link">
            <i class="fas fa-folder-plus nav-icon"></i>
            <p>
              Data Pasien
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/data-kunjungan-pasien" class="nav-link">
            <i class="fas fa-user-friends nav-icon"></i>
            <p>
             Data Kunjungan 
            </p>
          </a>
        </li>
        {{-- <li class="nav-item menu-open">
          <a href="#" class="nav-link">
            <i class="fas fa-stethoscope nav-icon"></i>
            <p>
              Data Rekam Medis
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/data-rekam-medis-pasien-pemeriksaan-umum" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Pemeriksaan Umum</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/data-rekam-medis-pasien-persalinan" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Persalinan</p>
              </a>
            </li>
          </ul>
        </li> --}}
        @can('level')
        <li class="nav-item">
          <a href="/data-user" class="nav-link">
            <i class="fas fa-hospital-user nav-icon"></i>
            <p>
              Data User
            </p>
          </a>
        </li>
        <li class="nav-item">
          <p class="fw-bold mt-1 text-light">Laporan</p>
        </li>
        <li class="nav-item menu-open">
          <a href="#" class="nav-link">
            <i class="fas fa-address-book nav-icon"></i>
            <p>
              Laporan Kunjungan
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/laporan-kunjungan-pasien-pemeriksaan-umum" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Pemeriksaan Umum</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/laporan-kunjungan-pasien-persalinan" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Persalinan</p>
              </a>
            </li>
          </ul>
        </li>
            @endcan
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>