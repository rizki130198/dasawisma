<body>
  <div class="container-scroller">
    <?php $this->load->view('include/menu-top'); ?>
    <div class="container-fluid page-body-wrapper">
      <?php $this->load->view('include/sidenav'); ?>
      <div class="main-panel" style="margin-left: 255px;">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12">
              <?php if ($this->session->flashdata('gagal')) {?>
                <div class="alert alert-danger alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-warning"></i> Gagal!</h4>
                  <?=$this->session->flashdata('gagal')?>
                </div>
              <?php }elseif($this->session->flashdata('sukses')){ ?>
                <div class="alert alert-success alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-check"></i> Sukses!</h4>
                  <?=$this->session->flashdata('sukses')?>
                </div>
              <?php } ?>
            </div>
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title" style="font-size: 20px;">Pengguna</h3>
                  <div class="table-responsive">
                    <table class="table dataTable no-footer table-striped datatable" style="width:100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Email</th>
                          <th>Username</th>
                          <th>Password</th>
                          <th>Status</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no = 1;foreach ($user as $rowUser) { ?>
                          <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $rowUser->email; ?></td>
                            <td><?php echo $rowUser->username; ?></td>
                            <td><?php echo $rowUser->ulang_password; ?></td>
                            <?php if ($rowUser->status=='admin'){ ?>
                              <td>Admin</td>
                            <?php }else{ ?>
                              <td>User</td>
                            <?php } ?>
                            <td>
                              <a href="<?=site_url('main/edituser/'.$rowUser->id); ?>" class="btn btn-inverse-info">Edit</a>  
                              <a href="<?php echo site_url('main/deleteUser/'.$rowUser->id); ?>" class="btn btn-inverse-danger">Delete</a>
                            </td>
                          </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>  
          </div>  
        </div>
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
              <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.
            </span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
              <i class="mdi mdi-heart text-danger"></i>
            </span>
          </div>
        </footer>
      </div>
    </div>
  </div>