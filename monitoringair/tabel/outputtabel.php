<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tabel Monitoring</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script type="text/javascript" src="jquery/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            setInterval(function() {
                $("#kekeruhan").load("bacakekeruhan.php");
                $("#ph_air").load("nilaiphair.php");
                $("#kualitas").load("kualitas.php");
                $("#suhu_air").load("suhuair.php");
                $("#waktu_sensor").load("waktu.php");
            }, 1000);
        });
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

        .logo-pnp,
        .logo-title,
        .logo-ti-pnp {
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

        h3 {
            font-size: 15px;
        }

        h1 {
            font-size: 50px;
        }

        .card {
            height: 220px;
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="img/logo_pnp.png" class="logo-pnp">
        <img src="img/logo.png" class="logo-title">
        <img src="img/ti_pnp.png" class="logo-ti-pnp">
        <h2>TABEL MONITORING KUALITAS AIR</h2>
        <div class="container text-center">
            <div class="row align-items-start">
                <div class="col">
                    <div class="card">
                        <div class="card-header" style="background-color: brown;">
                            <h3>Kekeruhan Air</h3>
                        </div>
                        <div class="card-body" id="kekeruhan">
                            <h1></h1>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-header" style="background-color: brown;">
                            <h3>PH Air</h3>
                        </div>
                        <div class="card-body" id="ph_air">
                            <h1></h1>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-header" style="background-color: brown;">
                            <h3>Suhu Air</h3>
                        </div>
                        <div class="card-body" id="suhu_air">
                            <h1></h1>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                            <div class="card-header" style="background-color: blue;">
                                <h3>Kualitas Air</h3>
                            </div>
                            <div class="card-body" id="kualitas">
                                <h1></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-header" style="background-color: blue;">
                                <h3>Waktu</h3>
                            </div>
                            <div class="card-body" id="waktu_sensor">
                                <h1></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <a href="../index.php" class="btn btn-primary">Kembali</a>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>