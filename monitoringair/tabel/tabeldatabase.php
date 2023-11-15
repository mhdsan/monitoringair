<?php
$conn = mysqli_connect("localhost", "root", "", "monitoringkualitasair");
$rows = mysqli_query($conn, "SELECT * FROM tb_sensor");
?>

<style>
    table {
        border: 1px solid #000; /* Garis tepi tabel */
        border-collapse: collapse; /* Menyatukan garis tepi */
        width: 75%; /* Lebar tabel 100% */
        margin-top : 50px
    }

    table th, table td {
        border: 1px solid #000; /* Garis tepi sel-sel tabel */
        padding: 10px; /* Ruang bantal di dalam sel-sel tabel */
    }

    table tr:nth-child(even) {
        background-color: #ffffff; /* Latar belakang putih untuk baris genap */
    }

    table tr:nth-child(odd) {
        background-color: #f2f2f2; /* Latar belakang abu-abu untuk baris ganjil */
    }
</style>

<table>
    <tr>
        <th>No</th>
        <th>Sensor Kekeruhan</th>
        <th>Sensor PH</th>
        <th>Sensor Suhu</th>
        <th>Kualitas Air</th>
        <th>Tanggal dan Waktu</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($rows as $row) : ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $row['sensor_kekeruhan']; ?></td>
            <td><?php echo $row['sensor_ph']; ?></td>
            <td><?php echo $row['sensor_suhu']; ?></td>
            <td><?php echo $row['kualitas_air']; ?></td>
            <td><?php echo $row['tgl_waktu']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
