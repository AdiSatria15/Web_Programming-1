<!DOCTYPE html>
<html>
<head>
    <title>Form Input Komentar</title>
</head>
<body>
    <h2>Form Input Komentar</h2>
    <form action="tampilkomentar.php" method="post">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required><br><br>

        <label for="komentar">Komentar:</label><br>
        <textarea name="komentar" id="komentar" rows="4" cols="50" required></textarea><br><br>

        <input type="submit" value="Kirim">
    </form>
</body>
</html>
