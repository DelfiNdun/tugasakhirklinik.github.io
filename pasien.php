<!DOCTYPE html>
<html>
<head>
<Title> Klinik Kesehatan </Title>
</head>
<body background = "data pasien.jpg"></body>
<font color="white">
<center><h1>DATA PASIEN</h1></center></font>
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
<table border="1" align="center" width="110%" bgcolor="white">
    <tr bg="white">
<th>namalengkappasien</th>
<th>tanggallahirpasien</th>
<th>jeniskelaminpasien</th>
<th>alamatpasien</th>
<th>nomorteleponpasien</th>
<th>idpasien</th>
<th>riwayatmedispasien</th>
<th>rekammedispasien</th>
<th>informasikontakdarurat</th>
</tr>
<tr>
    <?php
    include "koneksi.php";
    $tampil = mysqli_query($konek, "select * from datapasien");
    while ($data = mysqli_fetch_array($tampil)){
        ?>
        <td><?php echo $data ['namalengkappasien']; ?></td>
        <td><?php echo $data ['tanggallahirpasien']; ?></td>
        <td><?php echo $data ['jeniskelaminpasien']; ?></td>
        <td><?php echo $data ['alamatpasien']; ?></td>
        <td><?php echo $data ['nomorteleponpasien']; ?></td>
        <td><?php echo $data ['idpasien']; ?></td>
        <td><?php echo $data ['riwayatmedispasien']; ?></td>
        <td><?php echo $data ['rekammedispasien']; ?></td>
        <td><?php echo $data ['informasikontakdarurat']; ?></td>
      </tr>
      <?php
    }
    ?>
</table>
</body>
</html>