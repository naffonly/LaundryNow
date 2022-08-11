<?php
require '../config/function.php';

$id = $_GET["id"];
$Tanggal =  date('Y-m-d');

if($Tanggal>0) {
    updateData($id,$Tanggal);
    echo "
        <script>
            alert('Pakaian Telah diambil');
            document.location.href = 'data-transaksi.php';
        </script>
    ";
 }else{
    echo "
        <script>
            alert('data gagal diubah');
        </script>
    ";
 }
 
?>   
