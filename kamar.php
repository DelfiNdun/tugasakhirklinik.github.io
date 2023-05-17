<!DOCTYPE html>
<html>
<head>
<Title> Klinik Kesehatan </Title>
</head>
<body background = "data kamar.jpg"></body>
<font color="white">
<center><h1>DATA KAMAR</h1></center></font>
<br>
<br> 
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<table border="1" align="center" width="80%" bgcolor="white">
    <tr bg="white">
<th>nomoridentitaskamar</th>
<th>jeniskamar</th>
<th>fasilitaskamar</th>
<th>statusketersediaankamar</th>
<th>biayasewakamar</th>
</tr>
<tr>
    <?php
    include "koneksi.php";
    $tampil = mysqli_query($konek, "select * from datakamar");
    while ($data = mysqli_fetch_array($tampil)){
        ?>
        <td><?php echo $data ['nomoridentitaskamar']; ?></td>
        <td><?php echo $data ['jeniskamar']; ?></td>
        <td><?php echo $data ['fasilitaskamar']; ?></td>
        <td><?php echo $data ['statusketersediaankamar']; ?></td>
        <td><?php echo $data ['biayasewakamar']; ?></td>
      </tr>
      <?php
    }
    ?>
</table>
</body>
</html>