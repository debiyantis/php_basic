<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Belajar Form Validation</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<h1 class="title">FORM OPERATOR + CONDITIONAL STATEMENT + <span>LOOP STATEMENT</span>
</h1>
<!--------------------- Form Program Calculator ---------------------->
<div class="calculator_wrapper">
    <h1>Calculator Online</h1>
    <form action="hasil/hasil_perhitungan.php" method="POST">
        <label>Angka1 : <span>(Required) </span></label>
        <input type="number" name = "angka1" required><br>
            <label>Operators : <span>(Required) </span></label>
            <select name = "operator">
                <option selected="selected">- Pilih Operator -</option>
                <option value="+">+</option>
            </select>
        <label>Angka2 : <span>(Required) </span></label>
        <input type="number" name = "angka2" required><br>
        <input type="submit" value="Submit">
    </form>
</div>
<!-------------------------------------------------------------------->

<!--------------------- Form Statement ---------------------------------->
<div class="mkn_wrapper">
    <h1>Statement Form</h1>
    <form action="hasil/hasil_pencarian_makanan.php" method="POST">
        <label>Masukan Nama Makanan : <span>(Required) </span></label>
        <input type="text"  name = "makanan" placeholder="masukan nama makanan" required><br>
        <input type="submit" value="Submit">
    </form>
</div>

<!-------------------------------------------------------------------->

<!--------------------- Form Pengulangan ---------------------------------->
<div class="frm_pgln">
    <h1>Form Pengulangan</h1>
    <form action="hasil/hasil_pengulangan.php" method="POST">
        <label>Masukan Jumlah Pengulangan : <span>(Required) </span></label>
        <input type="number" name = "number" placeholder="masukan jml pengulangan" required><br>
        <p>* Yang Di Ulang :
        	Belajar PHP
        </p><br>
        <input type="submit" value="Submit">
    </form>
</div>
<!-------------------------------------------------------------------->
</body>
</html>