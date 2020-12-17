<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pengulangan</title>
</head>
<body>
    <style>
        *{ background-color:#f0f0f0; font-family:fjalla; }
        @font-face{ font-family:fjalla; src:url(../fonts/FjallaOne-Regular.ttf); }
        body{ padding:50px; }
        span{ color : #E10707; font-size: 25px; }
    </style>

    <?php 
        echo "Hasil Pengulangan dengan menggunakan <span>FOR</span> <br><br>";

        $number = $_POST['number'];

        for ($x=1; $x <= $number; $x++){
            echo "$x . Saya Belajar PHP <br><br>";
        }

        echo "Hasil Pengulangan dengan menggunakan <span>DO WHILE</span> <br><br>";

        $i = 1;
        do{
            echo "$i . Saya Belajar PHP <br><br>";
            $i++;
        }
        while($i <= $number);

    ?>
</body>
</html>