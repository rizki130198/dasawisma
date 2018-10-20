<body>
  <div class="container-scroller">
    <?php $this->load->view('include/menu-top'); ?>
    <div class="container-fluid page-body-wrapper">
      <?php $this->load->view('include/sidenav'); ?>
      <div class="main-panel" style="margin-left: 255px;">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title" style="font-size: 20px;">Cari Data</h3>
                  <form class="forms-sample" method="post" action="<?php echo site_url('main/hasil_cari') ?>" accept-charset="utf-8">
                    <div class="form-group">
                      <label>Jenis Kelamin</label>
                      <input type="text" name="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin">
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>RT</label>
                          <input type="text" name="rt" class="form-control" placeholder="RW">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>RW</label>
                          <input type="text" name="RW" class="form-control" placeholder="RW">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Kelurahan</label>
                      <input type="text" name="kelurahan" class="form-control" disabled="" placeholder="Kelurahan" value="Gambir">
                    </div>
                    <div class="form-group">
                      <label>Kecamatan</label>
                      <input type="text" name="kecamatan" class="form-control" disabled="" placeholder="Kecamatan" value="Gambir">
                    </div>
                    <div class="form-group">
                      <label>Kota</label>
                      <input type="text" name="kota" class="form-control" disabled="" placeholder="Kota" value="JAKARTA PUSAT">
                    </div>
                    <div class="form-group">
                      <label>Tanggal Lahir</label>
                      <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir">
                    </div>
                    <div class="form-group">
                      <label>Status Perkawinan</label>
                      <select class="form-control" name="status_perkawinan">
                        <option value="BELUM KAWIN">Belum Kawin</option>
                        <option value="KAWIN">Kawin</option>
                        <option value="JANDA">Janda</option>
                        <option value="DUDA">Duda</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Pendapatan</label>
                      <input type="text" name="pendapatan" class="form-control" placeholder="Pendapatan">
                    </div>
                    <div class="form-group">
                      <label>Kartu Lansia</label>
                      <select class="form-control" name="kartu_lansia">
                        <option value="TIDAK">TIDAK</option>
                        <option value="YA">YA</option>
                      </select>
                    </div>
                    <button type="submit" class="btn btn-success mr-2">Cari</button>
                    <button class="btn btn-light">Batal</button>
                  </form>
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