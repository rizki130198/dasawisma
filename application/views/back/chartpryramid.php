
<div id="pyramidchart"></div>
<div id="pyramidchart2"></div>

<script type="text/javascript">
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawChartbar);

    function drawChartbar() {
        var data = google.visualization.arrayToDataTable([
            ['umur', 'Laki-Laki', 'Perempuan'],
                // var_dump($umur);
                <?php 
        		$post = $this->input->post('rt');
                $anaklaki = $this->db->query('SELECT * FROM data where nama="LAKI-LAKI" AND rt="'.$post.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 0 and 10 ')->num_rows();
                $anakperempuan = $this->db->query('SELECT * FROM data where nama="PEREMPUAN" AND rt="'.$post.'"  AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 0 and 10 ')->num_rows();
                $abglaki = $this->db->query('SELECT * FROM data where nama="LAKI-LAKI" AND rt="'.$post.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 11 and 20 ')->num_rows();
                $abgperempuan = $this->db->query('SELECT * FROM data where nama="PEREMPUAN" AND rt="'.$post.'"  AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 11 and 20 ')->num_rows();
                $dewasalaki = $this->db->query('SELECT * FROM data where nama="LAKI-LAKI" AND rt="'.$post.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 21 and 30 ')->num_rows();
                $dewasaperempuan = $this->db->query('SELECT * FROM data where nama="PEREMPUAN" AND rt="'.$post.'"  AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 21 and 30 ')->num_rows();
                $produktiflaki = $this->db->query('SELECT * FROM data where nama="LAKI-LAKI" AND rt="'.$post.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 31 and 40 ')->num_rows();
                $produktifperempuan = $this->db->query('SELECT * FROM data where nama="PEREMPUAN" AND rt="'.$post.'"  AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 31 and 40 ')->num_rows();
                $lansialaki = $this->db->query('SELECT * FROM data where nama="LAKI-LAKI" AND rt="'.$post.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 41 and 50 ')->num_rows();
                $lansiaperempuan = $this->db->query('SELECT * FROM data where nama="PEREMPUAN" AND rt="'.$post.'"  AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 41 and 50 ')->num_rows();
                $kakek = $this->db->query('SELECT * FROM data where nama="LAKI-LAKI" AND rt="'.$post.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 51 and 60 ')->num_rows();
                $nenek = $this->db->query('SELECT * FROM data where nama="PEREMPUAN" AND rt="'.$post.'"  AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 51 and 60 ')->num_rows();
                $maumatilaki = $this->db->query('SELECT * FROM data where nama="LAKI-LAKI" AND rt="'.$post.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 61 and 100 ')->num_rows();
                $maumatiperempuan = $this->db->query('SELECT * FROM data where nama="PEREMPUAN" AND rt="'.$post.'"  AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 61 and 100 ')->num_rows();
                ?>
                ['61-100 Tahun',<?=$maumatilaki?>, <?=($maumatiperempuan == 0)?0:-$maumatiperempuan?>],
                ['51-60 Tahun',<?=$kakek?>,  <?=($nenek == 0)?0:-$nenek?>],
                ['41-50 Tahun',<?=$lansialaki?>, <?=($lansiaperempuan == 0)?0:-$lansiaperempuan?> ],
                ['31-40 Tahun',<?=$produktiflaki?>, <?=($produktifperempuan == 0)?0:-$produktifperempuan?> ],
                ['21-30 Tahun',<?=$dewasalaki?>,  <?=($dewasaperempuan == 0)?0:-$dewasaperempuan?> ],
                ['11-20 Tahun',<?=$abglaki?>,  <?=($abgperempuan == 0)?0:-$abgperempuan?> ],
                ['0-10 Tahun',<?=$anaklaki?>,  <?=($anakperempuan == 0)?0:-$anakperempuan?> ],
            ]);

        var options = {
            chart: {
                title: 'Perbandingan',
                subtitle: 'Jumlah Perempuan dan Jumlah Laki Berdasarkan RT <?=$post?>',
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
    <script type="text/javascript">
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawChartbar);

    function drawChartbar() {
        var data = google.visualization.arrayToDataTable([
            ['umur', 'Laki-Laki', 'Perempuan'],
                // var_dump($umur);
                <?php 
        		$post2 = $this->input->post('rt2');
                $anaklaki = $this->db->query('SELECT * FROM data where nama="LAKI-LAKI" AND rt="'.$post2.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 0 and 10 ')->num_rows();
                $anakperempuan = $this->db->query('SELECT * FROM data where nama="PEREMPUAN" AND rt="'.$post2.'"  AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 0 and 10 ')->num_rows();
                $abglaki = $this->db->query('SELECT * FROM data where nama="LAKI-LAKI" AND rt="'.$post2.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 11 and 20 ')->num_rows();
                $abgperempuan = $this->db->query('SELECT * FROM data where nama="PEREMPUAN" AND rt="'.$post2.'"  AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 11 and 20 ')->num_rows();
                $dewasalaki = $this->db->query('SELECT * FROM data where nama="LAKI-LAKI" AND rt="'.$post2.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 21 and 30 ')->num_rows();
                $dewasaperempuan = $this->db->query('SELECT * FROM data where nama="PEREMPUAN" AND rt="'.$post2.'"  AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 21 and 30 ')->num_rows();
                $produktiflaki = $this->db->query('SELECT * FROM data where nama="LAKI-LAKI" AND rt="'.$post2.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 31 and 40 ')->num_rows();
                $produktifperempuan = $this->db->query('SELECT * FROM data where nama="PEREMPUAN" AND rt="'.$post2.'"  AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 31 and 40 ')->num_rows();
                $lansialaki = $this->db->query('SELECT * FROM data where nama="LAKI-LAKI" AND rt="'.$post2.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 41 and 50 ')->num_rows();
                $lansiaperempuan = $this->db->query('SELECT * FROM data where nama="PEREMPUAN" AND rt="'.$post2.'"  AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 41 and 50 ')->num_rows();
                $kakek = $this->db->query('SELECT * FROM data where nama="LAKI-LAKI" AND rt="'.$post2.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 51 and 60 ')->num_rows();
                $nenek = $this->db->query('SELECT * FROM data where nama="PEREMPUAN" AND rt="'.$post2.'"  AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 51 and 60 ')->num_rows();
                $maumatilaki = $this->db->query('SELECT * FROM data where nama="LAKI-LAKI" AND rt="'.$post2.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 61 and 100 ')->num_rows();
                $maumatiperempuan = $this->db->query('SELECT * FROM data where nama="PEREMPUAN" AND rt="'.$post2.'"  AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 61 and 100 ')->num_rows();
                ?>
                ['61-100 Tahun',<?=$maumatilaki?>,  <?=($maumatiperempuan == 0)?0:-$maumatiperempuan?>],
                ['51-60 Tahun',<?=$kakek?>,  <?=($nenek == 0)?0:-$nenek?>],
                ['41-50 Tahun',<?=$lansialaki?>, <?=($lansiaperempuan == 0)?0:-$lansiaperempuan?> ],
                ['31-40 Tahun',<?=$produktiflaki?>, <?=($produktifperempuan == 0)?0:-$produktifperempuan?> ],
                ['21-30 Tahun',<?=$dewasalaki?>,  <?=($dewasaperempuan == 0)?0:-$dewasaperempuan?> ],
                ['11-20 Tahun',<?=$abglaki?>,  <?=($abgperempuan == 0)?0:-$abgperempuan?> ],
                ['0-10 Tahun',<?=$anaklaki?>,  <?=($anaklaki == 0)?0:-$anaklaki?> ],
            ]);

        var options = {
            chart: {
                title: 'Perbandingan',
                subtitle: 'Jumlah Perempuan dan Jumlah Laki Berdasarkan RT <?=$post2?>',
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
        

            var chart = new google.charts.Bar(document.getElementById('pyramidchart2'));

            chart.draw(data, google.charts.Bar.convertOptions(options));
        }

    </script>