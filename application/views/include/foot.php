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
                $('.radarbaru').show();
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
	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(drawChartline);

	function drawChartline() {
		var data = google.visualization.arrayToDataTable([
			['Kelurahan', 'Jumlah Penduduk', 'Rata-Rata Pendapatan'],
			<?php foreach($chart->result() as $datasql){ 
		        $cijancok = $this->db->get_where('data',array('kelurahan'=>$datasql->kelurahan));
		        foreach($cijancok->result() as $sql) { ?>
		        ['<?=$sql->kelurahan?>',  <?=count($cijancok)?>,<?=$sql->pendapatan?>],
		    <?php } } ?>
			]);

		var options = {
			title: 'Perbandingan Jumlah Penduduk dan Jumlah Pendapatan',
			curveType: 'function',
			legend: { position: 'bottom' }
		};

		var chart = new google.visualization.LineChart(document.getElementById('line_top_x'));

		chart.draw(data, options);
	}
</script>
<script type="text/javascript">
	google.charts.load('current', {'packages':['bar']});
	google.charts.setOnLoadCallback(drawChartbar);

	function drawChartbar() {
		var data = google.visualization.arrayToDataTable([
			['Kelurahan', 'Jumlah Penduduk', 'Pendapatan'],
			<?php foreach($chart->result() as $datasql){ 
		        $cijancok = $this->db->get_where('data',array('kelurahan'=>$datasql->kelurahan));
		        foreach($cijancok->result() as $sql) { ?>
		        ['<?=$sql->kelurahan?>',  10000,<?=$sql->pendapatan?>],
		    <?php } } ?>
			]);

		var options = {
			chart: {
				title: 'Perbandingan',
				subtitle: 'Jumlah Penduduk dan Jumlah Pendapatan',
			},
		};
		

		var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

		chart.draw(data, google.charts.Bar.convertOptions(options));
	}
</script>
<script type="text/javascript">
	google.charts.load('current', {'packages':['bar']});
	google.charts.setOnLoadCallback(drawChartbar);

	function drawChartbar() {
		var data = google.visualization.arrayToDataTable([
			['Kelurahan', 'Jumlah Penduduk', 'Pendapatan'],
			<?php foreach($chart->result() as $datasql){ 
		        $cijancok = $this->db->get_where('data',array('kelurahan'=>$datasql->kelurahan));
		        foreach($cijancok->result() as $sql) { ?>
		        ['<?=$sql->kelurahan?>',  10000,- <?=$sql->pendapatan?>],
		    <?php } } ?>
			]);

		var options = {
			chart: {
				title: 'Perbandingan',
				subtitle: 'Jumlah Penduduk dan Jumlah Pendapatan',
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
    
    	new Chart(document.getElementById("myChart"),
		{
            "type":"radar",
            "data":{
                "labels":['Pendapatan', 'Jumlah Penduduk','Penduduk Sakit', ' Tua Renta'],
                 "datasets": [
                    <?php foreach($chart->result() as $datasql){ 
                $cijancok = $this->db->get_where('data',array('kelurahan'=>$datasql->kelurahan));
                foreach($cijancok->result() as $sql) { ?>
                {
                "label" : '<?= $sql->kelurahan ?>',
                "fill":true,
                    "backgroundColor":"rgba(255, 99, 132, 0.2)",
                    "borderColor":"rgb(255, 99, 132)",
                    "pointBackgroundColor":"rgb(255, 99, 132)",
                    "pointBorderColor":"#fff",
                    "pointHoverBackgroundColor":"#fff",
                    "pointHoverBorderColor":"rgb(255, 99, 132)",
                "data": [90, 85,75, 69]
            },
            <?php } } ?>
            ]
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