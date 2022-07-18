<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">TMA Dashboard</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="{{url('admin_dashboard')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <em class="material-icons opacity-10">dashboard</em>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{url('check')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <em class="material-icons opacity-10">table_view</em>
            </div>
            <span class="nav-link-text ms-1">Applications</span>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white " href="{{url('add_models')}}">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <em class="material-icons opacity-10">add</em>
              </div>
              <span class="nav-link-text ms-1">Add Models</span>
            </a>
          </li>
        <li class="nav-item">
            <a class="nav-link text-white " href="{{url('view_models')}}">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <em class="material-icons opacity-10">people</em>
              </div>
              <span class="nav-link-text ms-1">Models</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{url('stats')}}">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <em class="material-icons opacity-10">table_view</em>
              </div>
              <span class="nav-link-text ms-1">Butterfly Stats</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{url('photos')}}">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <em class="material-icons opacity-10">photo</em>
              </div>
              <span class="nav-link-text ms-1">Photos</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{url('contact_received')}}">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <em class="material-icons opacity-10">inbox</em>
              </div>
              <span class="nav-link-text ms-1">Contact Message</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{url('end')}}">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <em class="material-icons opacity-10">person</em>
              </div>
              <span class="nav-link-text ms-1">Log Out</span>
            </a>
          </li>

      </ul>
  </aside>
