<!DOCTYPE html>
<html>
<head>
<Title> Klinik Kesehatan </Title>
</head>
<body background = "transaksi.jpg"></body>
<font color="white">
<center><h1>TRANSAKSI</h1></center></font>
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
<table border="1" align="center" width="120%" bgcolor="white">
    <tr bg="white">
<th>NamaDokter</th>
<th>TeleponDokter</th>
<th>NamaPasien</th>
<th>RekamMedis</th>
<th>TeleponPasien</th>
<th>NamaObat</th>
<th>JenisObat</th>
<th>DosisObat</th>
<th>HargaObat</th>
<th>KodeTransaksi</th>
<th>Tanggal</th>
</tr>
<tr>
    <?php
    include "koneksi.php";
    $tampil = mysqli_query($konek, "select * from transaksi");
    while ($data = mysqli_fetch_array($tampil)){
        ?>
        <td><?php echo $data ['NamaDokter']; ?></td>
        <td><?php echo $data ['TeleponDokter']; ?></td>
        <td><?php echo $data ['NamaPasien']; ?></td>
        <td><?php echo $data ['RekamMedis']; ?></td>
        <td><?php echo $data ['TeleponPasien']; ?></td>
        <td><?php echo $data ['NamaObat']; ?></td>
        <td><?php echo $data ['JenisObat']; ?></td>
        <td><?php echo $data ['DosisObat']; ?></td>
        <td><?php echo $data ['HargaObat']; ?></td>
        <td><?php echo $data ['KodeTransaksi']; ?></td>
        <td><?php echo $data ['Tanggal']; ?></td>
      </tr>
      <?php
    }
    ?>
</table>
</body>
</html>