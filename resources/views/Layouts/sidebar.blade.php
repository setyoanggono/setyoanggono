<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        @if (Auth::user()->image != NULL)
          <img src="{{ asset('uploads/user/' . Auth::user()->image) }}" class="img-circle elevation-2" alt="User Image">
        @else
            <img src="{{ asset('asetts/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        @endif
      </div>
      <div class="info">
        <a href="/home" class="d-block">{{ Auth::user()->name }}</a>
      </div>
    </div>
      <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="/" class="nav-link {{ (Route::is('home')) ? 'active' : '' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
            <li class="nav-item">
          <a href="/akun" class="nav-link {{ (Route::is('akun')) ? 'active' : '' }}">
            <i class="fas fa-user-circle"></i>
            <p>
              User Account
            </p>
          </a>
          <li class="nav-item {{ (Route::is('request', 'payment')) ? 'menu-open' : '' }}">
            <a href="approvement" class="nav-link {{ (Route::is('request', 'payment')) ? 'active' : '' }}">
              <i class="fas fa-check-circle"></i>
              <p>
                Approvement
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/request" class="nav-link {{ (Route::is('request')) ? 'active' : '' }}">
                    <i class="fas fa-hand-holding-usd"></i>
                    <p>Request Order</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/payment" class="nav-link {{ (Route::is('payment')) ? 'active' : '' }}">
                    <i class="fas fa-credit-card"></i>
                    <p>Payment</p>
                  </a>
                </li>
              </ul>
            <li class="nav-item {{ (Route::is('mitra', 'customer')) ? 'menu-open' : '' }}">
              <a href="report" class="nav-link {{ (Route::is('mitra', 'customer')) ? 'active' : '' }}">
                <i class="fas fa-scroll"></i>
                <p>
                  Report
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('mitra') }}" class="nav-link {{ (Route::is('mitra')) ? 'active' : '' }}">
                    <i class="fas fa-clipboard-list"></i>
                    <p>Report Mitra</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('customer') }}" class="nav-link {{ (Route::is('customer')) ? 'active' : '' }}">
                    <i class="fas fa-th-list"></i>
                    <p>Report Customer</p>
                  </a>
                </li>
              </ul>
              <li class="nav-item">
                <a href="/gallery" class="nav-link {{ (Route::is('gallery')) ? 'active' : '' }}">
                  <i class="fas fa-image"></i>
                  <p>
                    Gallery
                  </p>
                </a>
                  
              <li class="nav-item">
                  <a href="{{ url('logout') }}" class="nav-link logout-confirm">
                    <i class="fas fa-outdent"></i>
                    <p>
                      Logout
                    </p>
                  </a>
    <!-- /.sidebar-menu -->
    @section('script')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
      $('.logout-confirm').on('click', function (event) {
          event.preventDefault();
          const url = $(this).attr('href');
          swal({
              title: 'Are you sure?',
              icon: 'warning',
              buttons: ["Cancel", "Yes!"],
          }).then(function(value) {
              if (value) {
                  window.location.href = url;
              }
          });
      }); 
    </script>    
    @endsection
  </div>