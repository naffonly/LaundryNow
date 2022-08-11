<?php

require '../config/function.php';
 
$id = $_GET["id"];
if
($id>0) {
   deleteData($id);
   echo "
       <script>
           alert('data berhasil hapus');
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


// global $conn;

//         // masukan data
//         mysqli_query($conn, "DELETE FROM transaksi WHERE id = $id");

//             echo "<script language='javascript'>alert('Data dihapus');</script>";
//             echo '<meta http-equiv="refresh" content="0; url=data-transaksi.php">';
            
//             return mysqli_affected_rows($conn);
?>