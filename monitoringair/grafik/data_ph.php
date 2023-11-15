
<?php
    $koneksi = mysqli_connect("localhost", "root", "", "monitoringkualitasair");
    
    $sql_ID = mysqli_query($koneksi,"SELECT MAX(ID) FROM tb_sensor");
    $data_ID = mysqli_fetch_array($sql_ID);
    $ID_akhir = $data_ID['MAX(ID)'];
    $ID_awal = $ID_akhir - 4;
    
    $tgl_waktu = mysqli_query($koneksi, "SELECT tgl_waktu FROM tb_sensor WHERE ID>='$ID_awal' AND ID<='$ID_akhir' ORDER BY ID ASC");
    $sensor_ph = mysqli_query($koneksi, "SELECT sensor_ph FROM tb_sensor WHERE ID>='$ID_awal' AND ID<='$ID_akhir' ORDER BY ID ASC");
?>

<div class="panel panel-primary">
    <div class="panel-heading">
        Grafik PH Air
    </div>
    
    <div class="panel-body">
        <canvas id="ph_grafik"></canvas>
        <script type="text/javascript">
        var canvas = document.getElementById('ph_grafik');
        var data = {
            labels : [
                <?php
                    while($waktu_sensor = mysqli_fetch_array($tgl_waktu))
                    {
                        echo '"'.$waktu_sensor['tgl_waktu'].'",';
                    }
                ?>
            ],
            datasets : [{
                label : "ph Air",
                pointRadius : 5,
                data : [
                    <?php
                        while($ph = mysqli_fetch_array($sensor_ph))
                        {
                            echo $ph['sensor_ph'].',';
                        }
                    ?>
                ]
            }]
        };

        var option = {
            showLines : true,
            animation : {duration : 1}
        };

        var myLineChart = new Chart(canvas, {
            type : 'line',
            data : data,
            options : option
        });
        </script>
    </div>
</div>