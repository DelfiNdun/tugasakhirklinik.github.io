<!DOCTYPE html>
<html>
<head>
<Title> Klinik Kesehatan </Title>
</head>
<body background = "data medis.jpg"></body>
<font color="white">
<center><h1>DATA MEDIS</h1></center></font>
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
<table border="1" align="center" width="130%" bgcolor="white">
    <tr bg="white">
<th>namalengkappasien</th>
<th>umurpasien</th>
<th>jeniskelamin</th>
<th>alamat</th>
<th>nomortelepon</th>
<th>informasikontakdarurat</th>
<th>riwayatmedispasien</th>
<th>gejaladantandatandapasien</th>
<th>diagnosapasien</th>
<th>rencanaperawatan</th>
<th>hasil pemeriksaandan tes</th>
<th>catatanperkembanganpasien</th>
</tr>
<tr>
    <?php
    include "koneksi.php";
    $tampil = mysqli_query($konek, "select * from datamedis");
    while ($data = mysqli_fetch_array($tampil)){
        ?>
        <td><?php echo $data ['namalengkappasien']; ?></td>
        <td><?php echo $data ['umurpasien']; ?></td>
        <td><?php echo $data ['jeniskelamin']; ?></td>
        <td><?php echo $data ['alamat']; ?></td>
        <td><?php echo $data ['nomortelepon']; ?></td>
        <td><?php echo $data ['informasikontakdarurat']; ?></td>
        <td><?php echo $data ['riwayatmedispasien']; ?></td>
        <td><?php echo $data ['gejaladantandatandapasien']; ?></td>
        <td><?php echo $data ['diagnosapasien']; ?></td>
        <td><?php echo $data ['rencanaperawatan']; ?></td>
        <td><?php echo $data ['hasilpemeriksaandantes']; ?></td>
        <td><?php echo $data ['catatanperkembanganpasien']; ?></td>
      </tr>
      <?php
    }
    ?>
</table>
</body>
</html>