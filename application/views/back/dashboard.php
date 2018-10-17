<body>
<style type="text/css">
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
            <div class="col-lg-7 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <canvas id="myChart" style="width: 300px; height: 100px;"></canvas>
                </div>
              </div>
            </div>  
            <div class="col-lg-5 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div id="line_top_x"></div>
                </div>
              </div>
            </div>
          </div>  
          <div class="row">  
            <div class="col-md-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    
                    <div class="col-md-5">
                      <div class="form-group date">
                        <div class="input-group">
                          <div class="input-group-prepend bg-primary border-primary">
                            <span class="input-group-text bg-transparent text-white">
                              <i class="fas fa-calendar-alt text-white"></i>
                            </span>
                          </div>
                          <input type="text" id='datetimepicker' class="form-control" placeholder="Masukan Tanggal">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="form-group date">
                        <div class="input-group">
                          <div class="input-group-prepend bg-primary border-primary">
                            <span class="input-group-text bg-transparent text-white">
                              <i class="fas fa-calendar-alt text-white"></i>
                            </span>
                          </div>
                          <input type="text" id='datetimepicker1' class="form-control" placeholder="Masukan Tanggal">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <button class="btn btn-primary">Cari</button>
                    </div>
                  </div>
                  <div id="columnchart_material" style="width: 800px; height: 500px;"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">  
            <div class="col-md-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div id="chart_div"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">  
            <div class="col-md-7 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Bar chart</h4>
                  <canvas id="barChart"></canvas>
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