<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li  class=" nav-item">
          <a class="nav-link {{ Request::is('/')? 'active':'' }}" aria-current="page" href="{{ url('/' )}}" >
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class=" nav-item">
          <a class="nav-link {{ Request::is('staffs*')? 'active':'' }}" href="{{ url('/staffs' )}}" >
            <span data-feather="users"></span>
            Staffs
          </a>
        </li>
        <li class=" nav-item">
          <a class="nav-link {{ Request::is('users*')? 'active':'' }}" href="{{ url('/users' )}}" >
            <span data-feather="users"></span>
            Users
          </a>
        </li>
        <li class=" nav-item">
          <a class="nav-link {{ Request::is('books*')? 'active':'' }}" href="{{ url('/books' )}}" >
            <span data-feather="book"></span>
            Books
          </a>
        </li>
        <li class=" nav-item">
          <a class="nav-link {{ Request::is('pinjam*')? 'active':'' }}" href="{{ url('/pinjams' )}}" >
            <span data-feather="book-open"></span>
            Pinjam Buku
          </a>
        </li>
      </ul>
    </div>
  </nav>