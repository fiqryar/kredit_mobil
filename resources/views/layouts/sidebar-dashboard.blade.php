<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-white sidebar collapse transition">
  <div class="position-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link {{ request()->is('dashboard') ? 't-color-secondary' : ''  }} align-items-center d-flex" aria-current="page" href="/dashboard">
          <span class="material-icons-outlined me-2 icon-size {{ request()->is('dashboard') ? 't-color-secondary' : ''  }}">space_dashboard</span>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ request()->is('dashboard/cars') ? 't-color-secondary' : ''  }} align-items-center d-flex" aria-current="page" href="/dashboard/cars">
          <span class="material-icons-outlined me-2 icon-size {{ request()->is('dashboard/cars') ? 't-color-secondary' : ''  }}">sell</span>
          Mobil
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ request()->is('dashboard/customers') ? 't-color-secondary' : ''  }} align-items-center d-flex" aria-current="page" href="/dashboard/customers">
          <span class="material-icons-outlined me-2 icon-size {{ request()->is('dashboard/customers') ? 't-color-secondary' : ''  }}">people_alt</span>
          Pelanggan
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ request()->is('dashboard/transaction') ? 't-color-secondary' : ''  }} align-items-center d-flex" aria-current="page" href="/dashboard/transaction">
          <span class="material-icons-outlined me-2 icon-size {{ request()->is('dashboard/transaction') ? 't-color-secondary' : ''  }}">paid</span>
          Transaksi
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ request()->is('dashboard/reports') ? 't-color-secondary' : ''  }} align-items-center d-flex" aria-current="page" href="/dashboard/reports">
          <span class="material-icons-outlined me-2 icon-size {{ request()->is('dashboard/reports') ? 't-color-secondary' : ''  }}">show_chart</span>
          Laporan
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ request()->is('dashboard/license') ? 't-color-secondary' : ''  }} align-items-center d-flex" aria-current="page" href="/dashboard/license">
          <span class="material-icons-outlined me-2 icon-size {{ request()->is('dashboard/license') ? 't-color-secondary' : ''  }}">help_outline</span>
          Lisensi
        </a>
      </li>
    </ul>

    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
      <span class="t-size-sm">Options</span>
    </h6>
    <ul class="nav flex-column mb-2">
      <li class="nav-item">
        <a class="nav-link {{ request()->is('dashboard/change-password') ? 't-color-secondary' : ''  }}" href="/dashboard/change-password">
          <span class="material-icons-outlined me-2 icon-size {{ request()->is('dashboard/license') ? 't-color-secondary' : ''  }}">vpn_key</span>
          Ganti Password
        </a>
      </li>
    </ul>
  </div>
</nav>