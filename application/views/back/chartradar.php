 <canvas id="myChartbaru" style="width: 300px; height: 100px;"></canvas>
 <script type="text/javascript">
    	var ctx = document.getElementById('myChartbaru').getContext('2d');
    	var chart = new Chart(ctx, {
    	type: 'radar',
    	data: {
    		labels: ['Pendapatan', 'Jumlah Penduduk','Penduduk Sakit', ' Tua Renta'],
    		
		        datasets: [
		            <?php foreach($radar->result() as $datasql){ 
		        $jancok = $this->db->get_where('data',array('kelurahan'=>$datasql->kelurahan));
		        foreach($jancok->result() as $sql) { ?>
		        {
    			label : '<?= $sql->kelurahan ?>',
    			borderColor:'blue',
    			pointBackgroundColor:'blue',
    			data: [1000000, <?= $sql->pendapatan ?>,<?= $sql->sakit == 1 ?>, <?= $sql->tua == 1 ?>]
    		},
		    <?php } } ?>
		    ]
    	},
    	options: {
    		scale: {
        // Hides the scale
        display: true
    }
},
});
</script>