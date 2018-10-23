<body>
  <style>
  .datepicker-days{
    display: block !important;
  }
  .btn.active {                
    display: none;    
  }
  .btn input{
    position: absolute;
    clip: rect(0,0,0,0);
    pointer-events: none;
  }
</style>    
<div class="container-scroller">
  <?php $this->load->view('include/menu-top'); ?>
  <div class="container-fluid page-body-wrapper">
    <?php $this->load->view('include/sidenav'); ?>
    <div class="main-panel" style="margin-left: 255px;">
      <div class="content-wrapper">
        <div class="row">
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h3 class="card-title" style="font-size: 20px;">Pilih Wilayah</h3>
                <div class="row">
                  <div class="col-md-6">
                   <div class="input-group">
                    <select class="form-control" name="kelurahan" id="kelurahan" onchange="changekel(this)">
                      <option selected disabled>Filter Berdasarkan Kelurahan</option>
                      <option value="">Kembali Ke Default</option>
                      <option value="">Tampilkan Semua Kelurahan</option>
                      <?php foreach ($kel as $data): ?>
                        <option value="<?=$data->kelurahan?>"><?=$data->kelurahan?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <!-- <form class="formrw"  action="javascript:void(0);" id="chartradar" method="POST"> -->
                    <div class="input-group">
                      <select class="form-control formrw" style="display: none;" name="rw" id="rw" onchange="changerw(this)">
                        <option selected disabled>Filter Berdasarkan RW</option>
                        <option value="">Tampilkan Semua RW</option>
                        <?php foreach ($rt as $key): ?>
                          <option value="<?=$key->rw?>"><?=$key->rw?></option>
                        <?php endforeach ?>
                      </select>
                      <input type="hidden" name="kel" id="inputhiden">
                    </div>
                  </div> 

                  <!-- ROW BANDINGKAN -->
                  <div id="banding" class="col-md-6" style="display :none;">
                   <div class="input-group">
                    <select class="form-control" name="kelurahan" id="kelurahan" onchange="changekel(this)">
                      <option selected disabled>Filter Berdasarkan Kelurahan</option>
                      <option value="">Kembali Ke Default</option>
                      <?php foreach ($kel as $data): ?>
                        <option value="<?=$data->kelurahan?>"><?=$data->kelurahan?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="input-group">
                    <select class="form-control formrw" style="display: none;" name="rw" id="rw" onchange="changerw(this)">
                      <option selected disabled>Filter Berdasarkan RW</option>
                      <?php foreach ($rt as $key): ?>
                        <option value="<?=$key->rw?>"><?=$key->rw?></option>
                      <?php endforeach ?>
                    </select>
                    <input type="hidden" name="kel" id="inputhiden">
                  </div>
                </div> 
              <!-- END ROW BANDINGKAN -->
              </div>

              <!-- </form> -->
              <br>
              <div class="wraper">
                <canvas class="radar" id="myChart" height="300" width="800"></canvas>
              </div>
              <div class="radarbaru"></div>
              <br>
              <div data-toggle="buttons" style="float: right;">
                <label class="btn btn-danger active" onclick="bandingkan()">
                  <input type="radio" name="options" id="option1" autocomplete="off" checked>
                  Hilangkan Banding
                </label>
                <label class="btn btn-success" onclick="bandingkan()">
                  <input type="radio" name="options" id="option2" autocomplete="off">
                  Bandingkan
                </label>          
              </div>
            </div>
          </div>
        </div>  
      </div>  
<!--           <div class="row">  
            <div class="col-md-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <form action="javascript:void(0);" id="chartcolum" method="POST">
                    <div class="row">
                       <div class="col-lg-4">
                        <div class="input-group">
                          <input type="text" id="awalcolomchart" autocomplete="off" class="form-control" name="awal" placeholder="Dari Tanggal">
                        </div>
                      </div> 
                      <div class="col-lg-4">
                        <div class="input-group">
                          <input type="text" id="akhircolomchart" autocomplete="off" class="form-control" name="akhir" placeholder="Ke Tanggal">
                        </div>
                      </div> 
                      <div class="col-lg-4">
                        <button type="submit" class="btn btn-danger">Cari Chart</button>
                      </div>
                    </div>
                  </form>
                  <div class="colom" id="columnchart_material" style="width: 800px; height: 500px;"></div>
                  <div class="barucolom"></div>
                </div>
              </div>
            </div>
          </div> -->
          <div class="row">  
            <div class="col-md-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="input-group">
                       <select class="form-control" name="rw2" id="rw2" onchange="changerw2(this)">
                        <option value="0" selected disabled>Filter Berdasarkan RW</option>
                        <option value="">Kembali Ke Chart Awal</option>
                        <?php foreach ($rt as $key): ?>
                          <option value="<?=$key->rw?>"><?=$key->rw?></option>
                        <?php endforeach ?>
                      </select></div>
                    </div> 
                    <div class="col-lg-4">
                      <div class="input-group">
                        <select class="form-control" name="rw3" id="rw3" onchange="changerw3(this)">
                          <option selected disabled>Bandingkan dengan Rw di samping</option>
                          <option value="">Hilangkan</option>
                          <?php foreach ($rt as $key): ?>
                            <option value="<?=$key->rw?>"><?=$key->rw?></option>
                          <?php endforeach ?>
                        </select>
                      </div>
                    </div>
                  </div>
                </form>
                <br>
                <div class="pyramid" id="chart_div"></div>
                <div class="barupyramid"></div>
                <div class="barupyramid2"></div>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="row">  
          <div class="col-md-7 grid-margin">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Bar chart</h4>
                <canvas id="barChart"></canvas>
              </div>
            </div>
          </div>
        </div> -->
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