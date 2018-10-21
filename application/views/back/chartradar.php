<canvas id="myChartbaru" height="300" width="800"></canvas>
<script type="text/javascript">
    <?php 
    $post = $this->input->post('kelu');
    if ($post != "") { 
        $getpendapatan = $this->db->query('SELECT * FROM data where pendapatan="0 JT-5 JT"  AND kelurahan="'.$post.'"')->num_rows();
        $bangunan = $this->db->query('SELECT * FROM data where kondisi_bangunan = "TIDAK LAYAK HUNI"  AND kelurahan="'.$post.'"')->num_rows();
        $sekolah = $this->db->query('SELECT * FROM data where putus_sekolah="YA"  AND kelurahan="'.$post.'"')->num_rows(); 
        $sumur = $this->db->query('SELECT * FROM data where sumur_air_tanah="YA"  AND kelurahan="'.$post.'"')->num_rows(); 
        $pdam = $this->db->query('SELECT * FROM data where pdam="YA"  AND kelurahan="'.$post.'"')->num_rows(); 
        $medis = $this->db->query('SELECT * FROM data where riwayat_medis!="TIDAK"  AND kelurahan="'.$post.'"')->num_rows(); 
        $balita = $this->db->query('SELECT * FROM data where (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 0 and 5   AND kelurahan="'.$post.'"')->num_rows();
        $hamil = $this->db->query('SELECT * FROM data where status_ibu="HAMIL"  AND kelurahan="'.$post.'"')->num_rows(); 
        $disabilitas = $this->db->query('SELECT * FROM data where disabilitas="YA" AND kelurahan="'.$post.'"')->num_rows(); ?>
        new Chart(document.getElementById("myChartbaru"),
        {
            "type":"radar",
            "data":{
                "labels":['Pendapatan 0- 5 Juta', 'Tidak Layak Huni', 'Putus Sekolah', 'Sumber Air Tanah', 'Sumber PDAM', 'Ada Riwayat Medis','Usia Balita 0-5 thn','Ibu Hamil','Disabilitas'],
                "datasets": [
                {
                    "label" : 'Kelurahan <?=$post?>',
                    "fill":true,
                    "backgroundColor":"rgba(255, 99, 132,0.5)",
                    "pointBackgroundColor":"rgba(255, 99, 132,0.5)",
                    "data": [<?=$getpendapatan?>,<?=$bangunan?> ,<?=$sekolah?>,<?=$sumur?>, <?=$pdam?>,<?=$medis?>,<?=$balita?>,<?=$hamil?>]
                },
                <?php $post2 = $this->input->post('rw'); if ($post2 != ""):
                $getpendapatan = $this->db->query('SELECT * FROM data where pendapatan="0 JT-5 JT"  AND rw="'.$post2.'"')->num_rows();
                $bangunan = $this->db->query('SELECT * FROM data where kondisi_bangunan = "TIDAK LAYAK HUNI"  AND rw="'.$post2.'"')->num_rows();
                $sekolah = $this->db->query('SELECT * FROM data where putus_sekolah="YA"  AND rw="'.$post2.'"')->num_rows(); 
                $sumur = $this->db->query('SELECT * FROM data where sumur_air_tanah="YA"  AND rw="'.$post2.'"')->num_rows(); 
                $pdam = $this->db->query('SELECT * FROM data where pdam="YA"  AND rw="'.$post2.'"')->num_rows(); 
                $medis = $this->db->query('SELECT * FROM data where riwayat_medis!="TIDAK"  AND rw="'.$post2.'"')->num_rows(); 
                $balita = $this->db->query('SELECT * FROM data where (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 0 and 5 AND rw="'.$post2.'"')->num_rows();
                $hamil2 = $this->db->query('SELECT * FROM data where status_ibu="HAMIL"  AND rw="'.$post2.'"')->num_rows(); 
                $disabilitas = $this->db->query('SELECT * FROM data where disabilitas="YA" AND rw="'.$post2.'"')->num_rows(); ?>

                {"label" : 'Berdasarkan RW <?=$post2?> Kel <?=$post?>',
                "fill":true,
                "backgroundColor":"rgba(255, 67, 12, 0.2)",
                "borderColor":"rgb(255, 67, 12)",
                "pointBackgroundColor":"rgb(255, 67, 12)",
                "pointBorderColor":"#fff",
                "pointHoverBackgroundColor":"#fff",
                "pointHoverBorderColor":"rgb(255, 67, 12)",
                "data": [<?=$getpendapatan?>,<?=$bangunan?> ,<?=$sekolah?>,<?=$sumur?>, <?=$pdam?>,<?=$medis?>,<?=$balita?>,<?=$hamil?>,<?=$disabilitas?>]
            }
        <?php endif ?>

        ],
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
    <?php } ?>
</script>