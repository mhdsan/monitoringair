<?php
    $koneksi = mysqli_connect("localhost", "root", "", "monitoringkualitasair");

    if (!$koneksi) {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }

    // Mengubah query SQL untuk mengambil data dengan ID terbaru
    $sql = mysqli_query($koneksi, "SELECT * FROM tb_sensor ORDER BY ID DESC LIMIT 1");

    if (!$sql) {
        die("Query gagal: " . mysqli_error($koneksi));
    }

    $data = mysqli_fetch_array($sql);

    if (!$data) {
        $suhu_air = "Data tidak ditemukan";
    } else {
        $suhu_air = $data['sensor_suhu']. "°C";
    }
?>

<h1 style="font-size: 30px;  text-align: center; display: flex; align-items: center; justify-content: center; height: 17vh;"><?php echo $suhu_air; ?></h1>
