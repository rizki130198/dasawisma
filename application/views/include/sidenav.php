<style type="text/css">
  .menu-title{
    font-size: 14px !important;
  }
  .nav-link{
    font-size: 14px !important;
  }
</style>
<nav class="sidebar sidebar-offcanvas" id="sidebar" style="position: fixed;">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <div class="nav-link">
        <div class="user-wrapper">
          <div class="profile-image">
            <img src="https://png.pngtree.com/svg/20161217/avatar__181424.png" alt="profile image">
          </div>
          <div class="text-wrapper">
            <p class="profile-name"><?php echo $this->session->userdata('username'); ?></p>
            <div>
              <small class="designation text-muted">Web Developer</small>
              <span class="status-indicator online"></span>
            </div>
          </div>
        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo site_url('main/dashboard'); ?>">
        <i class="menu-icon mdi mdi-television"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo site_url('main/caridata'); ?>">
        <i class="menu-icon mdi mdi-table"></i>
        <span class="menu-title">Cari Data</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#user" aria-expanded="false" aria-controls="user">
        <i class="menu-icon mdi mdi-content-copy"></i>
        <span class="menu-title">User</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="user">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('main/addUser'); ?>">Add User</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('main/user'); ?>">Manage User</a>
          </li>
        </ul>
      </div>
    </li>
  </ul>
</nav>