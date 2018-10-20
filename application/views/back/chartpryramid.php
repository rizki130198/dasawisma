
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

        		$post = $this->input->post('rw');
                $balitalaki = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND rw="'.$post.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 0 and 5 ')->num_rows();
                $balitaperempuan = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND rw="'.$post.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 0 and 5 ')->num_rows();
                $analaki = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND rw="'.$post.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 6 and 10 ')->num_rows();
                $anakperempuan = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND rw="'.$post.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 6 and 10 ')->num_rows();
                $abglaki = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND rw="'.$post.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 11 and 15 ')->num_rows();
                $abgperempuan = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND rw="'.$post.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 11 and 15 ')->num_rows();
                $mau20laki = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND rw="'.$post.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 16 and 20 ')->num_rows();
                $mau20perempuan = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND rw="'.$post.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 16 and 20 ')->num_rows();
                $usialaki = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND rw="'.$post.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 21 and 25 ')->num_rows();
                $usiaperempuan = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND rw="'.$post.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 21 and 25 ')->num_rows();
                $dewasalaki = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND rw="'.$post.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 26 and 30 ')->num_rows();
                $dewasaperempuan = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND rw="'.$post.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 26 and 30 ')->num_rows();
                $om = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND rw="'.$post.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 31 and 35 ')->num_rows();
                $tante = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND rw="'.$post.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 31 and 35 ')->num_rows();
                $produktiflaki = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND rw="'.$post.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 36 and 40 ')->num_rows();
                $produktifperempuan = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND rw="'.$post.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 36 and 40 ')->num_rows();
                $laki = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND rw="'.$post.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 41 and 45 ')->num_rows();
                $perempuan = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND rw="'.$post.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 41 and 45 ')->num_rows();
                $maujadikakek = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND rw="'.$post.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 46 and 50 ')->num_rows();
                $maujadinenek = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND rw="'.$post.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 46 and 50 ')->num_rows();
                $kakek = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND rw="'.$post.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 51 and 55 ')->num_rows();
                $nenek = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND rw="'.$post.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 51 and 55 ')->num_rows();
                $pensiunlaki = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND rw="'.$post.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 56 and 60 ')->num_rows();
                $pensiunperempuan = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND rw="'.$post.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 56 and 60 ')->num_rows();
                $lansialaki = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND rw="'.$post.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 61 and 65 ')->num_rows();
                $lansiaperempuan = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND rw="'.$post.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 61 and 65 ')->num_rows();
                $maumatilaki = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND rw="'.$post.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 66 and 70 ')->num_rows();
                $maumatiperempuan = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND rw="'.$post.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 66 and 70 ')->num_rows();
                $batasumurlaki = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND rw="'.$post.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 71 and 75 ')->num_rows();
                $batasumurperempuan = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND rw="'.$post.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 71 and 75 ')->num_rows();
                $batasumurlaki2 = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND rw="'.$post.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 76 and 80 ')->num_rows();
                $batasumurperempuan2 = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND rw="'.$post.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 76 and 80 ')->num_rows();
                $batasumurlaki3 = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND rw="'.$post.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 81 and 85 ')->num_rows();
                $batasumurperempuan3 = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND rw="'.$post.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 81 and 85 ')->num_rows();
                $batasumurlaki4 = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND rw="'.$post.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 86 and 90 ')->num_rows();
                $batasumurperempuan4 = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND rw="'.$post.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 86 and 90 ')->num_rows();
                $batasumurlaki5 = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND rw="'.$post.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 91 and 99 ')->num_rows();
                $batasumurperempuan5 = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND rw="'.$post.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 91 and 99 ')->num_rows();

                ?>
                 ['91-95 Tahun',<?=$batasumurlaki5?>,  <?=($batasumurperempuan5==0)?0:-$batasumurperempuan5?> ],
                ['86-90 Tahun',<?=$batasumurlaki4?>,  <?=($batasumurperempuan4==0)?0:-$batasumurperempuan4?> ],
                ['81-85 Tahun',<?=$batasumurlaki3?>,  <?=($batasumurperempuan3==0)?0:-$batasumurperempuan3?> ],
                ['76-80 Tahun',<?=$batasumurlaki2?>,  <?=($batasumurperempuan2==0)?0:-$batasumurperempuan2?> ],
                ['71-75 Tahun',<?=$batasumurlaki?>,  <?=($batasumurperempuan==0)?0:-$batasumurperempuan?> ],
                ['66-70 Tahun',<?=$maumatilaki?>,  <?=($maumatiperempuan==0)?0:-$maumatiperempuan?> ],
                ['61-65 Tahun',<?=$lansialaki?>,  <?=($lansiaperempuan==0)?0:-$lansiaperempuan?> ],
                ['55-60 Tahun',<?=$pensiunlaki?>,  <?=($pensiunperempuan==0)?0:-$pensiunperempuan?> ],
                ['51-55 Tahun',<?=$kakek?>,  <?=($nenek==0)?0:-$nenek?> ],
                ['46-50 Tahun',<?=$maujadikakek?>, <?=($maumatiperempuan==0)?0:-$maumatiperempuan?> ],
                ['41-45 Tahun',<?=$laki?>, <?=($perempuan==0)?0:-$perempuan?> ],
                ['36-40 Tahun',<?=$produktiflaki?>, <?=($produktifperempuan==0)?0:-$produktifperempuan?> ],
                ['31-35 Tahun',<?=$om?>, <?=($tante==0)?0:-$tante?> ],
                ['25-30 Tahun',<?=$dewasalaki?>,  <?=($dewasaperempuan==0)?0:-$dewasaperempuan?> ],
                ['21-25 Tahun',<?=$usialaki?>,  <?=($usiaperempuan==0)?0:-$usiaperempuan?> ],
                ['15-20 Tahun',<?=$mau20laki?>,  <?=($mau20perempuan==0)?0:-$mau20perempuan?> ],
                ['11-15 Tahun',<?=$abglaki?>,  <?=($abgperempuan==0)?0:-$abgperempuan?> ],
                ['6-10 Tahun',<?=$analaki?>,  <?=($anakperempuan==0)?0:-$anakperempuan?> ],
                ['0-5 Tahun',<?=$balitalaki?>,  <?=($balitaperempuan==0)?0:-$balitaperempuan?> ]
            ]);

        var options = {
            height:450,
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

                $post2 = $this->input->post('rw2');
                $balitalaki = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND rw="'.$post2.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 0 and 5 ')->num_rows();
                $balitaperempuan = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND rw="'.$post2.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 0 and 5 ')->num_rows();
                $analaki = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND rw="'.$post2.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 6 and 10 ')->num_rows();
                $anakperempuan = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND rw="'.$post2.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 6 and 10 ')->num_rows();
                $abglaki = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND rw="'.$post2.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 11 and 15 ')->num_rows();
                $abgperempuan = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND rw="'.$post2.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 11 and 15 ')->num_rows();
                $mau20laki = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND rw="'.$post2.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 16 and 20 ')->num_rows();
                $mau20perempuan = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND rw="'.$post2.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 16 and 20 ')->num_rows();
                $usialaki = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND rw="'.$post2.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 21 and 25 ')->num_rows();
                $usiaperempuan = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND rw="'.$post2.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 21 and 25 ')->num_rows();
                $dewasalaki = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND rw="'.$post2.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 26 and 30 ')->num_rows();
                $dewasaperempuan = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND rw="'.$post2.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 26 and 30 ')->num_rows();
                $om = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND rw="'.$post2.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 31 and 35 ')->num_rows();
                $tante = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND rw="'.$post2.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 31 and 35 ')->num_rows();
                $produktiflaki = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND rw="'.$post2.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 36 and 40 ')->num_rows();
                $produktifperempuan = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND rw="'.$post2.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 36 and 40 ')->num_rows();
                $laki = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND rw="'.$post2.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 41 and 45 ')->num_rows();
                $perempuan = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND rw="'.$post2.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 41 and 45 ')->num_rows();
                $maujadikakek = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND rw="'.$post2.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 46 and 50 ')->num_rows();
                $maujadinenek = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND rw="'.$post2.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 46 and 50 ')->num_rows();
                $kakek = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND rw="'.$post2.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 51 and 55 ')->num_rows();
                $nenek = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND rw="'.$post2.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 51 and 55 ')->num_rows();
                $pensiunlaki = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND rw="'.$post2.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 56 and 60 ')->num_rows();
                $pensiunperempuan = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND rw="'.$post2.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 56 and 60 ')->num_rows();
                $lansialaki = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND rw="'.$post2.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 61 and 65 ')->num_rows();
                $lansiaperempuan = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND rw="'.$post2.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 61 and 65 ')->num_rows();
                $maumatilaki = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND rw="'.$post2.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 66 and 70 ')->num_rows();
                $maumatiperempuan = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND rw="'.$post2.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 66 and 70 ')->num_rows();
                $batasumurlaki = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND rw="'.$post2.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 71 and 75 ')->num_rows();
                $batasumurperempuan = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND rw="'.$post2.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 71 and 75 ')->num_rows();
                $batasumurlaki2 = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND rw="'.$post2.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 76 and 80 ')->num_rows();
                $batasumurperempuan2 = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND rw="'.$post2.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 76 and 80 ')->num_rows();
                $batasumurlaki3 = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND rw="'.$post2.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 81 and 85 ')->num_rows();
                $batasumurperempuan3 = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND rw="'.$post2.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 81 and 85 ')->num_rows();
                $batasumurlaki4 = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND rw="'.$post2.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 86 and 90 ')->num_rows();
                $batasumurperempuan4 = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND rw="'.$post2.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 86 and 90 ')->num_rows();
                $batasumurlaki5 = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND rw="'.$post2.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 91 and 99 ')->num_rows();
                $batasumurperempuan5 = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND rw="'.$post2.'" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 91 and 99 ')->num_rows();

                ?>
                 ['91-95 Tahun',<?=$batasumurlaki5?>,  <?=($batasumurperempuan5==0)?0:-$batasumurperempuan5?> ],
                ['86-90 Tahun',<?=$batasumurlaki4?>,  <?=($batasumurperempuan4==0)?0:-$batasumurperempuan4?> ],
                ['81-85 Tahun',<?=$batasumurlaki3?>,  <?=($batasumurperempuan3==0)?0:-$batasumurperempuan3?> ],
                ['76-80 Tahun',<?=$batasumurlaki2?>,  <?=($batasumurperempuan2==0)?0:-$batasumurperempuan2?> ],
                ['71-75 Tahun',<?=$batasumurlaki?>,  <?=($batasumurperempuan==0)?0:-$batasumurperempuan?> ],
                ['66-70 Tahun',<?=$maumatilaki?>,  <?=($maumatiperempuan==0)?0:-$maumatiperempuan?> ],
                ['61-65 Tahun',<?=$lansialaki?>,  <?=($lansiaperempuan==0)?0:-$lansiaperempuan?> ],
                ['55-60 Tahun',<?=$pensiunlaki?>,  <?=($pensiunperempuan==0)?0:-$pensiunperempuan?> ],
                ['51-55 Tahun',<?=$kakek?>,  <?=($nenek==0)?0:-$nenek?> ],
                ['46-50 Tahun',<?=$maujadikakek?>, <?=($maumatiperempuan==0)?0:-$maumatiperempuan?> ],
                ['41-45 Tahun',<?=$laki?>, <?=($perempuan==0)?0:-$perempuan?> ],
                ['36-40 Tahun',<?=$produktiflaki?>, <?=($produktifperempuan==0)?0:-$produktifperempuan?> ],
                ['31-35 Tahun',<?=$om?>, <?=($tante==0)?0:-$tante?> ],
                ['25-30 Tahun',<?=$dewasalaki?>,  <?=($dewasaperempuan==0)?0:-$dewasaperempuan?> ],
                ['21-25 Tahun',<?=$usialaki?>,  <?=($usiaperempuan==0)?0:-$usiaperempuan?> ],
                ['15-20 Tahun',<?=$mau20laki?>,  <?=($mau20perempuan==0)?0:-$mau20perempuan?> ],
                ['11-15 Tahun',<?=$abglaki?>,  <?=($abgperempuan==0)?0:-$abgperempuan?> ],
                ['6-10 Tahun',<?=$analaki?>,  <?=($anakperempuan==0)?0:-$anakperempuan?> ],
                ['0-5 Tahun',<?=$balitalaki?>,  <?=($balitaperempuan==0)?0:-$balitaperempuan?> ]
            ]);

        var options = {
            height:450,
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