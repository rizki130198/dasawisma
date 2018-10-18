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
                          <th>Nama</th>
                          <th>RT</th>
                          <th>RW</th>
                          <th>Kelurahan</th>
                          <th>Kecamatan</th>
                          <th>Kota</th>
                          <th>Tanggal Lahir</th>
                          <th>Status Kawin</th>
                          <th>Pendapatan</th>
                          <th>Kartu Lansia</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no = 1;foreach ($data as $rowData) { ?>
                          <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $rowData->nama; ?></td>
                            <td><?php echo $rowData->rt; ?></td>
                            <td><?php echo $rowData->rw; ?></td>
                            <td><?php echo $rowData->kelurahan; ?></td>
                            <td><?php echo $rowData->kecamatan; ?></td>
                            <td><?php echo $rowData->kota; ?></td>
                            <td><?php echo $rowData->tanggal_lahir; ?></td>
                            <td><?php echo $rowData->status_kawin; ?></td>
                            <td><?php echo $rowData->pendapatan; ?></td>
                            <td><?php echo $rowData->kartu_lansia; ?></td> 
                            <td>
                              <a href="<?=site_url('main/edituser/'.$rowData->id_data); ?>" class="btn btn-inverse-info">Edit</a>  
                              <a href="<?php echo site_url('main/deleteUser/'.$rowData->id_data); ?>" class="btn btn-inverse-danger">Delete</a>
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
            <!-- <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
              <i class="mdi mdi-heart text-danger"></i>
            </span> -->
          </div>
        </footer>
      </div>
    </div>
  </div>