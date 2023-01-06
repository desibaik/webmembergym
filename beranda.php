<?php
session_start();
    include ("koneksi.php");
    if(!isset($_SESSION["nama"])){
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PSB Online | Administrator</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
</head>
<body>

    <!--bagian header-->
    <header>
        <h1><a href="beranda.php">Admin DFtness</h1>
        <ul>
            <li><a href="beranda.php">Beranda</a></li>
            <li><a href="data-member.php">Data Member</a></li>
            <li><a href="keluar.php">Keluar</a></li>
        </ul>
    </header>

    <!-- bagian content-->
    <section class="content">
        <h2>Beranda</h2>
        <div class="box">
            <h3><?php echo $_SESSION['nama'] ?>, Selamat Datang di DeFi'tness fren</h3>

        </div>
    </section>

</body>
</html>