<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Perhitungan</title>
</head>
<body>

    <style>
        *{margin:0px; padding:0px; font-family:fjalla;}
        @font-face{font-family:fjalla;
            src: url (../fonts/FjallaOne-Regullar.ttf);}

        .kotak{ width:100%; height:500px; margin :140px auto 0 auto;}
        h1 {font-size:55px; text-align: center;}
        h3 {color:#E10707; text-align: center; font-size: 54px;}
    </style>
    <?php 
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $operator = $_POST['operator'];

        // if($operator == '+'){
        //     echo $angka1 + $angka2;
        // }


    ?>

    <div class = "kotak">
        <?php 
            if ($operator == "+"){?>
                <h1>Hasil Penjumlahan <?php echo $angka1 ?> + <?php echo $angka2?></h1>
                <h3><?php echo $angka1 + $angka2 ?></h3>
        <?php } ?>
    </div>
</body>
</html>