<?php if($piramid->result() == NULL){ ?>

<p>Tidak ada data</p>
<?php }else{ ?>
<div id="pyramidchart"></div>

<script type="text/javascript">
	google.charts.load('current', {'packages':['bar']});
	google.charts.setOnLoadCallback(drawChartbar);

	function drawChartbar() {
		var data = google.visualization.arrayToDataTable([
			['Kelurahan', 'Jumlah Penduduk', 'Pendapatan'],
			<?php foreach($piramid->result() as $datasql){ 
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
		

		var chart = new google.charts.Bar(document.getElementById('pyramidchart'));

		chart.draw(data, google.charts.Bar.convertOptions(options));
	}
</script>
    <?php } ?>