<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pengumpulan Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script type="text/javascript" src="jquery/jquery.min.js"></script>
    
    <script type="text/javascript">
        function table(){
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function(){
                document.getElementById("table").innerHTML = this.responseText;

            }
            xhttp.open("GET", "tabeldatabase.php");
            xhttp.send();
        }

        setInterval(function(){
            table();
        },1);

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
    </style>
</head>

<body>
    <div class="container">
        <img src="img/logo_pnp.png" class="logo-pnp">
        <img src="img/logo.png" class="logo-title">
        <img src="img/ti_pnp.png" class="logo-ti-pnp">
        <h2>TABEL PENGUMPULAN DATA</h2>
        </div>
        <div id='table'>

        </div>
        <a href="../index.php" class="btn btn-primary">Kembali</a>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>