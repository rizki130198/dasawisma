<body>
  <style>
  .datepicker-days{
    display: block !important;
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
                <form action="javascript:void(0);" id="chartradar" method="POST">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="input-group">
                        <select class="form-control" name="rw" id="rw">
                          <option value="0" selected disabled>Filter Berdasarkan RW</option>
                          <?php foreach ($rt as $key): ?>
                            <option value="<?=$key->rw?>"><?=$key->rw?></option>
                          <?php endforeach ?>
                        </select></div>
                      </div> 
                      <div class="col-lg-4">
                        <div class="input-group">
                          <select class="form-control" name="rw2" id="rw2">
                            <option value="0" selected disabled>Filter Berdasarkan RW</option>
                            <?php foreach ($rt as $key): ?>
                              <option value="<?=$key->rw?>"><?=$key->rw?></option>
                            <?php endforeach ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <button type="submit" class="btn btn-danger btn-block">Cari Chart</button>
                      </div>
                    </div>
                  </form>
                  <br>
                  <canvas class="radar" id="myChart" style="width: 300px; height: 100px;"></canvas>
                  <div class="radarbaru"></div>
                  <!-- <div class="radarbaru2"></div> -->
                </div>
              </div>
            </div>  
<!--             <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form action="javascript:void(0);" id="chartline" method="POST">
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="input-group">
                          <input type="text" id="awallinechart" autocomplete="off" class="form-control" name="awal" placeholder="Dari Tanggal">
                        </div>
                      </div> 
                      <div class="col-lg-4">
                        <div class="input-group">
                          <input type="text" id="akhirlinechart" autocomplete="off" class="form-control" name="akhir" placeholder="Ke Tanggal">
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <button type="submit" class="btn btn-danger">Cari Chart</button>
                      </div>
                    </div>
                  </form>
                  <div class="line" id="line_top_x" style="width: 800px; height: 500px;"></div>
                  <div class="baru"></div>
                </div>
              </div>
            </div> -->
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
                  <form action="javascript:void(0);" id="chartpyramid" method="POST">
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="input-group">
                         <select class="form-control" name="rw" id="rw">
                          <option value="0" selected disabled>Filter Berdasarkan RW</option>
                          <?php foreach ($rt as $key): ?>
                            <option value="<?=$key->rw?>"><?=$key->rw?></option>
                          <?php endforeach ?>
                        </select></div>
                      </div> 
                      <div class="col-lg-4">
                        <div class="input-group">
                          <select class="form-control" name="rw2" id="rw2">
                            <option value="0" selected disabled>Filter Berdasarkan RW</option>
                            <?php foreach ($rt as $key): ?>
                              <option value="<?=$key->rw?>"><?=$key->rw?></option>
                            <?php endforeach ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <button type="submit" class="btn btn-danger btn-block">Cari Chart</button>
                      </div>
                    </div>
                  </form>
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