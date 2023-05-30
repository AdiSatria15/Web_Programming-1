<html>

<head>

    <title>Hasil Hitung Rumus</title>

</head>

<br>HASIL HITUNG RUMUS</br>

<?php

if($_POST){

    $rad = $_POST['p']; 

if (($rad == "Persegi Panjang") && (!empty($rad))) {

    $nA = $_POST['A'];

    $nB = $_POST['B'];

function add($nA, $nB) {

    $luas = $nA * $nB;

return $luas;

}

echo "<br>Nilai a adalah = $nA, </br>";

echo "Nilai b adalah = $nB, </br>";

echo "Rumus yang dipilih adalah = ".$rad;

$luas = add($nA, $nB);

echo "<br>Hasil perhitungan rumus = $luas</br>";

}

if (($rad == "Segitiga") && (!empty($rad))){

    $alas = $_POST['A'];

    $tinggi = $_POST['B'];

    $hasil = ($alas * $tinggi)/2 ;

echo "<br><br>Alas = " .$alas;

echo "</br> Tinggi = " .$tinggi;

echo "</br> Jadi (Alas*Tinggi)/2 adalah".$hasil;

echo "<br/>Rumus Yang dipilih =".$rad;

}

}

?>

</td></tr></pre>

</head>

</table></form>