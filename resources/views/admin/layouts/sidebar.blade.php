<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html">HMJTI POLIJE</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">HMJTI</a>
      </div>
      <ul class="sidebar-menu">
          <li class="menu-header">Dashboard</li>
          <li class={{ request()->is('admin') || request()->is('admin/dashboard') ? 'active' : '' }}>
            <a href="/admin" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
          </li>
          <li class="menu-header">Main</li>
          <li class="{{ request()->is('admin/kategori') || request()->is('admin/komentar') || request()->is('admin/artikel')? 'active' : '' }} nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Blog</span></a>
            <ul class="dropdown-menu">
              <li class={{ request()->is('admin/artikel') ? 'active' : '' }}><a class="nav-link" href="">Artikel</a></li>
              <li class={{ request()->is('admin/komentar') ? 'active' : '' }}><a class="nav-link" href="">Komentar</a></li>
              <li class={{ request()->is('admin/kategori') ? 'active' : '' }}><a class="nav-link" href="{{route('list.kategori')}}">Kategori</a></li>
            </ul>
          </li>
          <li class="{{ request()->is('admin/pengurus') ? 'active' : '' }}">
            <a class="nav-link" href="{{route('list.pengurus')}}"><i class="fas fa-users"></i><span>Pengurus</span></a>
          </li>
          <li class="{{ request()->is('admin/kritik-saran') ? 'active' : '' }}">
            <a class="nav-link" href="{{route('list.kritikSaran')}}"><i class="fas fa-comment-alt"></i><span>Kritik dan Saran</span></a>
          </li>
          <li class="{{ request()->is('admin/google-form') ? 'active' : '' }}">
            <a class="nav-link" href=""><i class="fas fa-share-alt-square"></i><span>Google Form</span></a>
          </li>
          <li class="nav-item dropdown 
          {{ 
          request()->is('admin/departemen') || 
          request()->is('admin/biro') ||
          request()->is('admin/jabatan') || 
          request()->is('admin/prodi') ||
          request()->is('admin/golongan') || 
          request()->is('admin/angkatan') 
          ? 'active' : '' }}">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Data Master</span></a>
            <ul class="dropdown-menu">
              <li class={{ request()->is('admin/departemen') ? 'active' : '' }}><a class="nav-link" href="{{route('list.departemen')}}">Departemen</a></li>
              <li class={{ request()->is('admin/biro') ? 'active' : '' }}><a class="nav-link" href="{{route('list.biro')}}">Biro</a></li>
              <li class={{ request()->is('admin/jabatan') ? 'active' : '' }}><a class="nav-link" href="{{route('list.jabatan')}}">Jabatan</a></li>
              <li class={{ request()->is('admin/prodi') ? 'active' : '' }}><a class="nav-link" href="{{route('list.prodi')}}">Prodi</a></li>
              <li class={{ request()->is('admin/golongan') ? 'active' : '' }}><a class="nav-link" href="{{route('list.golongan')}}">Golongan</a></li>
              <li class={{ request()->is('admin/angkatan') ? 'active' : '' }}><a class="nav-link" href="{{route('list.angkatan')}}">Angkatan</a></li>
            </ul>
          </li>
          <li class="">
            <a class="nav-link" href=""><i class="fas fa-user"></i><span>Users / Admin</span></a>
          </li>
          <li class="">
            <a class="nav-link" href=""><i class="fas fa-address-card"></i><span>Edit Profile</span></a>
          </li>
          {{-- <li class="menu-header">Stisla</li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Components</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="components-article.html">Article</a></li>
              <li><a class="nav-link beep beep-sidebar" href="components-avatar.html">Avatar</a></li>
              <li><a class="nav-link" href="components-chat-box.html">Chat Box</a></li>
              <li><a class="nav-link beep beep-sidebar" href="components-empty-state.html">Empty State</a></li>
              <li><a class="nav-link" href="components-gallery.html">Gallery</a></li>
              <li><a class="nav-link beep beep-sidebar" href="components-hero.html">Hero</a></li>
              <li><a class="nav-link" href="components-multiple-upload.html">Multiple Upload</a></li>
              <li><a class="nav-link beep beep-sidebar" href="components-pricing.html">Pricing</a></li>
              <li><a class="nav-link" href="components-statistic.html">Statistic</a></li>
              <li><a class="nav-link" href="components-tab.html">Tab</a></li>
              <li><a class="nav-link" href="components-table.html">Table</a></li>
              <li><a class="nav-link" href="components-user.html">User</a></li>
              <li><a class="nav-link beep beep-sidebar" href="components-wizard.html">Wizard</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Forms</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="forms-advanced-form.html">Advanced Form</a></li>
              <li><a class="nav-link" href="forms-editor.html">Editor</a></li>
              <li><a class="nav-link" href="forms-validation.html">Validation</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-map-marker-alt"></i> <span>Google Maps</span></a>
            <ul class="dropdown-menu">
              <li><a href="gmaps-advanced-route.html">Advanced Route</a></li>
              <li><a href="gmaps-draggable-marker.html">Draggable Marker</a></li>
              <li><a href="gmaps-geocoding.html">Geocoding</a></li>
              <li><a href="gmaps-geolocation.html">Geolocation</a></li>
              <li><a href="gmaps-marker.html">Marker</a></li>
              <li><a href="gmaps-multiple-marker.html">Multiple Marker</a></li>
              <li><a href="gmaps-route.html">Route</a></li>
              <li><a href="gmaps-simple.html">Simple</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-plug"></i> <span>Modules</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="modules-calendar.html">Calendar</a></li>
              <li><a class="nav-link" href="modules-chartjs.html">ChartJS</a></li>
              <li><a class="nav-link" href="modules-datatables.html">DataTables</a></li>
              <li><a class="nav-link" href="modules-flag.html">Flag</a></li>
              <li><a class="nav-link" href="modules-font-awesome.html">Font Awesome</a></li>
              <li><a class="nav-link" href="modules-ion-icons.html">Ion Icons</a></li>
              <li><a class="nav-link" href="modules-owl-carousel.html">Owl Carousel</a></li>
              <li><a class="nav-link" href="modules-sparkline.html">Sparkline</a></li>
              <li><a class="nav-link" href="modules-sweet-alert.html">Sweet Alert</a></li>
              <li><a class="nav-link" href="modules-toastr.html">Toastr</a></li>
              <li><a class="nav-link" href="modules-vector-map.html">Vector Map</a></li>
              <li><a class="nav-link" href="modules-weather-icon.html">Weather Icon</a></li>
            </ul>
          </li>
          <li class="menu-header">Pages</li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Auth</span></a>
            <ul class="dropdown-menu">
              <li><a href="auth-forgot-password.html">Forgot Password</a></li>
              <li><a href="auth-login.html">Login</a></li>
              <li><a class="beep beep-sidebar" href="auth-login-2.html">Login 2</a></li>
              <li><a href="auth-register.html">Register</a></li>
              <li><a href="auth-reset-password.html">Reset Password</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-exclamation"></i> <span>Errors</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="errors-503.html">503</a></li>
              <li><a class="nav-link" href="errors-403.html">403</a></li>
              <li><a class="nav-link" href="errors-404.html">404</a></li>
              <li><a class="nav-link" href="errors-500.html">500</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-bicycle"></i> <span>Features</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="features-activities.html">Activities</a></li>
              <li><a class="nav-link" href="features-post-create.html">Post Create</a></li>
              <li><a class="nav-link" href="features-posts.html">Posts</a></li>
              <li><a class="nav-link" href="features-profile.html">Profile</a></li>
              <li><a class="nav-link" href="features-settings.html">Settings</a></li>
              <li><a class="nav-link" href="features-setting-detail.html">Setting Detail</a></li>
              <li><a class="nav-link" href="features-tickets.html">Tickets</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-ellipsis-h"></i> <span>Utilities</span></a>
            <ul class="dropdown-menu">
              <li><a href="utilities-contact.html">Contact</a></li>
              <li><a class="nav-link" href="utilities-invoice.html">Invoice</a></li>
              <li><a href="utilities-subscribe.html">Subscribe</a></li>
            </ul>
          </li>
          <li><a class="nav-link" href="credits.html"><i class="fas fa-pencil-ruler"></i> <span>Credits</span></a></li>
        </ul> --}}

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
          <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
            <i class="fas fa-rocket"></i> Documentation
          </a>
        </div>
    </aside>
  </div>