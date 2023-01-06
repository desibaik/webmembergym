<?php
session_start();
    include ("koneksi.php");
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
        <h2>Data Member</h2>
        <div class="box">
            <table class= "table" border= "1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Member</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        $list_member = mysqli_query($conn, "SELECT * FROM tb_pendaftaran");
                        while($row = mysqli_fetch_array($list_member)){
                    ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $row['id_pendaftaran'] ?></td>
                        <td><?php echo $row['nm_member'] ?></td>
                        <td><?php echo $row['jk'] ?></td>
                        <td>
                            <a href="detail-member.php?id=<?php echo $row['id_pendaftaran']?>">Detail</a> ||
                            <a href="hapus-member.php?id=<?php echo $row['id_pendaftaran']?>"onclick="return confirm('Yakin?')">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </section>

</body>
</html>