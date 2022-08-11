<?php

 require '../config/function.php';

 if (isset($_POST["submit"])) {

    if
     ($_POST>0) {
        createData($_POST);
        echo "
            <script>
                alert('data berhasil ditambahkan');
                document.location.href = 'data-transaksi.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('data gagal ditambahkan');
            </script>
        ";
    }
 
    
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LaundryNow</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/masukan-transaksi.css">
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
		<h1>From Transaksi Laundry</h1>

	<form action="" method="post">

    <label for="nama">Nama</label>
    <input type="text" id="nama" name="nama" placeholder="Nama Pelanggan" required>

    <label for="nomer-hp">Nomer HP</label>
    <input type="text" id="nomor-hp" name="nomerhp" placeholder="+62.." required>
	
	<label for="alamat">Alamat</label>
    <input type="text" id="alamat" name="alamat" placeholder="Alamat" required>
	
	<input type="hidden" name="tanggal" value="<?php $tgl_in=date('Y-m-d'); echo $tgl_in; ?>">
   
	<label for="keranjang">Keranjang</label>
    <input type="text" id="keranjang" name="keranjang" placeholder="0" required>

	<label for="berat">Berat</label>
    <input type="text" id="berat" name="berat" placeholder="0" required>

	<label for="diskon">Diskon</label>
    <input type="text" id="diskon" name="diskon" placeholder="0" value="" required>

	<input class="btn btn-success" type="submit" value="simpan" name="submit">
    
</form>

	</div>
</body>
</html>