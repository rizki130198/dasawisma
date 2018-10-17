<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row" style="background: #00ce68;">
  <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
    <a class="navbar-brand brand-logo" href="index.html">
      <img src="https://pantauair.com/public/img/logo.png" alt="logo" style="width: 75%;height: 35px;" />
    </a>
    <a class="navbar-brand brand-logo-mini" href="index.html">
      <img src="https://pantauair.com/public/img/logo.png" alt="logo" />
    </a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center">
    <ul class="navbar-nav navbar-nav-left d-none d-md-flex">
      <h4 style="padding-left: 12px;"><?php echo $menu; ?></h4>
    </ul>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item dropdown d-none d-xl-inline-block">
        <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
          <span class="profile-text"><?php echo $this->session->userdata('username'); ?></span>
          <img class="img-xs rounded-circle" src="https://png.pngtree.com/svg/20161217/avatar__181424.png" alt="Profile image">
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
          <a class="dropdown-item mt-2">
            Manage Accounts
          </a>
          <a href="<?php echo site_url('main/logout'); ?>" class="dropdown-item">
            Sign Out
          </a>
        </div>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="mdi mdi-menu"></span>
    </button>
  </div>
</nav>