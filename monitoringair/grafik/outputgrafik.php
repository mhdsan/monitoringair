<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Grafik Monitoring</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <script type="text/javascript" src="assets/js/jquery-3.4.0.min.jsx  "></script>
    <script type="text/javascript" src="assets/js/mdb.min.js"></script>
    <script type="text/javascript" src="jquery-latest.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <script type="text/javascript">
        var refreshid = setInterval(function(){
            $('#grafik_kekeruhan').load('data_kekeruhan.php')
            $('#grafik_ph').load('data_ph.php')
            $('#grafik_suhu').load('data_suhu.php')
        }, 1000);

    </script>

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
            margin-bottom: px;
        }
        .logo-title {
            width: 200px;
        }
        .logo-ti-pnp {
            width: 250px;
            margin-left: 500px;
            margin-right: -220px;
            margin-bottom: px;
        }
        h2 {
            font-size: 24px;
        }
        .card-header {
            color: white;
        }
        h3 {
            font-size: 24px;
        }
        h1 {
            font-size: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="img/logo_pnp.png" class="logo-pnp">
        <img src="img/ti_pnp.png" class="logo-ti-pnp">
        <h2>GRAFIK MONITORING KUALITAS AIR</h2>
    </div>
    
    <div class="container">
        <div class="container" id="grafik_kekeruhan" style="width :700px"></div>
    </div>
    <div class="container">
        <div class="container" id="grafik_ph" style="width :700px"></div>
    </div>
    <div class="container">
        <div class="container" id="grafik_suhu" style="width :700px"></div>
    </div>
    <a href="../index.php" class="btn btn-primary">Kembali</a>
 
</body>
</html>
