<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pencarian Makanan</title>
</head>
<body>
    <style>
        *{background-color:#f0f0f0; font-family:fjalla;}
        @font-face{font-family:fjalla; src:url(../fonts/FjallaOne-Regular.ttf);}
        body{padding:100px;}
    </style>

    <?php 
        $makanan = $_POST['makanan'];

        if($makanan == "rendang"){
            echo "<h1>nama makanan : Rendang</h1>";
            echo "<img src = '../images/rendang.jpeg'> <br>";
            echo "Description: <br>";
            echo "Rendang is a spicy meat dish which originated from the Minangkabau ethnic group of
            Indonesia, and is now commonly served across the country.
            One of the characteristic foods of Minangkabau culture, 
            it is served at ceremonial occasions and to honour guests.";
        }
        else if ($makanan == 'yakiniku'){
            echo "<h1>nama makanan : yakiniku</h1>";   
            echo "<img src = '../images/yakiniku.jpg'> <br>";
            echo "Description: <br>";
            echo "Yakiniku (焼き肉 or 焼肉), meaning 'grilled meat', is a Japanese term that, 
            in its broadest sense, refers to grilled meat cuisine. 'Yakiniku' originally 
            referred to western 'barbecue' food, the term being popularized by Japanese writer 
            Kanagaki Robun (仮名垣魯文) in his Seiyo Ryoritsu (i.e. 'western food handbook') in 1872 (Meiji period).";
        }
        else if ($makanan == 'spageti'){
            echo "<h1>nama makanan : spageti</h1>"; 
            echo "<img src = '../images/spageti.jpg'> <br>";
            echo "Description: <br>";
            echo "Spaghetti is a long, thin, cylindrical, solid pasta.
            Like other pasta, spaghetti is made of milled wheat and water.
            Italian spaghetti is made from durum wheat semolina, 
            but elsewhere it may be made with other kinds of flour.
            ";
        }
        else {
            echo "Nama makanan Tidak ditemukan";
        }
    ?>
</body>
</html>