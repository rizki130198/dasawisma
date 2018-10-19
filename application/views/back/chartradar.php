<div class="row">
    <div class="col-md-6">
<canvas id="myChartbaru" style="width: 300px; height: 100px;"></canvas>
</div>
<div class="col-md-6">
<canvas id="myChartbaru2" style="width: 300px; height: 100px;"></canvas>
</div>
</div>
<script type="text/javascript">
    <?php 
    
        $post = $this->input->post('rw');
        $getpendapatan = $this->db->query('SELECT * FROM data where pendapatan="0 JT-5 JT"  AND rw="'.$post.'"')->num_rows();
        $bangunan = $this->db->query('SELECT * FROM data where kondisi_bangunan = "TIDAK LAYAK HUNI"  AND rw="'.$post.'"')->num_rows();
        $sekolah = $this->db->query('SELECT * FROM data where putus_sekolah="YA"  AND rw="'.$post.'"')->num_rows(); 
        $sumur = $this->db->query('SELECT * FROM data where sumur_air_tanah="YA"  AND rw="'.$post.'"')->num_rows(); 
        $pdam = $this->db->query('SELECT * FROM data where pdam="YA"  AND rw="'.$post.'"')->num_rows(); 
        $medis = $this->db->query('SELECT * FROM data where riwayat_medis!="TIDAK"  AND rw="'.$post.'"')->num_rows(); 
        $balita = $this->db->query('SELECT * FROM data where (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 0 and 5   AND rw="'.$post.'"')->num_rows();
        $hamil = $this->db->query('SELECT * FROM data where status_ibu="HAMIL"  AND rw="'.$post.'"')->num_rows(); ?>
    new Chart(document.getElementById("myChartbaru"),
    {
            "type":"radar",
            "data":{
                "labels":['Pendapatan 0- 5 Juta', 'Tidak Layak Huni', 'Putus Sekolah', 'Sumber Air Tanah', 'Sumber PDAM', 'Ada Riwayat Medis','Usia Balita 0-5 thn','Ibu Hamil'],
                 "datasets": [{
                "label" : 'Rw <?=$post?>',
                "fill":true,
                    "backgroundColor":"rgba(255, 99, 132, 0.2)",
                    "borderColor":"rgb(255, 99, 132)",
                    "pointBackgroundColor":"rgb(255, 99, 132)",
                    "pointBorderColor":"#fff",
                    "pointHoverBackgroundColor":"#fff",
                    "pointHoverBorderColor":"rgb(255, 99, 132)",
                "data": [<?=$getpendapatan?>,<?=$bangunan?> ,<?=$sekolah?>,<?=$sumur?>, <?=$pdam?>,<?=$medis?>,<?=$balita?>,<?=$hamil?>]
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
    <script type="text/javascript">
        <?php 
        $post2 = $this->input->post('rw2');
        $getpendapatan = $this->db->query('SELECT * FROM data where pendapatan="0 JT-5 JT"  AND rw="'.$post2.'"')->num_rows();
        $bangunan = $this->db->query('SELECT * FROM data where kondisi_bangunan = "TIDAK LAYAK HUNI"  AND rw="'.$post2.'"')->num_rows();
        $sekolah = $this->db->query('SELECT * FROM data where putus_sekolah="YA"  AND rw="'.$post2.'"')->num_rows(); 
        $sumur = $this->db->query('SELECT * FROM data where sumur_air_tanah="YA"  AND rw="'.$post2.'"')->num_rows(); 
        $pdam = $this->db->query('SELECT * FROM data where pdam="YA"  AND rw="'.$post2.'"')->num_rows(); 
        $medis = $this->db->query('SELECT * FROM data where riwayat_medis!="TIDAK"  AND rw="'.$post2.'"')->num_rows(); 
        $balita = $this->db->query('SELECT * FROM data where (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 0 and 5   AND rw="'.$post2.'"')->num_rows();
        $hamil = $this->db->query('SELECT * FROM data where status_ibu="HAMIL"  AND rw="'.$post2.'"')->num_rows(); ?>
        new Chart(document.getElementById("myChartbaru2"),
        {
            "type":"radar",
            "data":{
                "labels":['Pendapatan 0- 5 Juta', 'Tidak Layak Huni', 'Putus Sekolah', 'Sumber Air Tanah', 'Sumber PDAM', 'Ada Riwayat Medis','Usia Balita 0-5 thn','Ibu Hamil'],
                 "datasets": [{
                "label" : 'RW <?=$post2?>',
                "fill":true,
                    "backgroundColor":"rgba(255, 99, 132, 0.2)",
                    "borderColor":"rgb(255, 99, 132)",
                    "pointBackgroundColor":"rgb(255, 99, 132)",
                    "pointBorderColor":"#fff",
                    "pointHoverBackgroundColor":"#fff",
                    "pointHoverBorderColor":"rgb(255, 99, 132)",
                "data": [<?=$getpendapatan?>,<?=$bangunan?> ,<?=$sekolah?>,<?=$sumur?>, <?=$pdam?>,<?=$medis?>,<?=$balita?>,<?=$hamil?>]
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