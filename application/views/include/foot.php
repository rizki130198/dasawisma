<script type="text/javascript" src="<?php echo base_url('assets/js/jq.js'); ?>"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/vendor.bundle.base.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/vendor.bundle.addons.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/off-canvas.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/misc.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/dashboard.js'); ?>"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/locales/bootstrap-datepicker.es.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script type="text/javascript">
    function rt() {
        console.log(('#rt').val());
    }
    $("#chartline").submit(function() {
        var dt = $("#chartline").serialize();
        $.ajax({
            url: "<?=site_url('main/chartline')?>",
            type: 'POST',
            data: dt,
            dataType: 'html',
            success:function(res) {
                $('.line').hide();
                $('.baru').html(res);
                $('.baru').show();
            }
        })
    });
        $("#chartcolum").submit(function() {
        var dt = $("#chartcolum").serialize();
        $.ajax({
            url: "<?=site_url('main/chartcolum')?>",
            type: 'POST',
            data: dt,
            dataType: 'html',
            success:function(res) {
                $('.colom').hide();
                $('.barucolom').html(res);
                $('.barucolom').show();
            }
        })
    });
        $("#chartpyramid").submit(function() {
        var dt = $("#chartpyramid").serialize();
        $.ajax({
            url: "<?=site_url('main/chartpyramid')?>",
            type: 'POST',
            data: dt,
            dataType: 'html',
            success:function(res) {
                $('.pyramid').hide();
                $('.barupyramid').html(res);
                $('.barupyramid').show();
                $('.barupyramid2').html(res);
                $('.barupyramid2').show();
            }
        })
    });
    $("#chartradar").submit(function() {
        var dt = $("#chartradar").serialize();
        $.ajax({
            url: "<?=site_url('main/chartradar')?>",
            type: 'POST',
            data: dt,
            dataType: 'html',
            success:function(res) {
                $('.radar').hide();
                $('.radarbaru').html(res);
                $('.radarbaru2').html(res);
                $('.radarbaru').show();
                $('.radarbaru2').show();
            }
        })
    });
	$(document).ready(function() {
		$(".datatable").DataTable();
	});
	
</script>
<script >
    $(function () {
        // Awal Colom
        	$('#awalcolomchart').datepicker({
                format: 'yyyy-mm-dd' 
            }).on('changeDate', function(selected){
                startDate = new Date(selected.date.valueOf());
                startDate.setDate(startDate.getDate(new Date(selected.date.valueOf())));
                $('#akhircolomchart').datepicker('setStartDate', startDate);
            }); 
    
        $('#akhircolomchart').datepicker({
                format: 'yyyy-mm-dd'
            }).on('changeDate', function(selected){
                FromEndDate = new Date(selected.date.valueOf());
                FromEndDate.setDate(FromEndDate.getDate(new Date(selected.date.valueOf())));
                $('#awalcolomchart').datepicker('setEndDate', FromEndDate);
            });
            
            // Awal Line
            $('#awallinechart').datepicker({
                format: 'yyyy-mm-dd' 
            }).on('changeDate', function(selected){
                startDate = new Date(selected.date.valueOf());
                startDate.setDate(startDate.getDate(new Date(selected.date.valueOf())));
                $('#akhirlinechart').datepicker('setStartDate', startDate);
            }); 

        $('#akhirlinechart').datepicker({
                format: 'yyyy-mm-dd'
            }).on('changeDate', function(selected){
                FromEndDate = new Date(selected.date.valueOf());
                FromEndDate.setDate(FromEndDate.getDate(new Date(selected.date.valueOf())));
                $('#awallinechart').datepicker('setEndDate', FromEndDate);
            });
            
            // Chart Bar
        $('#awalchartbar').datepicker({
                format: 'yyyy-mm-dd' 
            }).on('changeDate', function(selected){
                startDate = new Date(selected.date.valueOf());
                startDate.setDate(startDate.getDate(new Date(selected.date.valueOf())));
                $('#akhirchartbar').datepicker('setStartDate', startDate);
            }); 

        $('#akhirchartbar').datepicker({
                format: 'yyyy-mm-dd'
            }).on('changeDate', function(selected){
                FromEndDate = new Date(selected.date.valueOf());
                FromEndDate.setDate(FromEndDate.getDate(new Date(selected.date.valueOf())));
                $('#awalchartbar').datepicker('setEndDate', FromEndDate);
            });
            
            // Awal Piramid
            $('#awalpyramidchart').datepicker({
                format: 'yyyy-mm-dd' 
            }).on('changeDate', function(selected){
                startDate = new Date(selected.date.valueOf());
                startDate.setDate(startDate.getDate(new Date(selected.date.valueOf())));
                $('#akhirpyramidchart').datepicker('setStartDate', startDate);
            }); 

        $('#akhirpyramidchart').datepicker({
                format: 'yyyy-mm-dd'
            }).on('changeDate', function(selected){
                FromEndDate = new Date(selected.date.valueOf());
                FromEndDate.setDate(FromEndDate.getDate(new Date(selected.date.valueOf())));
                $('#awalpyramidchart').datepicker('setEndDate', FromEndDate);
            });
            
            //Awal Radar
        $('#awalradarchart').datepicker({
            format: 'yyyy-mm-dd' 
            }).on('changeDate', function(selected){
                startDate = new Date(selected.date.valueOf());
                startDate.setDate(startDate.getDate(new Date(selected.date.valueOf())));
                $('#akhirradarchart').datepicker('setStartDate', startDate);
            }); 
       $('#akhirradarchart').datepicker({
                format: 'yyyy-mm-dd'
            }).on('changeDate', function(selected){
                FromEndDate = new Date(selected.date.valueOf());
                FromEndDate.setDate(FromEndDate.getDate(new Date(selected.date.valueOf())));
                $('#awalradarchart').datepicker('setEndDate', FromEndDate);
            });
    });
</script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawChartbar);

    function drawChartbar() {
        var data = google.visualization.arrayToDataTable([
            ['umur', 'Laki-Laki', 'Perempuan'],
                // var_dump($umur);
                <?php 
                $anaklaki = $this->db->query('SELECT * FROM data where nama="LAKI-LAKI" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 0 and 10 ')->num_rows();
                $anakperempuan = $this->db->query('SELECT * FROM data where nama="PEREMPUAN" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 0 and 10 ')->num_rows();
                $abglaki = $this->db->query('SELECT * FROM data where nama="LAKI-LAKI" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 11 and 20 ')->num_rows();
                $abgperempuan = $this->db->query('SELECT * FROM data where nama="PEREMPUAN" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 11 and 20 ')->num_rows();
                $dewasalaki = $this->db->query('SELECT * FROM data where nama="LAKI-LAKI" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 21 and 30 ')->num_rows();
                $dewasaperempuan = $this->db->query('SELECT * FROM data where nama="PEREMPUAN" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 21 and 30 ')->num_rows();
                $produktiflaki = $this->db->query('SELECT * FROM data where nama="LAKI-LAKI" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 31 and 40 ')->num_rows();
                $produktifperempuan = $this->db->query('SELECT * FROM data where nama="PEREMPUAN" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 31 and 40 ')->num_rows();
                $lansialaki = $this->db->query('SELECT * FROM data where nama="LAKI-LAKI" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 41 and 50 ')->num_rows();
                $lansiaperempuan = $this->db->query('SELECT * FROM data where nama="PEREMPUAN" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 41 and 50 ')->num_rows();
                $kakek = $this->db->query('SELECT * FROM data where nama="LAKI-LAKI" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 51 and 60 ')->num_rows();
                $nenek = $this->db->query('SELECT * FROM data where nama="PEREMPUAN" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 51 and 60 ')->num_rows();
                $maumatilaki = $this->db->query('SELECT * FROM data where nama="LAKI-LAKI" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 61 and 100 ')->num_rows();
                $maumatiperempuan = $this->db->query('SELECT * FROM data where nama="PEREMPUAN" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 61 and 100 ')->num_rows();
                ?>
                ['61-100 Tahun',<?=$maumatilaki?>,  -<?=$maumatiperempuan?>],
                ['51-60 Tahun',<?=$kakek?>,  -<?=$nenek?>],
                ['41-50 Tahun',<?=$lansialaki?>, -<?=$lansiaperempuan?> ],
                ['31-40 Tahun',<?=$produktiflaki?>, -<?=$produktifperempuan?> ],
                ['21-30 Tahun',<?=$dewasalaki?>,  -<?=$dewasaperempuan?> ],
                ['11-20 Tahun',<?=$abglaki?>,  -<?=$abgperempuan?> ],
                ['0-10 Tahun',<?=$anaklaki?>,  -<?=$anakperempuan?> ],
            ]);

        var options = {
            chart: {
                title: 'Perbandingan',
                subtitle: 'Jumlah Perempuan dan Jumlah Laki Berdasarkan Kelurahan GAMBIR',
            },
              isStacked: true,
                hAxis: {
                    format: ';'
                },
                vAxis: {
                    direction: -1
                },
            bars: 'horizontal'
        };
        

            var chart = new google.charts.Bar(document.getElementById('chart_div'));

            chart.draw(data, google.charts.Bar.convertOptions(options));
        }

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script type="text/javascript">
        <?php 
        $penduduk = $this->db->query('SELECT * FROM data')->num_rows();
        $jomblo = $this->db->query('SELECT * FROM data where status_kawin="BELUM KAWIN"')->num_rows(); 
        $nikah = $this->db->query('SELECT * FROM data where status_kawin="KAWIN"')->num_rows(); 
        $janda = $this->db->query('SELECT * FROM data where status_kawin="JANDA"')->num_rows(); 
        $duda = $this->db->query('SELECT * FROM data where status_kawin="DUDA"')->num_rows(); 
        $getpendapatan = $this->db->query('SELECT * FROM data where pendapatan="0 JT - 5 JT" OR pendapatan = " "')->num_rows(); 
        $getpendapatan2 = $this->db->query('SELECT * FROM data where pendapatan="6 JT-10 JT"')->num_rows(); 
        $getpendapatan3 = $this->db->query('SELECT * FROM data where pendapatan!="6 JT-10 JT" AND pendapatan!="0 JT - 5 JT" AND pendapatan != " "')->num_rows(); 
        $maumati = $this->db->query('SELECT * FROM data where (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 50 and 100 ')->num_rows(); ?>
    	new Chart(document.getElementById("myChart"),
		{
            "type":"radar",
            "data":{
                "labels":['Pendapatan 0- 5 Juta', 'Pendapatan 6-10 juta', 'Pendapatan 10-20 Juta', 'Jumlah Penduduk', 'Tua Renta', 'Belum Nikah', 'Sudah Nikah', 'Janda','DUDA'],
                 "datasets": [{
                "label" : 'GAMBIR',
                "fill":true,
                    "backgroundColor":"rgba(255, 99, 132, 0.2)",
                    "borderColor":"rgb(255, 99, 132)",
                    "pointBackgroundColor":"rgb(255, 99, 132)",
                    "pointBorderColor":"#fff",
                    "pointHoverBackgroundColor":"#fff",
                    "pointHoverBorderColor":"rgb(255, 99, 132)",
                "data": [<?=$getpendapatan?>,<?=$getpendapatan2?> ,<?=$getpendapatan3?>,700, <?=$maumati?>,<?=$jomblo?>,<?=$nikah?>,<?=$janda?>,<?=$duda?>]
            }],
        },
            "options":
            {
                "elements":
                {
                    "line":
                    {
                        "tension":0,
                        "borderWidth":3
                    }
                }
            }
        });
</script>
</body>
</html>