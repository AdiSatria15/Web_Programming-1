<html>

<head>
    <title>Tugas 03</title>
</head>
      <body>
                <form action="outputslide5.php" method="POST">
                <h2> Form Registrasi</h2>
                <hr>
                  <table border=2 >
                  <tr><td colspan=2>Isi Data Di Bawah Ini :</td></tr>
                  <tr><td width=50%>Nama</td> <td><input type="text" name=txtnama></td></tr>
                  <tr><td width=50%>Alamat</td> <td><textarea rows=0 cols=0  name=txtalamat></textarea></td></tr>
                  <tr><td width=50%>Tempat Lahir</td> <td><input type="text" name=txttempat></td></tr>
                  <tr><td width=50%>Tanggal Lahir</td> <td><input type="text" name=txtlahir></td></tr>
                  <tr><td width=50%>Jenis Kelamin</td>
                    <td>
                      <input type="radio" name=rjk value="Laki-laki"> Pria
                      <input type="radio" name=rjk value="Perempuan"> Wanita
                    </td></tr>
                    <tr><td width=50%>Pendidikan</td>
                    <td>
                        <select size=1 name=cpend>
                          <option value=D1> D1 </option>
                          <option value=D2> D2 </option>
                          <option value=D3> D3 </option>
                          <option value=S1> S1 </option>
                        </select>
                    </td></tr>
                    <tr><td width=50%><input type="submit" value="Submit"></td>
                        <td><input type="reset" value="Cancel"></td>
                      </tr>
                  </table>
                </form>
    </body>
</html>
