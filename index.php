<?php
    session_start();
    include ("koneksi.php");
    // if(!@$_SESSION['stat_login']){
    //     header("Location: login.php");
    // }

    if(isset($_POST['submit'])){


        //proses insert 
        $insert = mysqli_query($conn, "INSERT INTO tb_pendaftaran (nm_member,tmp_lahir,tgl_lahir,no_tlp,jk,alamat,username,password)VALUES(
            '".$_POST['nm']."',
            '".$_POST['tmp_lahir']."',
            '".$_POST['tgl_lahir']."',
            '".$_POST['no_tlp']."',
            '".$_POST['jk']."',
            '".$_POST['alamat']."',
            '".$_POST['username']."',
            '".MD5($_POST['pwd'])."')");
        $last_id = mysqli_insert_id($conn);

if($insert){
    echo '<script>window.location="berhasil.php?id='.$last_id.'"</script>';
}else{
    echo 'duhhh ai'.mysqli_error($conn);
}
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PSB Online</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
</head>
<body>
    <div class= "bg-img">
    <!--bagian box formulir -->
    <section class="box-formulir">

        <center>
        <h2>Pendaftaran Member Baru Gym DeFi'tness</h2>
        <center>

        <h3>Data Calon Member</h3>

     <!-- bagian form -->
     <form action= "" method="post">

        <div class="box">
            <table border="0" class="table-">
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nm" class="input-control">
                    </td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="tmp_lahir" class="input-control">
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td>
                        <input type="date" name="tgl_lahir" class="input-control">
                    </td>
                </tr>
                <tr>
                    <td>No Telepon</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="no_tlp" class="input-control">
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jk" class="input-control" value="Laki-laki"> Laki-laki &nbsp;&nbsp;&nbsp;
                        <input type="radio" name="jk" class="input-control" value="Perempuan"> Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Alamat Lengkap</td>
                    <td>:</td>
                    <td>
                        <textarea class="input-control" name="alamat"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="username" class="input-control">
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="pwd" class="input-control">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" class="btn-daftar" value="Daftar Sekarang">
                    </td>
                </tr>
            </table>
        </div>
</FORM>
    </section>
    </div>

</body>
</html>