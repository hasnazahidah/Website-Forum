<!-- Brand Logo -->
<a href="index.html" class="brand-link">
  <img src="adminlte/dist/img/paww.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
  <span class="brand-text font-weight-light">Meowrachasite</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
  <!-- Sidebar user panel (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="adminlte/dist/img/logo.jpg" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">

    </div>
  </div>


  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column"  role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item">
        <a href="{{ url('anggota-dashboard') }}" class="nav-link ">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
          </p>
        </a>
      </li>
      <li class="nav-item ">
        <a href="{{ url('postanggota') }}" class="nav-link ">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Forum
          </p>
        </a>
      </li>
      <li class="nav-item ">
        <a href="{{ url('categoryanggota') }}" class="nav-link ">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Category
          </p>
        </a>
      </li>


    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
