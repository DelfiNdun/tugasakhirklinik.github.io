<!DOCTYPE html>
<html>
<head>
<Title> Klinik Kesehatan </Title>
</head>
<body background = "data obat.jpg"></body>
<font color="white">
<center><h1>DATA OBAT</h1></center></font>
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
<th>namaobatdanidentifikasiobat</th>
<th>kodeobat</th>
<th>jenisobat</th>
<th>bentukobat</th>
<th>dosisobat</th>
<th>carapenggunaanobatyangdirekomendas</th>
<th>waktupemberianobat</th>
<th>hargaobat</th>
</tr>
<tr>
    <?php
    include "koneksi.php";
    $tampil = mysqli_query($konek, "select * from dataobat");
    while ($data = mysqli_fetch_array($tampil)){
        ?>
        <td><?php echo $data ['namaobatdanidentifikasiobat']; ?></td>
        <td><?php echo $data ['kodeobat']; ?></td>
        <td><?php echo $data ['jenisobat']; ?></td>
        <td><?php echo $data ['bentukobat']; ?></td>
        <td><?php echo $data ['dosisobat']; ?></td>
        <td><?php echo $data ['carapenggunaanobatyangdirekomendasi']; ?></td>
        <td><?php echo $data ['waktupemberianobat']; ?></td>
        <td><?php echo $data ['hargaobat']; ?></td>
      </tr>
      <?php
    }
    ?>
</table>
</body>
</html>