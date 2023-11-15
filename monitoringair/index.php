<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MONITORING KUALITAS AIR</title>
    <style>
        body {
            background-image: url('img/background.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .container {
            text-align: center;
            margin-top: 25px;
        }
        .logo-pnp, .logo-title, .logo-ti-pnp {
            width: 250px;
        }
        .logo-pnp {
            width: 120px;
            margin-right: 440px;
            margin-left: -220px;
            margin-bottom: 150px;
        }
        .logo-title {
            width: 200px;
        }
        .logo-ti-pnp {
            width: 250px;
            margin-left: 330px;
            margin-right: -220px;
            margin-bottom: 150px;
        }
        h2 {
            font-size: 24px;
        }
        .card-header {
            color: white;
        }
        .custom-button {
            margin: 10px;
            padding: 15px 30px;
            font-size: 18px;
            background-color: #3498db;
            color: black; /* Mengubah warna teks menjadi hitam */
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="img/logo_pnp.png" class="logo-pnp">
        <img src="img/logo.png" class="logo-title">
        <img src="img/ti_pnp.png" class="logo-ti-pnp">
        <h1 style="font-size: 35px;">Sistem Monitoring Kualitas Air Secara Real-Time</h1>
        <h2>Silahkan Pilih Tampilan Output Monitoring</h2>
        <form action="tabel/outputtabel.php">
            <button class="custom-button" type="submit">Lihat Tabel</button>
        </form>
        <form action="grafik/outputgrafik.php">
            <button class="custom-button" type="submit">Lihat Grafik</button>
        </form>
        <form action="tabel/datapengumpulan.php">
            <button class="custom-button" type="submit">Lihat Data Pengumpulan</button>
        </form>
    </div>
</body>
</html>
