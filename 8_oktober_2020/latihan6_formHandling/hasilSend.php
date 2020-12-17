<!DOCTYPE html>
<html>
<head>
    <meta charset = "UTF-8">
    <title>FORM HANDLING</title>
</head>
<body>
    <?php 
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $pesan = $_POST['pesan'];
        $photo = $_FILES['photo']['name'];

        move_uploaded_file($_FILES['photo']['tmp_name'], 'images/'. $photo);
        $info = "Berhasil Mengupload Foto";

        echo "<center><h3>$info<h3></center>";

      //  echo "<img src='images/$photo'>";
    ?>

    <table border = "1" align="center" width = "500px" height = "300px">
        <tr>
            <td colspan = "3" align = "center"><h3>Send Profil</h3></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><?php echo $email; ?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>:</td>
            <td><?php echo $gender; ?></td>
        </tr>
        <tr>
            <td>Pesan</td>
            <td>:</td>
            <td><?php echo $pesan; ?></td>
        </tr>
        <tr>
            <td>foto</td>
            <td>:</td>
            <td><img src = "images/<?php echo $photo?>" style = "width: 100px"></td>
        </tr>
    </table>
</body>
</html>