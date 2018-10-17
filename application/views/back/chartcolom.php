<?php if($colom->result() != NULL){ ?>
<div id="columnchart" style="width: 800px; height: 500px;"></div>
<script type="text/javascript">
	google.charts.load('current', {'packages':['bar']});
	google.charts.setOnLoadCallback(drawChartbar);

	function drawChartbar() {
		var data = google.visualization.arrayToDataTable([
			['Kelurahan', 'Jumlah Penduduk', 'Pendapatan'],
			<?php foreach($colom->result() as $datasql){ 
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
		

		var chart = new google.charts.Bar(document.getElementById('columnchart'));

		chart.draw(data, google.charts.Bar.convertOptions(options));
	}
</script>

<?php }else{ ?>
<div>Tidak ada data</div>
<?php } ?>