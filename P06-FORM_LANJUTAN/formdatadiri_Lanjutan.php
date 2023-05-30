<html>
    <head>
        <title>form data diri lanjutan</title>
    </head>
<body>
<?php
$nama=$_POST['nama'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];
if(!empty($nama)){
    echo "Nama : $nama <br>";
}
if(!empty($telp)){
    echo "No Telepon : $telp <br>";
}
if(!empty($alamat)){
    echo "Alamat : $alamat";
}
?>
</body>
</html>