<div class="row">
    <div class="col-md-6">
        <div class="wraper">
            <canvas id="myChartbaru" height="300" width="100"></canvas>
        </div>
    </div>
    <div class="col-md-6">
        <div class="wraper">
            <canvas id="myChartbaru2" height="300" width="100"></canvas>
        </div>
    </div>
</div>
<script type="text/javascript">
    <?php 
    $post = $this->input->post('rt');
    $penduduk = $this->db->query('SELECT * FROM data where rt="'.$post.'" ')->num_rows();
    $jomblo = $this->db->query('SELECT * FROM data where status_kawin="BELUM KAWIN" AND rt="'.$post.'"')->num_rows(); 
    $nikah = $this->db->query('SELECT * FROM data where status_kawin="KAWIN" AND rt="'.$post.'"')->num_rows(); 
    $janda = $this->db->query('SELECT * FROM data where status_kawin="JANDA" AND rt="'.$post.'"')->num_rows(); 
    $duda = $this->db->query('SELECT * FROM data where status_kawin="DUDA" AND rt="'.$post.'"')->num_rows(); 
    $getpendapatan = $this->db->query('SELECT * FROM data where pendapatan="0 JT - 5 JT" OR pendapatan = " " AND rt="'.$post.'"')->num_rows(); 
    $getpendapatan2 = $this->db->query('SELECT * FROM data where pendapatan="6 JT-10 JT" AND rt="'.$post.'"')->num_rows(); 
    $getpendapatan3 = $this->db->query('SELECT * FROM data where pendapatan!="6 JT-10 JT" AND pendapatan!="0 JT - 5 JT" AND pendapatan != " " AND rt="'.$post.'"')->num_rows(); 
    $maumati = $this->db->query('SELECT * FROM data where (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 50 and 100 AND rt="'.$post.'"')->num_rows(); ?>
    new Chart(document.getElementById("myChartbaru"),
    {
        "type":"radar",
        "data":{
            "labels":['Pendapatan 0- 5 Juta', 'Pendapatan 6-10 juta', 'Pendapatan 10-20 Juta', 'Jumlah Penduduk', 'Tua Renta', 'Belum Nikah', 'Sudah Nikah', 'Janda','DUDA'],
            "datasets": [{
                "label" : '<?=$post?>',
                "fill":true,
                "backgroundColor":"rgba(255, 99, 132, 0.2)",
                "borderColor":"rgb(255, 99, 132)",
                "pointBackgroundColor":"rgb(255, 99, 132)",
                "pointBorderColor":"#fff",
                "pointHoverBackgroundColor":"#fff",
                "pointHoverBorderColor":"rgb(255, 99, 132)",
                "data": [<?=$getpendapatan?>,<?=$getpendapatan2?> ,<?=$getpendapatan3?>,<?=$penduduk?>, <?=$maumati?>,<?=$jomblo?>,<?=$nikah?>,<?=$janda?>,<?=$duda?>]
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
    $post2 = $this->input->post('rt2');
    $penduduk = $this->db->query('SELECT * FROM data where rt="'.$post2.'"')->num_rows();
    $jomblo = $this->db->query('SELECT * FROM data where status_kawin="BELUM KAWIN" AND rt="'.$post2.'"')->num_rows(); 
    $nikah = $this->db->query('SELECT * FROM data where status_kawin="KAWIN" AND rt="'.$post2.'"')->num_rows(); 
    $janda = $this->db->query('SELECT * FROM data where status_kawin="JANDA" AND rt="'.$post2.'"')->num_rows(); 
    $duda = $this->db->query('SELECT * FROM data where status_kawin="DUDA" AND rt="'.$post2.'"')->num_rows(); 
    $getpendapatan = $this->db->query('SELECT * FROM data where pendapatan="0 JT - 5 JT" OR pendapatan = " " AND rt="'.$post2.'"')->num_rows(); 
    $getpendapatan2 = $this->db->query('SELECT * FROM data where pendapatan="6 JT-10 JT" AND rt="'.$post2.'"')->num_rows(); 
    $getpendapatan3 = $this->db->query('SELECT * FROM data where pendapatan!="6 JT-10 JT" AND pendapatan!="0 JT - 5 JT" AND pendapatan != " " AND rt="'.$post2.'"')->num_rows(); 
    $maumati = $this->db->query('SELECT * FROM data where (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 50 and 100 AND rt="'.$post2.'"')->num_rows(); ?>
    new Chart(document.getElementById("myChartbaru2"),
    {
        "type":"radar",
        "data":{
            "labels":['Pendapatan 0- 5 Juta', 'Pendapatan 6-10 juta', 'Pendapatan 10-20 Juta', 'Jumlah Penduduk', 'Tua Renta', 'Belum Nikah', 'Sudah Nikah', 'Janda','DUDA'],
            "datasets": [{
                "label" : '<?=$post2?>',
                "fill":true,
                "backgroundColor":"rgba(255, 99, 132, 0.2)",
                "borderColor":"rgb(255, 99, 132)",
                "pointBackgroundColor":"rgb(255, 99, 132)",
                "pointBorderColor":"#fff",
                "pointHoverBackgroundColor":"#fff",
                "pointHoverBorderColor":"rgb(255, 99, 132)",
                "data": [<?=$getpendapatan?>,<?=$getpendapatan2?> ,<?=$getpendapatan3?>,<?=$penduduk?>, <?=$maumati?>,<?=$jomblo?>,<?=$nikah?>,<?=$janda?>,<?=$duda?>]
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