<html>
  <head>
    <title></title>
  </head>

    <body>
      <h1> Data Registarsi<hr> </h1>
      <table border=2 >
        <?php
          $nama=$_POST['txtnama'];
          $alamat=$_POST['txtalamat'];
          $tempat_lahir=$_POST['txttempat'];
          $tgl_lahir=$_POST['txtlahir'];
          $jenis=$_POST['rjk'];
          $pendidikan=$_POST['cpend'];
            if($pendidikan=="D1")
            {
              $nama_pend="Diploma I";
            }
            else
            if($pendidikan=="D2")
            {
              $nama_pend="Diploma II";
            }
            else
            if($pendidikan=="D3")
            {
              $nama_pend="Diploma III";
            }
            else

            $nama_pend="Strata I";
            echo"
            <tr>
              <td width=50%>Nama</td><td>$nama</td>
            </tr>
            <tr>
              <td width=50%>Alamat</td><td>$alamat</td>
            </tr>
            <tr>
              <td width=50%>Tempat Lahir</td><td>$tempat_lahir</td>
            </tr>
            <tr>
              <td width=50%>Tanggal Lahir</td><td>$tgl_lahir</td>
            </tr>
            <tr>
              <td width=50%>Jenis kelamin</td><td>$jenis</td>
            </tr>
            <tr>
              <td width=50%>Pendidikan</td><td>$pendidikan</td>
            </tr>
            <tr>
              <td width=50%>Nama pendidikan </td><td>$nama_pend</td>
            </tr>
              ";
              ?>
            </table>
          <a href="inputslide5.php">Back To Home</a>
        </body>
        </html>
