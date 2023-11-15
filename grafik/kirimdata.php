
<?php
    $koneksi = mysqli_connect("localhost", "root", "", "monitoringkualitasair");

    $kekeruhan_air = $_GET['sensor_kekeruhan'];
    $ph_air = $_GET['sensor_ph'];
    $suhu_air = $_GET['sensor_suhu'];

    mysqli_query($koneksi, "ALTER TABLE tb_sensor AUTO_INCREMENT=1");

    $simpan = mysqli_query($koneksi, "INSERT INTO tb_sensor(sensor_kekeruhan, sensor_ph, sensor_suhu)
    VALUES('$kekeruhan_air', '$ph_air', '$suhu_air')");

    if($simpan)
        echo "Berhasil disimpan";
    else
        echo "Gagal tersimpan";
?>