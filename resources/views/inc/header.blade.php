<header>
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
      <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
          <a href="dashboard" class="list-group-item list-group-item-action py-2 ripple " aria-current="true">
            <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Journal</span>
          </a>
          <a href="trade" class="list-group-item list-group-item-action py-2 ripple ">
            <i class="fas fa-exchange-alt fa-fw me-3"></i><span>Trades </span>
          </a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
              class="fas fa-lock fa-fw me-3"></i><span>Password</span></a>
        </div>
      </div>
    </nav>
    <!-- Sidebar -->
 <!-- Navbar -->
 <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
      <!-- Container wrapper -->
      <div class="container-fluid">
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
          aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>

        <!-- Brand -->
        <a class="navbar-brand" href="#">
          <img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png" height="25" alt="" loading="lazy" />
        </a>
        <!-- Search form -->
        <!-- <form class="d-none d-md-flex input-group w-auto my-auto">
          <input autocomplete="off" type="search" class="form-control rounded"
            placeholder='Search' style="min-width: 225px" />
          <span class="input-group-text border-0"><i class="fas fa-search"></i></span>
        </form> -->

        <!-- Right links -->
        <ul class="navbar-nav ms-auto d-flex flex-row">
          <!-- Notification dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink"
              role="button" data-mdb-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-bell"></i>
              <span class="badge rounded-pill badge-notification bg-danger">1</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Some news</a></li>
              <li><a class="dropdown-item" href="#">Another news</a></li>
              <li>
                <a class="dropdown-item" href="#">Something else</a>
              </li>
            </ul>
          </li>

          <!-- Icon -->
          <li class="nav-item">
            <a class="nav-link me-3 me-lg-0" href="#">
              <i class="fas fa-fill-drip"></i>
            </a>
          </li>
          <!-- Icon -->
          <li class="nav-item me-3 me-lg-0">
            <a class="nav-link" href="#">
              <i class="fab fa-github"></i>
            </a>
          </li>

      
         

          <!-- Avatar -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#"
              id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
              <img src="data:image/jpeg;base64,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" class="rounded-circle" height="22"
                alt="" loading="lazy" />
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">My profile</a></li>
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li><a class="dropdown-item" href="{{route ('logout.acc')}}">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
  </header>