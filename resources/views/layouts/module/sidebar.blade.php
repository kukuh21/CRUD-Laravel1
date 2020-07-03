<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
      <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="Sanber" class="brand-image img-circle elevation-3"
          style="opacity: .8">
      <span class="brand-text font-weight-light">SanberCode</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
      <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item">
                  <a href="{{ url('/') }}" class="nav-link">
                      <i class="nav-icon fa fa-dashboard"></i>
                      <p>
                          Dashboard
                      </p>
                  </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('pertanyaan.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-bars"></i>
                    <p>
                        Pertanyaan dan Jawaban
                    </p>
                </a>
            </li>

              <li class="nav-item has-treeview">
                <a class="nav-link" href="#">
                    <i class="nav-icon fa fa-sign-out"></i>
                    <p>
                        Logout
                    </p>
                </a>
              </li>
          </ul>
      </nav>
  </div>
</aside>