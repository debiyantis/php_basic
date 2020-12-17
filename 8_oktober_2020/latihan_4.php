<?php 
    /*dalam php ada banyak statement operator, contohnya
      "+", "-", "/", "%", "*", dll. 
    */

    $a = 10;
    $b = 4;

    $hasilPenjumlahan = $a+$b;
    $hasilPengurangan = $a-$b;
    $hasilPembagian = $a/$b;
    $hasilPerkalian = $a*$b;
    $hasilModulus = $a%$b;
    //echo "Hasil Penjumlahan: ". $a+$b ."<br>";
    echo "a = $a dan b = $b, maka <br>";
    echo "Hasil Penjumlahan adalah $hasilPenjumlahan" ."<br>";
    echo "Hasil Pengurangan adalah $hasilPengurangan" ."<br>";
    echo "Hasil Perkalian adalah $hasilPerkalian" ."<br>";
    echo "Hasil Bagi atau Modulus adalah $hasilModulus"."<br>";

    //Operator comparison/pembanding

    echo "<hr>";

    $libur = "Minggu";

    if ($libur == "Minggu"){
        echo "Happy Weekend";
    }
    else
    {
        echo "Happy Day";
    }
?>