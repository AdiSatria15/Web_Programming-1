<html>
    <head>
        <title>Data Mahasiswa</title>
    </head>
    <body>
        <?php
        $nama=$_POST['nama'];
        $alamat=$_POST[''];
        $jeniskel=$_POST['jeniskel'];
        $pekerjaan=$_POST['pekerjaan'];
        $hobi1=$_POST['hobi1'];
        $hobi2=$_POST['hobi2'];
        $hobi3=$_POST['hobi3'];
        ?>
        <table border=1 bgcolor="Cyan">
            <tr>
                <td colspan=2 align="center"><b>Data Mahasiswa</b></td>
            </tr>
            <tr>
                <td>Nama</td><td><?php echo $nama; ?></td>
            </tr>
            <td>Alamat</td><td><?php echo $alamat; ?></td>
</tr>
<td>Jenis Kelamin</td><td><?php echo $jeniskel; ?></td>
</tr>
<td>Pekerjaan</td><td><?php echo $pekerjaan; ?></td>
</tr>
<td>Hobi</td><td><?php echo $hobi1,",",$hobi2,",",$hobi3; ?></td>
</tr></table>
<a href="forminputmahasiswa.php">INPUT DATA LAGI</a>
    </body>
</html>