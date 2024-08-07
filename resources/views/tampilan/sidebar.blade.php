<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('dist/img/avatar5.png') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
      </div>
    </div>
  
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="{{ route('dashboard') }}" class="nav-link @if (request()->routeIs('dashboard')) active @endif">
            <i class="nav-icon fas fa-desktop"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item @if (request()->routeIs('mobil.*') || request()->routeIs('penyewa.*') || request()->routeIs('supir.*'))) menu-open @endif">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-database"></i>
            <p>Master Data
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('mobil.index') }}" class="nav-link @if (request()->routeIs('mobil.*')) active @endif">
                <i class="nav-icon fas fa-car"></i>
                <p>Mobil</p>
              </a>
            </li>
            {{-- <li class="nav-item">
              <a href="{{ route('penyewa.index') }}" class="nav-link @if (request()->routeIs('penyewa.*')) active @endif">
                <i class="nav-icon fas fa-users"></i>
                <p>Penyewa</p>
              </a>
            </li> --}}
            {{-- <li class="nav-item">
              <a href="{{ route('supir.index') }}" class="nav-link @if (request()->routeIs('supir.*')) active @endif">
                <i class="nav-icon fas fa-user-tie"></i>
                <p>Supir Mobil</p>
              </a>
            </li> --}}
          </ul>
        </li>
        <li class="nav-item @if (request()->routeIs('sewa.*')) menu-open @endif">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-database"></i>
            <p>Transaksi Rental
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('sewa.index') }}" class="nav-link @if (request()->routeIs('sewa.*')) active @endif">
                <i class="nav-icon fas fa-users"></i>
                <p>Sewa Mobil</p>
              </a>
            </li>
          </ul>
        </li>
        {{-- <li class="nav-item">
          <a href="{{ route('transaksi.index') }}" class="nav-link @if (request()->routeIs('transaksi.*')) active @endif">
            <i class="nav-icon fas fa-money-check"></i>
            <p>Transaksi</p>
          </a>
        </li> --}}
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
  