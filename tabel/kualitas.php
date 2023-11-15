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
$kekeruhan_air = $data['sensor_kekeruhan'];
$ph_air = $data['sensor_ph'];
$suhu_air = $data['sensor_suhu'];

if ($ph_air >= 5 && $ph_air <= 9 && $kekeruhan_air <= 1.6 && $suhu_air >= 15 && $suhu_air <= 35) {
    $kualitas_air = "Kualitas Air Baik";
} elseif ($ph_air >= 4 && $ph_air <= 10 && $kekeruhan_air <= 2 && $suhu_air >= 10 && $suhu_air <= 40) {
    $kualitas_air = "Kualitas Air Kurang Baik";
} else {
    $kualitas_air = "Kualitas Air Sangat Tidak Baik";
}

sleep(20);
echo "<h1 style='font-size: 30px; text-align: center; display: flex; align-items: center; justify-content: center; height: 17vh;'>$kualitas_air</h1>";
// Menggunakan pernyataan INSERT untuk memasukkan data kualitas air ke dalam database
$insert_query = "INSERT INTO tb_sensor (kualitas_air) VALUES ('$kualitas_air')";

?>
