<?php
 
require '../config/function.php';

$dbh=new PDO('mysql:host=localhost;dbname=db_laundrynow','root','');

$request_method=$_SERVER["REQUEST_METHOD"];

if (isInputValid(get_bearer_token())) {

    if($request_method === "GET"){

        // METHOD GET UNTUK SEMUA DATA DENGAN BODY
        // MENGMASUKAN PADA PARAM AGAR TOKEN DAPAT DI CEK
        
        $db=$dbh->prepare('SELECT*FROM transaksi');
        $db->execute();
        $list=$db->fetchAll(PDO :: FETCH_ASSOC);
        $datajson = json_encode($list);
        echo $datajson;

    }else if($request_method === "POST"){

        // METHOD POST UNTUK MEMASUKAN DATA DENGAN BOBY
        // 'nama' => 'nilai'
        // 'alamat' => 'nilai'
        // 'nomerhp' => 'nilai'
        // 'tanggal' => 'nilai'
        // 'keranjang' => 'nilai'
        // 'berat' => 'nilai'
        // 'diskon' => 'nilai'

        createData($_REQUEST);
        http_response_code(201);
        echo json_encode([
            'message' => "data berhasil di input"
        ]);
        
    }elseif ($request_method === "DELETE") {

        // METHOD DELETE UNTUK MENGHAPUS DATA BERDASARKAN ID DENGAN PARAMS
        // 'id' => 'data'

        parse_str(file_get_contents('php://input'), $_GET);
        deleteData($_REQUEST['id']);
        http_response_code(201);
        echo json_encode([
            'message' => "data berhasil di dihapus"
        ]);

    }elseif($request_method === "PUT"){

        // METHOD MERUBAH DATA TANGGAL BERDASARKAN ID DENGAN BODY 
        // 'id' => 'data'
        // 'tgl' => 'date (y-m-d)'

        parse_str(file_get_contents('php://input'), $_PUT);
        updateData($_PUT['id'],$_PUT['tanggal']);
        http_response_code(201);
        echo json_encode([
            'message' => "data berhasil di edit"
        ]);
    }else{
        http_response_code(404);
        echo "not found";
        die;
    }
}else {
    echo json_encode([
        'message' => "Token Gagal"
    ]);
}

?>