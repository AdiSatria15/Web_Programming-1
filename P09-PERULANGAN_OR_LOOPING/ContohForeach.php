<html>
    <head>
        <title>Penggunaan Foreach </title>
    </head>
<body>
    Menggunakan Foreach;
    <br><br>
    <?php
    $warna = array ("Merah", "Biru", "Hijau", "Kuning");
    foreach ($warna as $nilai){
        echo "$nilai <br>";
    }
    ?>
    <style>
        body{
            width: 100w;
            height: 100vw;
            background:linear-gradient(red , black);
            text-align: center;
            font-weight: bold;
            border: 100px;
            font-size: 40px;
            text-decoration: snow;
            box-sizing: border-box;
            border-radius: 100px;
        }
    </style>
</body>
</html>