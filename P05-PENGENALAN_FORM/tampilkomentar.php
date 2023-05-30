<!DOCTYPE html>
<html>
<head>
    <title>Tampil Komentar</title>
</head>
<body>
    <h2>Komentar yang telah dikirim:</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $komentar = $_POST["komentar"];

        echo "<p><strong>Nama:</strong> $nama</p>";
        echo "<p><strong>Komentar:</strong> $komentar</p>";
    }
    ?>
</body>
</html>
