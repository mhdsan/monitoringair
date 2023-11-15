<?php
    $koneksi = mysqli_connect("localhost", "root", "", "monitoringkualitasair");

    if (!$koneksi) {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }

    $sql = mysqli_query($koneksi, "SELECT * FROM tb_sensor ORDER BY ID DESC LIMIT 1");

    if (!$sql) {
        die("Query gagal: " . mysqli_error($koneksi));
    }

    $data = mysqli_fetch_array($sql);

    if (!$data) {
        $ph_air = "Data tidak ditemukan";
    } else {
        $ph_air = "PH ". $data['sensor_ph'];
    }
?>

<h1 style="font-size: 30px;  text-align: center; display: flex; align-items: center; justify-content: center; height: 17vh;"><?php echo $ph_air; ?></h1>
