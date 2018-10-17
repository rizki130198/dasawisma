<script type="text/javascript" src="<?php echo base_url('assets/js/jq.js'); ?>"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/vendor.bundle.base.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/vendor.bundle.addons.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/off-canvas.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/misc.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/chart.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/dashboard.js'); ?>"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/locales/bootstrap-datepicker.es.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".datatable").DataTable();
    });
</script>
<script >
    $(function () {
        $('#datetimepicker').datepicker({
            format: "dd/mm/yyyy",
            autoclose: true,
            todayHighlight: true
        });
        $('#datetimepicker1').datepicker({
            format: "dd/mm/yyyy",
            autoclose: true,
            todayHighlight: true
        });
    });
</script>
<script type="text/javascript">
	google.charts.load('current', {'packages':['bar']});
	google.charts.setOnLoadCallback(drawChartbar);

	function drawChartbar() {
		var data = google.visualization.arrayToDataTable([
			['Kelurahan', 'Jumlah Penduduk', 'Pendapatan'],
			['Cengkareng', 1000, 400],
			['Cilincing', 1170, 460],
			['Condet', 660, 1120],
			['Pasar Minggu', 1030, 540]
			]);

		var options = {
			chart: {
				title: 'Perbandingan',
				subtitle: 'Jumlah Penduduk dan Jumlah Pendapatan',
			}
		};

		var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

		chart.draw(data, google.charts.Bar.convertOptions(options));
	}
</script>
<script type="text/javascript">
	google.charts.load("current", "1", {packages:["corechart"]});
	google.charts.setOnLoadCallback(chartpryramid);

	function chartpryramid()
	{
            //var data = new google.visualization.DataTable();

            var data = google.visualization.arrayToDataTable([
            	['Kelurahan', 'Jumlah Penduduk', 'Pendapatan'],
            	['Pasar Minggu', 68,  -64 ],
            	['Condet', 79,  -77 ],
            	['Cilincing',   91,  -86 ],
            	['Cengkareng',   106, -104]
            	]);


            var options = {
            	isStacked: true,
            	hAxis: {
            		format: ';'
            	},
            	vAxis: {
            		direction: -1
            	},
            	bars: 'horizontal'
            };


            var formatter = new google.visualization.NumberFormat({
            	pattern: ';'
            });

            formatter.format(data, 2)

            var chart = new google.charts.Bar(document.getElementById('chart_div'));

            chart.draw(data, google.charts.Bar.convertOptions(options));
        }

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script type="text/javascript">
    	var ctx = document.getElementById('myChart').getContext('2d');
    	var chart = new Chart(ctx, {
    // Tvar myRadarChart = new Chart(ctx, {
    	type: 'radar',
    	data: {
    		labels: ['Pendapatan', 'Jumlah Penduduk','Penduduk Sakit', ' Tua Renta'],
    		datasets: [{
    			label : 'Pasar Minggu',
    			borderColor:'blue',
    			pointBackgroundColor:'blue',
    			data: [1000000, 10000000,800000, 100000]
    		},
    		{
    			label : 'Condet',
    			borderColor:'red',
    			pointBackgroundColor:'red',
    			data: [10000000, 20000000, 100000,10000]
    		}]
    	},
    	options: {
    		scale: {
        // Hides the scale
        display: true
    }
},
});
</script>
</body>
</html>