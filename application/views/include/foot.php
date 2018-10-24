<script type="text/javascript" src="<?php echo base_url('assets/js/jq.js'); ?>"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/vendor.bundle.base.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/vendor.bundle.addons.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/off-canvas.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/misc.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/dashboard.js'); ?>"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/locales/bootstrap-datepicker.es.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script>
    function bandingkan() {
        if ($("#banding").css('display') === "block") {
            $("#kelurahanselect").css('display','block') ;
            $(".formrw").css('display','block') ;
            $("#banding").css('display','none') ;
        } else {
            $("#kelurahanselect").css('display','none') ;
            $(".formrw").css('display','none') ;
            $("#banding").css('display','block');
            $("#kelurahan").prop('selectedIndex',0);
            $("#kelurahanbanding").prop('selectedIndex',0);
            $("#selectbanding").prop('selectedIndex',0);
        }
    }
</script>
<script type="text/javascript">
    $("#chartpyramid").submit(function() {
        var dt = $("#chartpyramid").serialize();
        $.ajax({
            url: "<?=site_url('main/chartpyramid')?>",
            type: 'POST',
            data: dt,
            dataType: 'html',
            success:function(res) {
                $('.pyramid').hide();
                $('.barupyramid').html(res);
                $('.barupyramid').show();
                $('.barupyramid2').html(res);
                $('.barupyramid2').show();
            }
        })
    });
    $("#chartradar").submit(function() {
        var dt = $("#chartradar").serialize();
        $.ajax({
            url: "<?=site_url('main/chartradar')?>",
            type: 'POST',
            data: dt,
            dataType: 'html',
            success:function(res) {
                $('.radar').hide();
                $('.radarbaru').html(res);
                $('.radarbaru2').html(res);
                $('.radarbaru').show();
                $('.radarbaru2').show();
            }
        })
    });
    $(document).ready(function() {
      $(".datatable").DataTable();
  });
    function changekel() {
     $.ajax({
        url: "<?=site_url('main/chartradar')?>",
        type: 'POST',
        data: {kelu:$('#kelurahan').val()},
        dataType: 'html',
        success:function(res) {
            if($('#kelurahan').val() == ""){
                $('.radar').show();
                $('.radarbaru').hide();
                $('.radarbanding').hide();
            }else{                
                $('.radarbanding').hide();
                $('.radar').hide();
                $('.radarbaru').show();
                $('.radarbaru').html(res);
                $('#inputhiden').val($('#kelurahan').val());
            }
        }
    });
 }
 function changekelbanding() {
     $.ajax({
        url: "<?=site_url('main/filterrw')?>",
        type: 'POST',
        data: {kelu:$('#kelurahanbanding').val()},
        dataType: 'html',
        success:function(res) {
            $('#selectbanding').hide();
            if ($('#kelurahanbanding').val() == ""){
                $.ajax({
                    url: "<?=site_url('main/chartradarbanding')?>",
                    type: 'POST',
                    data: {kelu:$('#kelurahanbanding').val()},
                    dataType: 'html',
                    success:function(res) {
                        $('.radarbanding').html(res);
                        $('.radarbanding').show();
                        $('.radar').hide();
                        $('.radarbaru').hide();
                    }
                })
            }else{
                $('#selectbanding').removeAttr('style');
                $('#selectbanding').html(res);
                $('#inputhidenbanding').val($('#kelurahanbanding').val());
            }
        }
    });
 }
 function changerwbanding() {
     $.ajax({
        url: "<?=site_url('main/chartradarbanding')?>",
        type: 'POST',
        data: {rw:$('#selectbanding').val(),'kelu':$('#inputhidenbanding').val()},
        dataType: 'html',
        success:function(res) {
            $('.radarbanding').html(res);
            $('.radarbanding').show();
            $('.radar').hide();
            $('.radarbaru').hide();
        }
    });
 }
 function changerw() {
     $.ajax({
        url: "<?=site_url('main/chartradar')?>",
        type: 'POST',
        data: {rw:$('#rw').val(),'kelu':$('#inputhiden').val()},
        dataType: 'html',
        success:function(res) {
            if($('#kelurahan').val() == ""){
                $('.formrw').attr('style','none');
            }else{
                $('.radarbaru').html(res);
            }
        }
    });
 }
 function changerw2() {
     $.ajax({
        url: "<?=site_url('main/chartpyramid')?>",
        type: 'POST',
        data: {rw2:$('#rw2').val()},
        dataType: 'html',
        success:function(res) {
            if($('#rw2').val() == ""){
                $('.pyramid').show();
                $('.barupyramid').hide();
                $('.barupyramid2').hide();
            }else{
                $('.pyramid').hide();
                $('.barupyramid').html(res);
            }
        }
    });
 }
 function changerw3() {
     $.ajax({
        url: "<?=site_url('main/chartpyramid')?>",
        type: 'POST',
        data: {rw3:$('#rw3').val()},
        dataType: 'html',
        success:function(res) {
            if($('#rw3').val() == ""){
                $('.barupyramid').show();
                $('.pyramid').hide();
                $('.barupyramid2').hide();
            }else{
                $('.pyramid').hide();
                $('.barupyramid2').html(res);
            }
        }
    });
 }
</script>
<script >
    $(function () {
        // Awal Colom
        $('#awalcolomchart').datepicker({
            format: 'yyyy-mm-dd' 
        }).on('changeDate', function(selected){
            startDate = new Date(selected.date.valueOf());
            startDate.setDate(startDate.getDate(new Date(selected.date.valueOf())));
            $('#akhircolomchart').datepicker('setStartDate', startDate);
        }); 

        $('#akhircolomchart').datepicker({
            format: 'yyyy-mm-dd'
        }).on('changeDate', function(selected){
            FromEndDate = new Date(selected.date.valueOf());
            FromEndDate.setDate(FromEndDate.getDate(new Date(selected.date.valueOf())));
            $('#awalcolomchart').datepicker('setEndDate', FromEndDate);
        });

            // Awal Line
            $('#awallinechart').datepicker({
                format: 'yyyy-mm-dd' 
            }).on('changeDate', function(selected){
                startDate = new Date(selected.date.valueOf());
                startDate.setDate(startDate.getDate(new Date(selected.date.valueOf())));
                $('#akhirlinechart').datepicker('setStartDate', startDate);
            }); 

            $('#akhirlinechart').datepicker({
                format: 'yyyy-mm-dd'
            }).on('changeDate', function(selected){
                FromEndDate = new Date(selected.date.valueOf());
                FromEndDate.setDate(FromEndDate.getDate(new Date(selected.date.valueOf())));
                $('#awallinechart').datepicker('setEndDate', FromEndDate);
            });
            
            // Chart Bar
            $('#awalchartbar').datepicker({
                format: 'yyyy-mm-dd' 
            }).on('changeDate', function(selected){
                startDate = new Date(selected.date.valueOf());
                startDate.setDate(startDate.getDate(new Date(selected.date.valueOf())));
                $('#akhirchartbar').datepicker('setStartDate', startDate);
            }); 

            $('#akhirchartbar').datepicker({
                format: 'yyyy-mm-dd'
            }).on('changeDate', function(selected){
                FromEndDate = new Date(selected.date.valueOf());
                FromEndDate.setDate(FromEndDate.getDate(new Date(selected.date.valueOf())));
                $('#awalchartbar').datepicker('setEndDate', FromEndDate);
            });
            
            // Awal Piramid
            $('#awalpyramidchart').datepicker({
                format: 'yyyy-mm-dd' 
            }).on('changeDate', function(selected){
                startDate = new Date(selected.date.valueOf());
                startDate.setDate(startDate.getDate(new Date(selected.date.valueOf())));
                $('#akhirpyramidchart').datepicker('setStartDate', startDate);
            }); 

            $('#akhirpyramidchart').datepicker({
                format: 'yyyy-mm-dd'
            }).on('changeDate', function(selected){
                FromEndDate = new Date(selected.date.valueOf());
                FromEndDate.setDate(FromEndDate.getDate(new Date(selected.date.valueOf())));
                $('#awalpyramidchart').datepicker('setEndDate', FromEndDate);
            });
            
            //Awal Radar
            $('#awalradarchart').datepicker({
                format: 'yyyy-mm-dd' 
            }).on('changeDate', function(selected){
                startDate = new Date(selected.date.valueOf());
                startDate.setDate(startDate.getDate(new Date(selected.date.valueOf())));
                $('#akhirradarchart').datepicker('setStartDate', startDate);
            }); 
            $('#akhirradarchart').datepicker({
                format: 'yyyy-mm-dd'
            }).on('changeDate', function(selected){
                FromEndDate = new Date(selected.date.valueOf());
                FromEndDate.setDate(FromEndDate.getDate(new Date(selected.date.valueOf())));
                $('#awalradarchart').datepicker('setEndDate', FromEndDate);
            });
        });
    </script>
    <script type="text/javascript">
        google.charts.load("current", {packages:["corechart","bar"]});
        google.charts.setOnLoadCallback(drawChartbar);

        function drawChartbar() {
            var data = google.visualization.arrayToDataTable([
                ['umur', 'Laki-Laki', 'Perempuan'],
                // var_dump($umur);
                <?php 
                $balitalaki = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 0 and 5 ')->num_rows();
                $balitaperempuan = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 0 and 5 ')->num_rows();
                $analaki = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 6 and 10 ')->num_rows();
                $anakperempuan = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 6 and 10 ')->num_rows();
                $abglaki = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 11 and 15 ')->num_rows();
                $abgperempuan = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 11 and 15 ')->num_rows();
                $mau20laki = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 16 and 20 ')->num_rows();
                $mau20perempuan = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 16 and 20 ')->num_rows();
                $usialaki = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 21 and 25 ')->num_rows();
                $usiaperempuan = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 21 and 25 ')->num_rows();
                $dewasalaki = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 26 and 30 ')->num_rows();
                $dewasaperempuan = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 26 and 30 ')->num_rows();
                $om = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 31 and 35 ')->num_rows();
                $tante = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 31 and 35 ')->num_rows();
                $produktiflaki = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 36 and 40 ')->num_rows();
                $produktifperempuan = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 36 and 40 ')->num_rows();
                $laki = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 41 and 45 ')->num_rows();
                $perempuan = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 41 and 45 ')->num_rows();
                $maujadikakek = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 46 and 50 ')->num_rows();
                $maujadinenek = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 46 and 50 ')->num_rows();
                $kakek = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 51 and 55 ')->num_rows();
                $nenek = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 51 and 55 ')->num_rows();
                $pensiunlaki = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 56 and 60 ')->num_rows();
                $pensiunperempuan = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 56 and 60 ')->num_rows();
                $lansialaki = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 61 and 65 ')->num_rows();
                $lansiaperempuan = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 61 and 65 ')->num_rows();
                $maumatilaki = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 66 and 70 ')->num_rows();
                $maumatiperempuan = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 66 and 70 ')->num_rows();
                $batasumurlaki = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 71 and 75 ')->num_rows();
                $batasumurperempuan = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 71 and 75 ')->num_rows();
                $batasumurlaki2 = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 76 and 80 ')->num_rows();
                $batasumurperempuan2 = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 76 and 80 ')->num_rows();
                $batasumurlaki3 = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 81 and 85 ')->num_rows();
                $batasumurperempuan3 = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 81 and 85 ')->num_rows();
                $batasumurlaki4 = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 86 and 90 ')->num_rows();
                $batasumurperempuan4 = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 86 and 90 ')->num_rows();
                $batasumurlaki5 = $this->db->query('SELECT * FROM data where jenis_kelamin="LAKI-LAKI" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 91 and 99 ')->num_rows();
                $batasumurperempuan5 = $this->db->query('SELECT * FROM data where jenis_kelamin="PEREMPUAN" AND (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 91 and 99 ')->num_rows();

                ?>
                ['0-5 Tahun',<?=$balitalaki?>,  <?=($balitaperempuan==0)?0:-$balitaperempuan?> ],
                ['6-10 Tahun',<?=$analaki?>,  <?=($anakperempuan==0)?0:-$anakperempuan?> ],
                ['11-15 Tahun',<?=$abglaki?>,  <?=($abgperempuan==0)?0:-$abgperempuan?> ],
                ['15-20 Tahun',<?=$mau20laki?>,  <?=($mau20perempuan==0)?0:-$mau20perempuan?> ],
                ['21-25 Tahun',<?=$usialaki?>,  <?=($usiaperempuan==0)?0:-$usiaperempuan?> ],
                ['25-30 Tahun',<?=$dewasalaki?>,  <?=($dewasaperempuan==0)?0:-$dewasaperempuan?> ],
                ['31-35 Tahun',<?=$om?>, <?=($tante==0)?0:-$tante?> ],
                ['36-40 Tahun',<?=$produktiflaki?>, <?=($produktifperempuan==0)?0:-$produktifperempuan?> ],
                ['41-45 Tahun',<?=$laki?>, <?=($perempuan==0)?0:-$perempuan?> ],
                ['46-50 Tahun',<?=$maujadikakek?>, <?=($maumatiperempuan==0)?0:-$maumatiperempuan?> ],
                ['51-55 Tahun',<?=$kakek?>,  <?=($nenek==0)?0:-$nenek?> ],
                ['55-60 Tahun',<?=$pensiunlaki?>,  <?=($pensiunperempuan==0)?0:-$pensiunperempuan?> ],
                ['61-65 Tahun',<?=$lansialaki?>,  <?=($lansiaperempuan==0)?0:-$lansiaperempuan?> ],
                ['66-70 Tahun',<?=$maumatilaki?>,  <?=($maumatiperempuan==0)?0:-$maumatiperempuan?> ],
                ['71-75 Tahun',<?=$batasumurlaki?>,  <?=($batasumurperempuan==0)?0:-$batasumurperempuan?> ],
                ['76-80 Tahun',<?=$batasumurlaki2?>,  <?=($batasumurperempuan2==0)?0:-$batasumurperempuan2?> ],
                ['81-85 Tahun',<?=$batasumurlaki3?>,  <?=($batasumurperempuan3==0)?0:-$batasumurperempuan3?> ],
                ['86-90 Tahun',<?=$batasumurlaki4?>,  <?=($batasumurperempuan4==0)?0:-$batasumurperempuan4?> ],
                ['91-95 Tahun',<?=$batasumurlaki5?>,  <?=($batasumurperempuan5==0)?0:-$batasumurperempuan5?> ]
                ]);

var options = {
    height: 450,
    chart: {
        title: 'Perbandingan',
        subtitle: 'Jumlah Perempuan dan Jumlah Laki Berdasarkan Kelurahan GAMBIR',
    },
    isStacked: true,
    bars: 'horizontal',
    hAxis: {
        format: ';'
    }
};
var formatter = new google.visualization.NumberFormat({
    pattern: ';'
});
formatter.format(data, 2)

var chart = new google.charts.Bar(document.getElementById('chart_div'));

chart.draw(data, new google.charts.Bar.convertOptions(options));
}

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script type="text/javascript">
    <?php 
    $getpendapatan = $this->db->query('SELECT * FROM data where pendapatan="0 JT-5 JT"')->num_rows();
    $bangunan = $this->db->query('SELECT * FROM data where kondisi_bangunan = "TIDAK LAYAK HUNI"')->num_rows();
    $sekolah = $this->db->query('SELECT * FROM data where putus_sekolah="YA"')->num_rows(); 
    $sumur = $this->db->query('SELECT * FROM data where sumur_air_tanah="YA"')->num_rows(); 
    $pdam = $this->db->query('SELECT * FROM data where pdam="YA"')->num_rows(); 
    $medis = $this->db->query('SELECT * FROM data where riwayat_medis!="TIDAK"')->num_rows(); 
    $balita = $this->db->query('SELECT * FROM data where (YEAR(NOW()) - YEAR(`tanggal_lahir`)) between 0 and 5 ')->num_rows();
    $hamil = $this->db->query('SELECT * FROM data where status_ibu="HAMIL"')->num_rows();
    $disabilitas = $this->db->query('SELECT * FROM data where disabilitas="YA"')->num_rows(); ?>
    new Chart(document.getElementById("myChart"),
    {
        "type":"radar",
        "data":{
            "labels":['Pendapatan 0- 5 Juta', 'Tidak Layak Huni', 'Putus Sekolah', 'Sumber Air Tanah', 'Sumber PDAM', 'Ada Riwayat Medis','Usia Balita 0-5 thn','Ibu Hamil','Disabilitas'],
            "datasets": [{
                "label" : 'Data Seluruh',
                "fill":true,
                "backgroundColor":"rgba(255, 99, 132, 0.2)",
                "borderColor":"rgb(255, 99, 132)",
                "pointBackgroundColor":"rgb(255, 99, 132)",
                "pointBorderColor":"#fff",
                "pointHoverBackgroundColor":"#fff",
                "pointHoverBorderColor":"rgb(255, 99, 132)",
                "data": [<?=$getpendapatan?>,<?=$bangunan?> ,<?=$sekolah?>,<?=$sumur?>, <?=$pdam?>,<?=$medis?>,<?=$balita?>,<?=$hamil?>,<?=$disabilitas?>]
            }],
        },
        "options":
        {
            scale: {
        // Hides the scale
        display: true
    },
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
</body>
</html>