<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-category">Main Menu</li>
      <li class="nav-item">
        <a class="nav-link" href="/dashboard">
          <i class="menu-icon typcn typcn-document-text"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="/konsultasi">
          <i class="menu-icon typcn typcn-document-text"></i>
          <span class="menu-title">Konsultasi</span>
        </a>
      </li> 
      @if (Auth::check() && Auth::user()->is_admin == 1)   
      <li class="nav-item">
        <a class="nav-link" href="/admin/penyakit">
          <i class="menu-icon typcn typcn-shopping-bag"></i>
          <span class="menu-title">Penyakit</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin/gejala">
          <i class="menu-icon typcn typcn-th-large-outline"></i>
          <span class="menu-title">Gejala</span>
        </a>
      </li>
      @endif
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="menu-icon typcn typcn-coffee"></i>
          <span class="menu-title">Basis Pengetahuan</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="/pengetahuan/show">Lihat</a>
            </li>
            @if(Auth::check() && Auth::user()->is_admin == 1)
              <li class="nav-item">
                <a class="nav-link" href="/admin/pengetahuan">Kelola</a>
              </li>
            @endif
          </ul>
        </div>
      </li>
    </ul>
  </nav>