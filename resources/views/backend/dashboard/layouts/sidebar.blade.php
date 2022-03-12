<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li  class=" nav-item">
          
          <a class="nav-link {{ request()->routeIs('perpus.dashboard')? 'active':'' }}" aria-current="page" href="{{ url('/perpus/dashboard' )}}" >
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect x="3" y="3" width="7" height="9"></rect>
              <rect x="14" y="3" width="7" height="5"></rect>
              <rect x="14" y="12" width="7" height="9"></rect>
              <rect x="3" y="16" width="7" height="5"></rect>
            </svg>
            Dashboard
          </a>
        </li>
        
        <li class=" nav-item ">
          <a class="nav-link {{ request()->routeIs('perpus.staffs*') ? 'active':'' }}" href="{{ url('/perpus/staffs' )}}" >
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
              <circle cx="9" cy="7" r="4"></circle>
              <path d="M23 21v-2a4 4 0 00-3-3.87"></path>
              <path d="M16 3.13a4 4 0 010 7.75"></path>
            </svg>
            Staffs
          </a>
        </li>
        <li class=" nav-item">
          <a class="nav-link {{ request()->routeIs('perpus.users*')? 'active':'' }}" href="{{ url('/perpus/users' )}}" >
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
              <circle cx="9" cy="7" r="4"></circle>
              <path d="M23 21v-2a4 4 0 00-3-3.87"></path>
              <path d="M16 3.13a4 4 0 010 7.75"></path>
            </svg>
            Users
          </a>
        </li>
        <li class=" nav-item">
          <a class="nav-link {{ request()->routeIs('perpus.books*')? 'active':'' }}" href="{{ url('/perpus/books' )}}" >
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M4 19.5A2.5 2.5 0 016.5 17H20"></path>
              <path d="M6.5 2H20v20H6.5A2.5 2.5 0 014 19.5v-15A2.5 2.5 0 016.5 2z"></path>
            </svg>
            Books
          </a>
        </li>
        <li class=" nav-item">
          <a class="nav-link {{ request()->routeIs('perpus.pinjams*')? 'active':'' }}" href="{{ url('/perpus/pinjams' )}}" >
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M2 3h6a4 4 0 014 4v14a3 3 0 00-3-3H2z"></path>
              <path d="M22 3h-6a4 4 0 00-4 4v14a3 3 0 013-3h7z"></path>
            </svg>
            Pinjam Buku
          </a>
          <a class="nav-link {{ request()->routeIs('perpus.returns*')? 'active':'' }}" href="{{ url('/perpus/returns' )}}" >
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M2 3h6a4 4 0 014 4v14a3 3 0 00-3-3H2z"></path>
              <path d="M22 3h-6a4 4 0 00-4 4v14a3 3 0 013-3h7z"></path>
            </svg>
            Pengembalian Buku
          </a>
        </li>
      </ul>
    </div>
  </nav>