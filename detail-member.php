<?php
session_start();
    include ("koneksi.php");

    $peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran WHERE id_pendaftaran = '".$_GET['id']."'");
    $p = mysqli_fetch_object($peserta)
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
            <li><a href="data-peserta.php">Data Member</a></li>
            <li><a href="keluar.php">Keluar</a></li>
        </ul>
    </header>

    <!-- bagian content-->
    <section class="content">
        <h2>Detail Member</h2>
        <div class="box">
      
        <table class= "table-data">
            <tr>
                <td>Kode Pendaftaran</td>
                <td>:</td>
                <td><?php echo $p->id_pendaftaran ?></td>
            </tr>
            <tr>
                <td>Tanggal Daftar</td>
                <td>:</td>
                <td><?php echo $p->tgl_daftar ?></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><?php echo $p->nm_member ?></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><?php echo $p->tmp_lahir ?></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><?php echo $p->tgl_lahir ?></td>
            </tr>
            <tr>
                <td>No Telepon</td>
                <td>:</td>
                <td><?php echo $p->no_tlp ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><?php echo $p->jk ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?php echo $p->alamat ?></td>
            </tr>
        </table>

        </div>
    </section>

</body>
</html>