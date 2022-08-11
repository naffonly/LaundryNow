<?php
require '../config/function.php';

$data = query("SELECT * FROM transaksi");



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../assets/css/data-transaksi.css?v=<?= time();?>">
	
	<title>LaundryNow</title>
</head>
<body>
<nav>
    <div class="logo">
      <a href="../index.php"><h4>LaundryNow</h4></a>
    </div>
	<ul>
	  <li><a href="beranda.php">Beranda</a></li>
	  <li><a href="masukan-transaksi.php">Masukan Transaksi</a></li>
	  <li><a href="data-transaksi.php">Data Transaksi</a></li>
	  
	</ul>
  </nav>
	<div class="container">
		<center><h1>Data Transaksi</h1></center>
	<div style="overflow-x: auto; padding: 20px;">
  <table border="1" cellpadding="10" cellspacing="0">
   <thead>
   	 <tr class="tr1">
      <th>No.</th>
      <th>No. order</th>
      <th>Nama</th>
	  <th>Alamat</th>
	  <th>Nomer HP</th>
      <th>Tanggal Terima</th>
      <th>Tanggal Ambil</th>
	  <th>No. Keranjang</th>
      <th>Berat</th>
      <th>Diskon</th>
      <th>Total Bayar</th>
      <th>Aksi</th>
    </tr>
   </thead>
    <tbody>
	<?php $num = 1?>
    <?php foreach ($data as $row ): ?>
    <tr>
        <td><?= $num;?></td>
        <td><?= $row["id"];?> </td>
        <td><?= $row["nama"];?></td>
        <td><?= $row["alamat"];?></td>
        <td><?= $row["nomer_hp"];?></td>
        <td><?= $row["tgl_masuk"];?></td>
        <td><?= $row["tgl_keluar"];?></td>
        <td><?= $row["no_keranjang"];?></td>
		<td><?= $row["berat"];?></td>
		<td><?= $row["diskon"];?></td>
		<td><?= $row["total_bayar"];?></td>
		<td><a href="selesai-transaksi.php?id=<?= $row["id"];?>" class="btn btn-primary">Konfirmasi</a>
	      	<a href="hapus-transaksi.php?id=<?= $row["id"];?>" class="btn btn-danger">Hapus</a></td>
    </tr>
    <?php $num++ ?>
    <?php endforeach; ?>
	      
    </tbody>
  </table>
</div>
</div>
</body>
</html>