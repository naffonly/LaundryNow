<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "db_laundrynow";

$conn = mysqli_connect($hostname,$username,$password,$database);

function query($query)
{
    global $conn;
   $result = mysqli_query($conn, $query);
   $rows = [];

    while ( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;

}

function createData($data)
{
    
    global $conn;

    $kilo = 6000;
    
    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $nomerhp =($data["nomerhp"]);
    $tgl_in = ($data["tanggal"]);
    $nokeranjang = ($data["keranjang"]);
    $berat = ($data["berat"]);
	$diskon = ($data["diskon"]);

    $total = ($berat * $kilo) - $diskon;

	$totalbayar = htmlspecialchars($total);
    
    $query = "INSERT INTO transaksi VALUE
        ('','$nama','$alamat','$nomerhp','$tgl_in','','$nokeranjang','$berat','$diskon','$totalbayar')
        ";

        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);

}

function updateData($id,$tgl){
    
global $conn;

// masukan data
$query = "UPDATE transaksi SET
        tgl_keluar = '$tgl'
        WHERE id = $id
    ";
   

    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

function deleteData($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM transaksi WHERE id = $id");
    return mysqli_affected_rows($conn);
}


// TOkEN API
function getToken() {
    return ["wkax","gtui","fgcb"];
}


function isInputValid($key){
    if (in_array($key,getToken())) {

        return true;
    } else {
       
        return false;
    }
    
}

function get_authorization_header(){
    $headers = null;
    if (isset($_SERVER['Authorization'])) {
        $headers = trim($_SERVER["Authorization"]);
    }
    else if (isset($_SERVER['HTTP_AUTHORIZATION'])) {
        $headers = trim($_SERVER["HTTP_AUTHORIZATION"]);
    } elseif (function_exists('apache_request_headers')) {
        $requestHeaders = apache_request_headers();
        $requestHeaders = array_combine(array_map('ucwords', array_keys($requestHeaders)), array_values($requestHeaders));
        if (isset($requestHeaders['Authorization'])) {
            $headers = trim($requestHeaders['Authorization']);
        }
    }
    return $headers;
}

function get_bearer_token() {
    $headers = get_authorization_header();
    // HEADER: Get the access token from the header
    if (!empty($headers)) {
        if (preg_match('/Bearer\s(\S+)/', $headers, $matches)) {
            return $matches[1];
        }
    }
    return null;
}
?>