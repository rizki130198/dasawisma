<?php if($line->result() != NULL){ ?>
<div id="baru" style="width: 800px; height: 500px;"></div>
<script type="text/javascript">
	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(Chartline);

	function Chartline() {
		var data = google.visualization.arrayToDataTable([
			['Kelurahan', 'Jumlah Penduduk', 'Rata-Rata Pendapatan'],
			<?php foreach($line->result() as $datasql){ 
		        $jancok = $this->db->get_where('data',array('kelurahan'=>$datasql->kelurahan));
		        foreach($jancok->result() as $sql) { ?>
		        ['<?=$sql->kelurahan?>',  <?=count($jancok)?>,<?=$sql->pendapatan?>],
		    <?php } } ?>
			]);

		var options = {
			title: 'Perbandingan Jumlah Penduduk dan Jumlah Pendapatan',
			curveType: 'function',
			legend: { position: 'bottom' }
		};

		var chart = new google.visualization.LineChart(document.getElementById('baru'));

		chart.draw(data, options);
	}
</script>
<?php }else{ ?>
<div>Tidak ada data</div>
<?php } ?>