<!DOCTYPE html>
<html>
<head>
    <meta charset = "UTF-8">
    <title>FORM HANDLING</title>
</head>
<body>
    <style>
        label {
            background-color:#000000;
            color:#FFFFFF;
            display: block;
            float: left;
            margin-right:20px;
            width: 110px;
        }
    </style>
    <form action = "hasilSend.php" method="post" enctype = "multipart/form-data">
        <label>Nama    </label> <input type = "text" name = "nama" required><br>
        <label>Email   </label> <input type = "email" name = "email" required><br>
        <label>Gender  </label> <input type = "radio" name = "gender" id="gender" value="male" required>Male
                  <input type = "radio" name = "gender" id="gender" value="female" required>Female<br><br>
        <label>Profile Picture </label> <input type = "file" name = "photo" required><br><br>
        <label>Pesan   </label> <textarea name="pesan"></textarea><br>
        <input type = "submit" value = "send">

    </form>
</body>
</html>